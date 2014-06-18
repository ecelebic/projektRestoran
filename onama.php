<?php include_once 'konfiguracija.php';
?>
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
<div class="six columns">
Dobrodošli u restoran Elegant koji se nalazi na predivnoj lokaciji. 
Svojim novouređenim toplim I ugodnim ambijentom omogućuje Vam da uživate u obiteljskom ili poslovnom ručku.
Uz vrlo ugodan interijer restoran Elegant nudi Vam I posebno uređen eksterijer koji ima vrlo privlačan ambijent s izuzetno neobičnim pogledom.
Zanima Vas? Dođite I vidite.
Sve goste očekuje bogata gastronomska ponuda uz vrlo ugodnu glazbu te ljubazno osoblje.
Jela koja Vam restoran nudi rađena su po originalnim receptima. 
Naš restoran također Vam nudi prostoriju za organizaciju rođendanskih proslava, seminara, krštenja, prvih pričesti I krizme.
Uvjereni smo da ćete iz našega restorana izaći vrlo zadovoljni I da ćete ga pamtiti po vrhunskom gastronomskom užitku te da ćete poželjeti doći ponovno.
<br/>Ugodan boravak želi Vam restoran Elegant!

</div>
<div class="six columns">
<img src="P1060172.JPG" alt="slika" style="margin-top:15px;"/>
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
