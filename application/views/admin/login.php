<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>CodeIgniter Admin Sample Project</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>application/views/admin/css/style.default.css" rel="stylesheet" type="text/css">
  </head>
  <body class="loginpage">
      <div class="loginbox">
    	<div class="loginboxinner">
    <div class="logo">
            	<h1><span>ISTI</span>GLOBAL</h1>
                <p>admin Panel</p>
            </div>
             <br clear="all" /><br />
             <div class="nousername">
				<div class="loginmsg">The password you entered is incorrect.</div>
            </div><!--nousername-->
            
            <div class="nopassword">
				<div class="loginmsg">The password you entered is incorrect.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div>
      <?php 
      $attributes = array('id' => 'login');
      echo form_open('admin/login/validate_credentials', $attributes);
      echo '<h2 class="form-signin-heading">Login</h2>';
     echo '<div class="username">';
                	 echo '<div class="usernameinner">';
                    	
                   
      echo form_input('user_name', '', 'placeholder="Username"');
      echo  '</div>';
        echo       ' </div>';
        echo '<div class="password">';
          echo      	'<div class="passwordinner">';
      echo form_password('password', '', 'placeholder="Password"');
      echo   '</div>
                </div>';
      if(isset($message_error) && $message_error){
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
          echo '</div>';             
      }
      echo "<br />";
      
      echo anchor('admin/signup', 'Signup');
      echo "<br />";
      echo "<br />";
      echo form_label('Keep me logged in');
      echo form_checkbox('','',array('class'=>'keep'));
       echo "<br />";
      echo form_submit('submit', 'Login', 'class="btn btn-large btn-primary"');
      echo form_close();
      ?>      
    </div>
      </div><!--container-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>    
    