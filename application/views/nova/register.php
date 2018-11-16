<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Register for a course |ISTI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <link rel='stylesheet' id='genericons-css'  href='<?php echo base_url();?>application/views/genericons/genericons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='twentyfourteen-style-css'  href='<?php echo base_url();?>application/views/genericons/style.css' type='text/css' media='all' />

    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/nova/css/sl-slide.css">

    <script src="<?php echo base_url();?>application/views/nova/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>application/views/nova/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>application/views/nova/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>application/views/nova/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>application/views/nova/images/ico/apple-touch-icon-57-precomposed.png">
</head><body>
<div class="container">
<div class="contain-to-grid header">
      <div class="row-fluid">
        
        <div class="large-12 columns">
         <img src="<?php echo base_url();?>application/views/img/logo.png">
          
          
             <div class="top-contact right"> <img src="<?php echo base_url();?>application/views/nova/images/ico/icon-contact.png">: <span>+254-786 305 030,
                    +254-731 305 030</span>
</div>             
          
        </div>
        
       
        
          <?php $this->load->view('frontend/menu');?>
          
          
          
        </div> 
        
</div></div>


    <!--Header-->
    <section class="title">
        
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Register</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><?php echo anchor('welcome','Home');?> <span class="divider">/</span></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /header -->

   
        
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2903.193957569249!2d36.78844539337609!3d-1.2597862306456749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1439371543593" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                <h4>Register Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

              
         <?php $arr = array('name'=>'sideform','id'=>'sideform');?>
                            <?php echo form_open('register/messages',$arr);?>
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="First Name" name="name" id="name" />
            </div>

            <div class="large-6 columns">
              <input type="text" placeholder="Surname" name="surname" id="surname" />
            </div>
          </div>
          
          <div class="row">
           
            
            <div class="large-6 columns">
              <input type="text" placeholder="Company Name" name="company" id="company" />
            </div>
          </div>
          
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="Email Address" name="email" id="email" />
            </div>

           
               <div class="large-6 columns">
              <input type="text" placeholder="Course Interested in" name="subjectline"  />
            </div>
          </div>
          
          <div class="row">
            <div class="large-6 columns">
              <input type="text" placeholder="Cell Phone Number" name="cell" id="cell" />
            </div>
          </div>
					
          <div class="submit">
              <?php $atrr = array('value'=>'Submit','id'=>'submit','class'=>'submit-me');?>
                    <!-- For success/fail messages -->
                    <?php echo form_submit($atrr);?>
              </div>
        <?php echo form_close();?>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>Feel free to get in touch with us.</p>
            <p>
                <i class="icon-map-marker pull-left"></i> AACC Complex, 4th Floor,<br>
                Waiyaki way, Westlands,
                 <i class="fa fa-fw fa-envelope"></i>P.O Box 4921-00100,<br/>
                       <i class="fa fa-fw fa-flag"></i>Nairobi.<br/>
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;info@istiglobal.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+254 786 305 030, 020 2484709
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp; www.istiglobal.coom
            </p>
        </div>

    </div>

</section>

<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong>P.O Box 4921-00100, AACC Complex, 4th Floor,
                        <br>Waiyaki way, Westlands,Nairobi.
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong>info@istiglobal.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.istiglobal.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Phone:</strong> LandLine:020 2484709
office: +254 786 305 030
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->





 
            <!--Important Links-->
            
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                
            </div>
            <!--End Archives-->

           
    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy;<?php echo date("Y");?> <a target="_blank" href="http://difbac.com/" title="">Difbac Limited</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="<?php echo base_url();?>application/views/nova/js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>application/views/nova/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>application/views/nova/js/main.js"></script>

</body>
</html>
