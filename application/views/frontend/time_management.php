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
						<h2>Time Management Skills</h2>
                                                <strong>Scope:</strong>
                                                <p>Time Management Skills will enable participants learn how to increase their work effectiveness and productivity, achieve greater control of their daily activities and achieve more in shorter times.</p>
</div><img src="<?php echo base_url();?>application/views/img/orvel-training.jpg">   <div id="sidebarsd">
                                               <strong>Course Objectives</strong><br/>
                                            At the end of the Time Management Skills course, participants will be able to;
                                           	
                                            <ul>
                                                <li>Identify their own time wasters and adopt strategies for eliminating them from their work patterns</li>
                                                <li>Identify causes of procrastination and apply appropriate means to overcome them</li>
                                                <li>Clarify and prioritize their objectives and goals</li>
                                                <li>Adopt appropriate strategies to dealing with interruptions</li>
                                                <li> Use practical means to organize their work</li>
                                                <li> Delegate tasks more effectively</li>
                                            </ul>   
                                        </div>
				</div>
				<div class="row panel">
                                     
					<div class="col-xs-122">
                                          

    
    
    
    
   
    
    
    
    

    
                                               

                                            <strong>Course content</strong>
                                            <ul> <li>Getting started</li><ul>
                                                    <li>Keeping a time log</li>
                                                    <li>Identifying the time-waster</li>
                                                </ul>
                                            <li> Foundational Principles</li>
                                            <ul>
    
                                                <li>Overcoming procrastination</li> 
                                                <li>Personal and business goals</li>
                                                <li>Prioritizing activities</li>
                                            </ul>
                                            <li>Organizing your work </li>
                                            <ul>
                                                <li>Daily and weekly planning</li> 
                                                <li> Effective time management tools</li>
                                            </ul>
                                            <li>Delegating tasks – horizontally and vertically </li>
                                            <ul><li>Leadership and time management</li>
                                                <li>Effective delegation</li> 
                                                <li>Delegation and staff development</li>
                                            </ul>
                                            <li> Planning Pitfalls</li>
                                            <ul>
                                            <li>Developing and maintaining good time management habits</li>
                                            </ul>
                                            </ul>
                                            
                                            
                                            <strong>Leave us a reply or sign up</strong>
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

