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
      <div class="row">
        <div class="large-12 columns">
     <?php
              foreach($articles as $row)
              {
                
                 echo'<hr>';
                echo '<h1>'.$row['title'].'</h1>'.'<br/>';
                 echo'<hr>';
                echo '<p>'.$row['content'].'</p>';
                echo'<hr>';
            }
            ?>
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