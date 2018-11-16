<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Dashboard | ISTI Global</title>
<link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css"/>
  
  <link href="<?php echo base_url(); ?>assets/css/datepickr.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url();?>application/views/admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/custom/general.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/custom/dashboard.js"></script>
<script type='text/javascript' src='<?php echo base_url();?>application/views/admin/js/plugins/fullcalendar.min.js'></script>

<script type="text/javascript" src="<?php echo base_url();?>application/views/admin/js/custom/calendar.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">

<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">ISTI<span>GLOBAL</span></h1>
            <span class="slogan">admin Panel</span>
            
            <div class="search">
            	<form action="#" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<div class="notification">
                <a class="count" href="ajax/notifications.html"><span>9</span></a>
        	</div>
            <div class="userinfo">
            	<img src="<?php echo base_url();?>application/views/admin/images/thumbs/avatar.png" alt="" />
                <?php echo $this->session->userdata('username')?> 
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href="#"><img src="<?php echo base_url();?>application/views/admin/images/thumbs/avatarbig.png" alt="" /></a>
                    
                </div><!--avatar-->
                <div class="userdata">
                    <ul>
                  <?php foreach ($userdata as $key) {
     
 
                	echo $key['last_name'];
                        echo '<span class="email">'. $key['email_address'].'</span>';
                 } ;?>
                    
                    	<li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><?php echo anchor('admin/logout','Sign out');?></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
            <li class="current"><?php echo anchor('admin/dashboard','<span class="icon icon-flatscreen"></span>Dashboard');?>
            </li>
            <li><?php echo anchor('admin/manageblog','<span class="icon icon-pencil"></span>Manage Blog');?></li>
            <li><?php echo anchor('admin/messages','<span class="icon icon-message"></span>Messages');?></li>
            <li><?php echo anchor('admin/reports','<span class="icon icon-chart"></span>Reports');?></li>
        </ul>
        
        <!--headerwidget-->
        
        
    </div><!--header-->
    <?php $this->load->view('includes/left_menu');?>
   <!--leftmenu-->