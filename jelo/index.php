<?php 
include_once '../konfiguracija.php';
if(!isset($_SESSION["operater"])){
	header("Location: " . $putanja .  "index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	

	<title><?php echo $naslov;?></title>
<?php include_once '../head.php';?>	
	
</head>

<body style="background-image:url(../restoran.jpg)">
<div class="row">
    <div class="twelve columns">     
<?php include_once '../izbornik.php';?>
<?php include_once '../naslov.php';?>
</div>
  </div>
 
 <!--  Ovo je specifiÄŤno za stranicu -->
<div class="row">
<div class="twelve columns">
<li class="info alert">



<div class="row">
Pretraživanje
</div>

				
<div class="row">
	<div class="four columns">
		<input class="wide text input" id="trazi" type="text" name="trazi" />
	</div>
	<div>
		<p class="pretty medium info btn">
			<a href="create.php">Kreiraj novi</a>
		</p>
	</div>
</div>
					
<div class="row">
<div class="twelve columns">
<table class="rounded" id="tablica" style="display:none;">
	<thead>
		<tr>
		<th>Šifra</th>
		<th>Naziv</th>
		<th>Cijena</th>
		<th>Opis</th>
		<th>Promijeni/obriši</th>							
		</tr>
	</thead>
	<tbody id="podaci"></tbody>
</table>
</div>
</div>
			

</li> 
</div>
</div>
<!--  Ovo je specifiÄŤno za stranicu -->
<?php include_once '../podnozje.php';?>
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

	
	<script src="<?php echo $putanja;?>js/plugins.js"></script>
	<script src="<?php echo $putanja;?>js/main.js"></script>
<script>
$(function(){

$(function () {
		$("#trazi").keyup(function(event){
		$('#tablica').fadeIn('medium', function() {
		});
		});
		});
		
	$("#trazi").keyup(function(event){
		if ( event.which == 13 ) {
		//alert("idem tražiti");

			$.ajax({
				type: "POST",
				url: "read.php",
				data: "naziv=" + $("#trazi").val(),
				success: function(vratioServer){
					var rezultati=$.parseJSON(vratioServer);
					$("#podaci").html("");
					$.each(rezultati,function(key,jelo){
						$("#podaci").append("<tr><td>" + jelo.sifra + "</td><td>" + jelo.naziv + "</td><td>" + jelo.cijena + "</td><td>" + jelo.opis + "</td>" + 
								"<td class=\"centar\"> <a title=\"Promijeni\" href=\"update.php?sifra=" + jelo.sifra + "\"><img alt=\"update\" src=\"<?php echo $putanja;?>update.png\" /></a>" + 
								" || <a title=\"Obriši\" href=\"delete.php?sifra=" + jelo.sifra + "\"><img alt=\"delete\" src=\"<?php echo $putanja;?>delete.png\" /></a></td></tr>");
						});

					}

				});

				return false;
			}
			});





          });
    </script>
	
  </body>
</html>

