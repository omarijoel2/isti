<?php $this->load->view('frontend/header');?>
<body class="home page page-id-2 page-template page-template-page-home page-template-page-home-php masthead-fixed full-width grid">
     <div class="contain-to-grid header">
      <div class="row">
        
        <div class="large-12 columns">
         <img src="<?php echo base_url();?>application/views/img/logo.png">
          
          
             <div class="top-contact right"><font face="Century Gothic"> <img src="<?php echo base_url();?>application/views/nova/images/ico/icon-contact.png">: <span>+254-786 305 030,
                    +254-731 305 030</span>
</div>             
          
        </div>
        
       
        
          <?php $this->load->view('frontend/menu');?>
          
          
          
        </div> 
        
      </div>
   <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
       <div class="row panel">
           <div class="row">
               
               
               <p align="center"><strong>To reach Us this is our physical address</strong></p>
                  <p> <b>
                       <i class="fa fa-fw fa-building-o"></i>AACC Complex, 4th Floor,<br/>
                       <i class="fa fa-fw fa-road"></i>Waiyaki way, Westlands,<br/>
                         <br/>
                       <i class="fa fa-fw fa-envelope"></i>P.O Box 4921-00100,<br/>
                       <i class="fa fa-fw fa-flag"></i>Nairobi.<br/>
                       <i class="fa fa-fw fa-envelope-o"></i>Email:info@istiglobal.com<br/>
                       <i class="fa fa-fw fa-phone-square"></i>LandLine:020 2484709<br/>
                      <i class="fa fa-fw fa-phone"></i> office: +254 786 305 030
                       
                   </b>
                   
                   
               </p>
           </div>
            <div class="col-md-8">
                <h3>Send us a Message</h3>
				<?php echo form_open('contact/sendmail');?>
                <!--<form action="contact/send_email"name="sentMessage" id="contactForm" novalidate>-->
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" name="name"class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>subject:</label>
                            <input type="tel" name="subjectLine"class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea name="message" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <?php $arr = array('class'=>'btn btn-primary','value'=>'Send Message');?>
                    <!-- For success/fail messages -->
                    <?php echo form_submit($arr);?>
                    <!--<button type="submit" class="btn btn-primary">Send Message</button>-->
                </form>
            </div></div>

       
   <div class="contain-to-grid footer-links">
      <div class="row">
        <div class="large-12 columns">
        
          <ul class="social-icons">
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/facebook.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/twitter.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/linkedin.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/youtube.png" /></a></li>
              <li><a href=""><img src="<?php echo base_url();?>application/views/img/icons/rss.png" /></a></li>
            </ul>
          
          <div class="medium-4 large-4 columns">
            <p class="copy right"><?php echo date("Y");?> Difbac &reg; All Rights Reserved</p>
          </div>
        
        </div>
      </div>
    </div>
      
 <script src="<?php echo base_url();?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/js/foundation.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/jquery.bxslider.css" />
    <script>
      $(document).foundation();
			
			/* $(document).ready(function(){
				$('#myModal').foundation('reveal', 'open');		  
			}); */
			
			$(document).ready(function() {
                
                //if (Modernizr.mq('only screen and (min-width: 40.063em)')) {
                
                  if ($.cookie('modal_shown') == null) {
                        $.cookie('modal_shown', 'yes', { 
                          expires: 1, path: 'http://www.istiglobal.com/' 
                      });
                    $('#myModal').foundation('reveal', 'open');	
                    }
                //}
			});			
			
			$(document).ready(function(){
		    $('.bxslider').bxSlider({
					auto: true,
  				autoControls: false,
					pause: 10000
				});
				
				$('.bxslider2').bxSlider({
					minSlides: 6,
					maxSlides: 6,
					slideWidth: 170,
					slideMargin: 10,
					ticker: true,
					speed: 84000
				});
			});
			
			var toggle = false;
	    $(".search-bar").click(function() {
		
				if (toggle === false) {
					$('#search-form').animate({
						top : '0px'
					}, 100);
					toggle = true;	
				} 
		
				else if (toggle === true) {
					$('#search-form').animate({
						top : '-60px'
					}, 100);
					toggle = false;
				}
			});
    </script>
<script type="text/javascript">Cufon.now();</script>
	<!--<script type='text/javascript' src='wp-includes/js/comment-reply.min50fa.js?ver=4.2.1'></script>
<script type='text/javascript' src='wp-content/themes/sales-guru/js/functions652b.html?ver=20131209'></script>-->
</body>


</html>