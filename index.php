<?php 
if(isset($_SESSION['HTTP_REFERER'])){   
    header("location:index.html");   
    exit; 
  }   
switch ($_SERVER["HTTP_HOST"]) 
{ 
case "osgee.com": 
    header("location:index.html"); 
    break; 
case "www.osgee.com": 
    header("location:index.html"); 
    break; 
case 'me.osgee.com':
	header("location:osgee/index.html"); 
	break;
case "kangyuewuliu.com": 
    header("location:index.html"); 
    break; 
}
?>