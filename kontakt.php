<?php include_once 'konfiguracija.php';?>
<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	

	<title>Jelovnik restorana</title>
<?php include_once 'head.php';?>	
	
</head>

<body style="background-image:url(restoran.jpg)">
<div class="row">
    <div class="twelve columns">     
<?php include_once 'izbornik.php';?>
<?php include_once 'naslov.php';?>
</div>
  </div> 
 
<div class="row">
<div class="twelve columns">
<li class="info alert">

<div class="row">
  <div class="eight columns">
    <p><span style="font-size:21px; font-weight:bold; text-decoration:underline;">Kontakt:</span><br/>
    Radno vrijeme: 0-24 h<br/>
    Adresa: Josipa Jurja Strossmayera 25<br/>
    Poštanski broj i mjesto: 31000 Osijek<br/>
    Država: Hrvatska<br/>
    Telefon: 031/369-854<br/>
    E-mail: elegant@gmail.com	<br/>
    Web: http://oziz.ffos.hr/OMS20132014/0122213613/PBII/projekt/index.php</p>
  </div>
  <div class="four columns">
    <p>Kontaktirajte nas:<br/></p><ul>
  <li class="field">
    <input class="input" type="text" placeholder="Ime" />
  </li>
  <li class="field">
    <input class="input" type="text" placeholder="Prezime" />
  </li>
  <li class="field">
    <input class="input" type="email" placeholder="Email" />
  </li>
  <li class="field">
    <input class="input" type="password" placeholder="Password" />
  </li>
  <li class="field">
    <textarea class="input textarea" placeholder="Poruka"></textarea>
  </li>
  
  
  </ul>
  <div class="pretty medium info btn" >

    <a href="#">Pošalji</a>

</div>
  </div>
</div>


  
  
  
  </li>
</div>
</div>
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
	
	<script gumby-touch="js/libs" src="js/libs/gumby.js"></script>
	<script src="js/libs/ui/gumby.retina.js"></script>
	<script src="js/libs/ui/gumby.fixed.js"></script>
	<script src="js/libs/ui/gumby.skiplink.js"></script>
	<script src="js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="js/libs/ui/gumby.checkbox.js"></script>
	<script src="js/libs/ui/gumby.radiobtn.js"></script>
	<script src="js/libs/ui/gumby.tabs.js"></script>
	<script src="js/libs/ui/gumby.navbar.js"></script>
	<script src="js/libs/ui/jquery.validation.js"></script>
	<script src="js/libs/gumby.init.js"></script>

	<?php include_once 'autorizacijaForma.php';?>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	
  </body>
</html>
