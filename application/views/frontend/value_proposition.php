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
    
    




  <section class="container">  
 <div class="row">
     
      
      
<aside class="col-md-4 sidebar sidebar-right">

				<div class="row panel">
					<div class="col-xs-12">
                                            <h2>Benefits of Training With ISTI</h2>
                                            <b>Our Profile</b><br/>
                                            <strong>Content</strong>
                                            <p>Our professional facilitators engage, educate, motivate, and entertain, and in that priority. New skills, new information, and new insights produce new customers, new sales, and increased profits for your business.</p>
                                        </div><hr>
                                    <div class="col-xs-12">
                                        <strong>Authority</strong>
                                        <p>Wouldn't you rather take advice from seasoned professionals that have experience in the marketing field and have invested the time and effort to thoroughly research this field?</p>
                                        
                                    </div><hr>
                                    <div class='col-xs-12'>
                                        <strong>Delivery</strong>
                                        <p>We are professionals that can engage and entertain, delivering powerful content with passion and pizzazz. After all, you want your people to remember the point, not just the punch line.</p>
                                        
                                    </div><hr>
                                    <div class="col-xs-12">
                                        
                                        <strong> Customization</strong>
                                        
                                        <p>If a speaker is going to tell you how to run your business better, they better understand how you run your business. We at ISTI will exude personal interest in your industry, your company, and your people. We aim to quick study your business and will customize until we sound like we’re from home office. An outsider’s insight may prove priceless.</p>
                                    </div></div>
                                
                                    <div class="row panel">
                                        <strong>Leave a Comment</strong>
                                 <form id="sideform">
        
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="Name" name="name" id="name" />
            </div>

            <div class="large-6 columns">
              <input type="text" placeholder="Surname" name="surname" id="surname" />
            </div>
          </div>
          
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="Position at Company" name="position" id="position" />
            </div>
            
            <div class="large-6 columns">
              <input type="text" placeholder="Company Name" name="company" id="company" />
            </div>
          </div>
          
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="Email Address" name="email" id="email" />
            </div>

           <div class="large-6 columns">
              <input type="text" placeholder="Work Telephone Number" name="tel" id="tel" />
            </div>
          </div>
          
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="Cell Phone Number" name="cell" id="cell" />
            </div>
          </div>
					
          <div class="submit"><input type="submit" name="submit" id="submit" class="submit-me" value="Submit" /></div>
        </form>
                                </div>
    
				

			</aside>
 </div></section>
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