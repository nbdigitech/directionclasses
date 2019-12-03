function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});
















    function readUR(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrapp').hide();

      $('.file-upload-imagee').attr('src', e.target.result);
      $('.file-upload-contentt').show();

      $('.image-titlee').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUploadd() {
  $('.file-upload-inputt').replaceWith($('.file-upload-inputt').clone());
  $('.file-upload-contentt').hide();
  $('.image-upload-wrapp').show();
}
$('.image-upload-wrapp').bind('dragover', function (){
        $('.image-upload-wrapp').addClass('image-dropping');
    });
    $('.image-upload-wrapp').bind('dragleave', function () {
        $('.image-upload-wrapp').removeClass('image-dropping');
});









    $(function() {
  $( ".calendar" ).datepicker({
    dateFormat: 'dd/mm/yy',
    firstDay: 1
  });
  
  $(document).on('click', '.date-picker .input', function(e){
    var $me = $(this),
        $parent = $me.parents('.date-picker');
    $parent.toggleClass('open');
  });
  
  
  $(".calendar").on("change",function(){
    var $me = $(this),
        $selected = $me.val(),
        $parent = $me.parents('.date-picker');
    $parent.find('.result').children('span').html($selected);
  });
});

