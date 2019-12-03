jQuery(document).ready(function($) {
  "use strict";
  var $upload_button = $('.represent-gallery-upload'),
      $thumbs_wrap = "",
      $input_gallery_items="";
  if (wp.media !== undefined) {
    wp.media.customlibEditGallery = {

      frame : function() {

        if (this._frame)
          return this._frame;

        var selection = this.select();

        this._frame = wp.media({
          id : 'represent_gallery_upload_get_images',
          frame : 'post',
          state : 'gallery-edit',
          title : wp.media.view.l10n.editGalleryTitle,
          editing : true,
          multiple : true,
          selection : selection
        });

        this._frame.on('update', function() {

          var controller = wp.media.customlibEditGallery._frame.states.get('gallery-edit');
          var library = controller.get('library');
          // Need to get all the attachment ids for gallery
          var ids = library.pluck('id');

          $input_gallery_items.val(ids);

          jQuery.ajax({
            type : "post",
            url : ajaxurl,
            data : "action=represent_gallery_upload_get_images&ids=" + ids,
            success : function(data) {

              $thumbs_wrap.empty().html(data);

            }
          });

        });

        return this._frame;
      },

      init : function() {

        $upload_button.on("click",function(event) {

          $thumbs_wrap = $(this).next();
          $input_gallery_items = $thumbs_wrap.next();

          event.preventDefault();
          wp.media.customlibEditGallery.frame().open();

        });
      },

      // Gets initial gallery-edit images. Function modified from wp.media.gallery.edit
      // in wp-includes/js/media-editor.js.source.html
      select : function() {

        var shortcode = wp.shortcode.next('gallery', '[gallery ids="' + $input_gallery_items.val() + '"]'), defaultPostId = wp.media.gallery.defaults.id, attachments, selection;

        // Bail if we didn't match the shortcode or all of the content.
        if (!shortcode)
          return;

        // Ignore the rest of the match object.
        shortcode = shortcode.shortcode;

        if (_.isUndefined(shortcode.get('id')) && !_.isUndefined(defaultPostId))
          shortcode.set('id', defaultPostId);

        attachments = wp.media.gallery.attachments(shortcode);
        selection = new wp.media.model.Selection(attachments.models, {
          props : attachments.props.toJSON(),
          multiple : true
        });

        selection.gallery = attachments.gallery;

        // Fetch the query's attachments, and then break ties from the
        // query to allow for sorting.
        selection.more().done(function() {
          // Break ties with the query.
          selection.props.set({
            query : false
          });
          selection.unmirror();
          selection.props.unset('orderby');
        });

        return selection;

      }
    };
  }


  if (wp.media !== undefined) {
    $(wp.media.customlibEditGallery.init);
  }


});