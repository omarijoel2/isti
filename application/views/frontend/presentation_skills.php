<?php $this->load->view('frontend/header');?>
<body class="home page page-id-2 page-template page-template-page-home page-template-page-home-php masthead-fixed full-width grid">
    
    
    



		<div class="contain-to-grid top-strip">
      <div class="row">
        <div class="large-12 columns">
      
            <div class="top-contact right"><font face="cambria"> CONTACT US: <span>+254-786 305 030,
                    +254-731 305 030</span>
</div>
      
        </div>
      </div>
    </div>
    
    
    <div class="contain-to-grid header">
      <div class="row">
        
        <div class="large-12 columns">
          <div class="medium-6 large-6 columns">
            <div class="logo"><img src="<?php echo base_url();?>application/views/img/logo.png"></div>
          </div>
          
          <div class="medium-6 large-6 columns hide-for-small-only right">
                          
          </div>
        </div>
        
       
        
          
         <?php $this->load->view('frontend/menu');?>
          </div> 
           <section class="container">  
 <div class="row">
     
      
      
<aside class="col-md-4 sidebar sidebar-right">
		<div class="row panel">
					<div class="col-xs-12">
                                            <h2>Presentation Skills</h2>
                                                <strong>Scope:</strong>
                                                <p>Presentation Skills will enable participants learn some of the successful presenting techniques that other salespeople have used to make their presentation an enjoyable experience for their audience. As you persuade your client about the services, you will find these techniques invaluable.</p>
</div><img src="<?php echo base_url();?>application/views/img/orvel-training.jpg">   <div id="sidebarsd">
    <strong>Course content</strong>
                                         <ul>
                                             <li> Understanding your audience’s needs</li>
                                             <li> Assessing the audience environment</li>
                                             <li>Planning your presentation</li>
                                             <li>Designing & developing your story</li>
                                             <li>Practicing your presentation</li>
                                             <li> Delivering your message, and</li>
                                             <li> Closing the presentation</li>
 
                                             
                                            </ul>
                                                 
                                        </div>
				</div>
				<div class="row panel">
                                     
					<div class="col-xs-122">
                                     
                                            
                                            <strong>Course Objectives</strong><br/>
                                            At the end of the Presentation Skills course, participants will be able to;
                                           	
                                            <ul>
                                                
                                                <li>Plan the structure of a presentation</li>
                                                <li>Create a dynamic opening to a presentation</li>
                                                <li>Create visuals to compliment and clarify their message</li>
                                                <li>Know when and how to use humor</li>
                                                <li>Acquire PowerPoint presentation skills</li>
                                                <li>Communicate effectively to different audiences</li>
                                                <li> Learn techniques to reduce stress and fear associated with presentation</li>
                                                <li> Develop powerful body language communication expertise</li>

                                                
                                                </ul> 
                                            <strong>Enquire about this course</strong>
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
                                   
				</div>
 
			</aside>
 </div></section>
          
        
        
      </div>
    
    
    
    
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

