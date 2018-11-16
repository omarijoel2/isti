<?php $this->load->view('frontend/header');?>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/bootstrap-responsive.min.css">
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
        
      </div><section class="title">
        
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Team Building and Activities</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Team Building and Activities</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
           <section class="container">  
 <div class="row">
     
      
      
<aside class="col-md-4 sidebar sidebar-right">
		<div class="row panel">
					<div class="col-xs-12">
						<h2>Team Building and Activities</h2>
                                                <p><strong>Scope</strong>:<br />
Team Building and Activities course will enable participants learn the value of the different behavioral styles of the people in the team. They will learn how to listen better and to ask valuable questions, use words to desired effect and deal with different team challenges. This course will enable them adopt accountability, purpose, cohesion and collaborative tendencies that will see them become first rate producers.</p>

    At the end of Team Building and Activities course, the participant should be able to;                                           
    <ul>
<li>Understand the differences between a group and a team</li>
<li>Become an effective team player</li>
<li>Explore behavior styles and the strengths each style brings to the team</li>
<li>Promote open communication and team involvement</li>
<li>Understand the importance of helping team members achieve and grow in their jobs</li>
<li>Increase individual contribution to team output through extreme team synergy</li>
<li>Know how teams get things done.</li>
<li>Ensure your teams are empowered.</li>
<li>Build an organization based on teamwork.</li>
</ul>
                                        </div>
				</div>
				<div class="row panel">
                                     
					<div class="col-xs-122">
                                          


                                            <strong>Course content</strong>
                                            <li>Productivity through teams</li>
<li>Team or gang?</li>
<li>Self concepts vs. Team concepts</li>
<li>Team development &amp; dynamics</li>
<li>Team goals &amp; standards</li>
<li>Dysfunctions of a team</li>
<li>Building &amp; sustaining trust</li>
<li>Dealing with conflict in teams</li>
<li>Achieving commitment</li>
<li>Embracing accountability</li>
<li>Focusing on results</li>
<li>Team activities</li>
                                            </ul>
                                            
                                            
                                            <strong>Leave us a reply or sign up</strong>
                                                                 <?php $arr = array('name'=>'sideform','id'=>'sideform');?>
                            <?php echo form_open('register/messages',$arr);?>
        
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
					
          <div class="submit"> <?php $atrr = array('value'=>'Submit','id'=>'submit','class'=>'submit-me');?>
                    <!-- For success/fail messages -->
                    <?php echo form_submit($atrr);?></div>
       <?php echo form_close();?>

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

