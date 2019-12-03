@extends('layouts.Master')
@section('main-section')
<script type="application/ld+json">																									
	{																								
	"@context": "http://schema.org",																								
	"@type": "LocalBusiness",
	"image": "https://www.directionclasses.com/public/assets/images/logo.png",	
	"priceRange": "5000-50000",
	"address": {																								
	"@type": "PostalAddress",																								
	"addressLocality": "Mulund",																								
	"addressRegion": "Mumbai",																								
	"postalCode":"400080",																								
	"streetAddress": "Direction Classes C-wing Shop No. 18 , Golden Tower , Veena Nagar Mulund, Mumbai (M.H)."																								
	},																								
	"description": "we are here to give you the best showing administration for IGCSE, CBSE, ICSE, IBDP, HSC in your general vicinity. We additionally give you online test series, E-book service. Our instructing sessions are fun learning and inventive, consolidating every one of these techniques and rationale's we manufacture central ideas. Our student batch sizes are fitting with the goal that we can actually screen every single youngster's execution.",																								
	"name": "Directionclasses Mumbai",																								
	"telephone": "+91 9987758132",																								
	"openingHours": "Mon-Sat 9:00 am to 6:00 pm"																							
	}																								
	</script>
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://www.directionclasses.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Contact",
    "item": "https://www.directionclasses.com/Contact"
}
  ]
}
</script>
<title>Best Coaching Institute In Mumbai Contact Us +91 9987758132</title>
  <meta name="description" content="Best coaching institute in Mumbai for IGCSE understudies. Every one of the teachers is very much qualified, experienced and subject specialists who are devoted to the general improvement of the Child. After the clarification, loads of Practice paper is given to the student, which are part savvy and test paper solving.we have facilities of home tutor also teachers for CBSE and ICSE boards" />
  <meta name="keywords" content="Top 10 coaching institute,IGCSE,Private coaching,home tutor,online practice paper,download Ebook,Live classes,igcse maths past papers,physics past papers,Biology past papers,igcse syllabus,cambridge igcse,jee coaching classes,cbse syllabus,icse syllabus for class 10,ibdp,icse online learning,test series for icse class 10">
   <meta name="canonical" content="https://www.directionclasses.com/Contact">
   <meta name="robots" content="index,follow" />
   </head>
<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Contact</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{route('Index')}}">Home</a>
		                        </li>
		                        <li>Contact</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div><!-- .breadcrumbs-inner end -->
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
        		<div id="googleMap">
        		     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.4149321194093!2d72.93583344004001!3d19.158923265323445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b870ba222b45%3A0x9ecf50848e66ec10!2sDirection+Classes!5e0!3m2!1sen!2sin!4v1535617907763" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        		</div>
        		<div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address - 1</h4>
    						<p>Shop No.40, Mayuresh Shristhi,</p>
    						<p>Opposite Asian Paints, LBS Road,</p>
    						<p>Bhandup (West) Mumbai (M.H).</p>
    					</div>
    				</div>

    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address - 2</h4>
    						<p>Direction Classes </p>
    						<p>C-wing Shop No. 18 , Golden Tower ,</p>
    						<p>Veena Nagar Mulund, Mumbai (M.H).</p>
    					</div>
    				</div>

    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address - 3</h4>
    						<p>Direction Classes,</p>
    						<p>609, Filix Building, Opposite Asian Paints,</p>
    						<p>Above Vijay Sales, LBS Marg, Bhandup (W),Mumbai (M.H).</p>
    					</div>
    				</div>
    			</div>


    			<div class="row contact-address-section">
    				<div class="col-md-2"></div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel: +09987758132"> +91-09987758132</a>
    						
    					</div>
    				</div>


    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:directionclassesmumbai@gmail.com
"><p>directionclassesmumbai@gmail.com
</p></a>
    					
        				</div>
        			</div>
        			<div class="col-md-2"></div>
        		</div>
        	


        		<div class="contact-comment-section">
        			<h3>Leave Comment</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="{{route('ContactMail')}}">
					    {{csrf_field()}}
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Full Name*</label>
										<input name="Name" id="fname" required class="form-control" type="text">
									</div>
								</div>
								
							
							
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="Email" id="email" required class="form-control" type="email">
									</div>
								</div>
								
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="Message" class="textarea form-control"></textarea>
									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Submit Now">
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->     
       
        <!-- Partner Start -->
      
        <!-- Partner End -->

 @endsection