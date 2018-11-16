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
					<div class="col-xs-12" title ="Sales, selling skills training, sales training in kenya, Guerilla selling">
						<h2>Sales Process & Selling Skills</h2>
                                                <strong>Scope:</strong>
                                                <p>Sales Process and Selling Skills is intended to enable you to understand <i>"It is your ability to sell an idea that changes lives and history forever"</i></p>
												<p>Selling a product or a service is not an activity but it is a process.
By the time a sale is made several activities will have taken place and getting a sale is larger dependent on how well you identify and perform these activities. It captures the various steps a salesperson needs to take into account in the sales process for a sale to happen.
</p>
</div><img src="<?php echo base_url();?>application/views/img/orvel-training.jpg" alt="Selling skills and customer service excellence Training In kenya" >   <div id="sidebarsd" title="Cross-Selling courses" >
                                               <strong>Course Objectives</strong><br/>
                                            At the end of Cross-Selling course participants will be able to;
                                           	
                                            <ul>
                                                <li>systematically identify and, define the steps and activities of acquiring new customers</li>
                                                <li> Identify sources of potential customers (prospects) for your products and services</li>
                                              


</ul>   
                                        </div>
				</div>
				<div class="row panel">
                                     
					<div class="col-xs-122">
                                          
   

                                            <strong>Course content</strong>

    
                                            <ul> <li><a title="International sales training provides selling skills training" href="#">Prospecting</a></br>
											<p>Prospecting is any activity you engage in to position yourself in front of a customer-to-be with the intention to make inquiries, assess and educate so as determine if there's a good fit between your prospect’s needs and your products/service.

</p>
											</li>
                                            <li title="we are the leading, sales training institute in kenya">  Developing prospects<br>
											<p> "Behind every sale is a person."It is vitally important to make an appointment with a prospect to discuss his/her product/service portfolio at a mutually suitable time. This is the approach. Always remember that you are selling yourself at this stage.</p>
											</li>
                                            <li>Profiling the ‘Ideal Prospect” (CNA)</li>
                                            <li> Presenting a Solution</li>
                                            <li> Handling Objections</li>

                                            <li>Closing the Sale</li>
                                            
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
              <li><a href="#" title="Esther Maina is the leading sales trainer in kenya"><img src="<?php echo base_url();?>application/views/img/icons/facebook.png" /></a></li>
              <li><a href="#" title="Esther Maina is the founder of Guerilla Selling Training in Kenya"><img src="<?php echo base_url();?>application/views/img/icons/twitter.png" /></a></li>
              <li><a href="#" title="International Sales Training Institute Is the Best Sales Training Institute, in sales training in Kenya"><img src="<?php echo base_url();?>application/views/img/icons/linkedin.png" /></a></li>
              <li><a href=""title="for the best sales training in Kenya"><img src="<?php echo base_url();?>application/views/img/icons/youtube.png" /></a></li>
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

