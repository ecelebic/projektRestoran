<?php 
include_once 'konfiguracija.php';
?>
<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	

	<title><?php echo $naslov;?></title>
<?php include_once 'head.php';?>	
	
</head>

<body style="background-image:url(restoran.jpg)">
<div class="row">
    <div class="twelve columns">     
<?php include_once 'izbornik.php';?>
<?php include_once 'naslov.php';?>
</div>
  </div>
 
 <!--  Ovo je specifiÄŤno za stranicu -->
 

<div class="row">
    <div class="twelve columns">
    <li class="info alert">

Dobrodošli!<br/>
<img src="P1060159.JPG" alt="slika" style="margin-top:15px;"/>
 </li>
</div>
  </div>
<!--  Ovo je specifiÄŤno za stranicu -->
<?php include_once 'podnozje.php';?>

	
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>
	
	<script gumby-touch="js/libs" src="<?php echo $putanja;?>js/libs/gumby.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.retina.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.fixed.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.skiplink.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.checkbox.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.radiobtn.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.tabs.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/gumby.navbar.js"></script>
	<script src="<?php echo $putanja;?>js/libs/ui/jquery.validation.js"></script>
	<script src="<?php echo $putanja;?>js/libs/gumby.init.js"></script>
<?php include_once 'autorizacijaForma.php';?>
	
	<script src="<?php echo $putanja;?>js/plugins.js"></script>
	<script src="<?php echo $putanja;?>js/main.js"></script>

	
  </body>
</html>
