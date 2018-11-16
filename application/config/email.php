<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config['protocol'] = 'TLS';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = 'nyakwengata@gmail.com';
$config['smtp_pass'] = 'joelisawesome';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline']    = "\r\n";
//$config['wordwrap'] = TRUE;
$config['validation'] = TRUE; // bool whether to validate email or not

  
/*$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;*/