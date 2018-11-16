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
        
      </div>
  <section class="container">  
 <div class="row">
     
      
     
<aside class="col-md-4 sidebar sidebar-right">

				<div class="row panel">
                                    <h2>Satisfied Clients</h2><hr>
					Here are some of our satisfied clients:
                                        <ul>
                                            
                                            
                                        
                                            <li>AD-CARE LIMITED</li>
                                            <li>AMIRAN COMMUNICATION</li>
                                            <li>ANTARC LIMITED</li>
                                            <li>BCD TRAVEL</li>
                                            <li>BRAND ASSOCIATES</li>
                                            <li>BRAND TRACK LTD</li>
                                            <li>BROADBAND COMMUNICATION</li>
                                            <li>BRITISH AMERICAN INSURANCE</li>
                                            <li>CFC STANBIC BANK</li>
                                            <li>COPY CAT LTD</li>
                                            <li>CREATIVE EDGE LIMITED</li>
                                            <li>CROWN BERGER</li>
                                            <li>DEAN MARTINS CORPORATE COMMUNICATION</li>
                                            <li>EXCLUSIVE ECOTRAVEL</li>
                                            <li>FARMTRAC KENYA</li>
                                            <li>FAULU KENYA</li>
                                            <li>FRIGOREX E A</li>
                                            <li>GEDA LIMITED</li>
                                            <li>GULF ENERGY</li>
                                            <li>HILTON HOTEL</li>
                                            <li>IN FOTRACK RESEARCH & CONSULTING</li>
                                            <li>INTERCONSUMER PRODUCTS</li>
                                            <li>JAMII BORA BANK</li>
                                            <li>KENYA BROADCASTING CORPORATION</li>
                                            <li>KENYA COMMERCIAL BANK</li>
                                            <li>KENAFRIC INDUSTRIES</li>
                                            <li>KENYA AIRWAYS</li>
                                            <li>KENYA MEAT COMMISSION</li>
                                            <li>KRISHNA </li>
                                            <li>LAB& ALLIED LTD</li>
                                            <li>MOVIT PRODUCTS UGANDA LTD</li>
                                            <li>MARKETING AFRICA</li>
                                            <li>MULTICHOICE KENYA</li>
    
                                            <li>M M MOBILE LIMITED</li>
                                            <li>NAIROBI BOTTLERS</li>
                                            <li>NATION MEDIA GROUP</li>
                                            <li>OASIS LIMITED</li>
                                            <li>PKF KENYA</li>
                                            <li>RADIO AFRICA</li>
                                            <li>SAFARICOM LTD</li>
                                            <li>SAMEER AFRICA</li>
                                            <li>SHARED INTEREST</li>
                                            <li>SIMBA TECHNOLOGY</li>
                                            <li>STANBIC BANK</li>
                                            <li>TENALEC TANZANIA</li>
                                            <li>THE STAR</li>
                                            <li>THE WELMAN GROUP</li>
                                            <li>TRAINING SOLUTIONS LTD</li>
                                            <li>TROJAN INTERNATIONAL</li>
                                            <li>VISCAR INDSTRIAL CAPACITY LIMITED</li>
                                        </ul>
</div>
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