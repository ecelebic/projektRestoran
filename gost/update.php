<?php
include_once '../konfiguracija.php';

//ovdje definiramo vezu na bazu pomoći PHP Data Object  (http://www.php.net/manual/en/book.pdo.php)
$pdo=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
$pdo->exec("set names utf8;");
//ako je korisnik pritisnuo promjeni tada je poslana forma koja je method="POST" pa će $_POST niz biti postavljen, inače neće
if($_POST){
// prvo pripremimo upit, umjesto konkretnih vrijednosti postavljamo :ključ koji mora odgovarati ključu u $_POST
$izraz = $pdo->prepare("update gost set ime=:ime, prezime=:prezime, kontakt=:kontakt, mjesto=:mjesto where sifra=:sifra");
//na pripremljeni upit postavljamo vrijednosti iz $_POST niza i izvodimo upit
$izraz->execute($_POST);
//Izvedeni upit je odradio update i možemo se vratiti na pregled svih autora
header("location: index.php");
}

//ako nije postavljen $_POST onda smo došli s GET pa izvlačimo sve podatke iz tablice za autora s dobivenom šifrom
$izraz = $pdo->prepare("select * from gost where sifra=:sifra");
//na pripremljeni upit postavljamo vrijednosti iz $_GET niza i izvodimo upit
$izraz->execute($_GET);
// Znako kako će upit rezultirati jednim redom iz tablice (u uvjetu je primarni ključ) varijabli $gost dodjeljujemo izvučeni objekt
$gost = $izraz->fetch(PDO::FETCH_OBJ);

// pogledati OBJAŠNJENJE ZAŠTO I KAKO $gost


?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
<title><?php echo $naslov;?></title>
<?php include_once '../head.php';?>
<link rel="stylesheet" href="../css/jquery-ui.css">
  </head>
  <body style="background-image:url(../restoran.jpg)">
  	<div class="row">
    <div class="twelve columns">     
<?php include_once '../izbornik.php';?>
<?php include_once '../naslov.php';?>
</div>
  </div>
	 <div class="row">
    <div class="twelve columns">
	 <li class="info alert">	
    <div class="row">
    <div class="twelve columns"> 
        <h4>Promjena podataka</h4>
      </div>
    </div>
    
    <div class="row">
    <div class="twelve columns"> 
      	
	        <form action="#" method="POST">
			<fieldset>
			<legend>Podaci</legend>
			
	<div class="row">
    <div class="two columns">
			<label class="inline" for="sifra">Šifra</label>
			
	</div>
    
    <div class="ten columns">
    
      <input class="wide text input" name="sifra" id="sifra" type="text" value="<?php
			//ispisujem ime autora
			echo $gost->sifra; ?>" />
			</div>
			</div>
			<div class="row">
    <div class="two columns">
			<label class="inline" for="ime">Ime</label>
			</div>
			<div class="ten columns">
			<input class="wide text input" name="ime" id="ime" type="text" value="<?php
			//ispisujem ime autora
			echo $gost->ime; ?>" />
			</div>
			</div>
			
			
			<div class="row">
    <div class="two columns">
			<label class="inline" for="prezime">Prezime</label>
			</div>
			<div class="ten columns">
			<input class="wide text input" name="prezime" id="prezime" type="text" value="<?php
			//ispisujem ime autora
			echo $gost->prezime; ?>" />
			</div>
			</div>
			
			<div class="row">
    <div class="two columns">
			<label class="inline" for="kontakt">Kontakt</label>
			</div>
			<div class="ten columns">
			
			<input class="wide text input" name="kontakt" id="kontakt" type="text" value="<?php
			//ispisujem ime autora
			echo $gost->kontakt; ?>" />
			</div>
			</div>
			
			<div class="row">
    <div class="two columns">
			
			<label class="inline" for="mjesto">Mjesto</label>
			</div>
			<div class="ten columns">
			
			
			<input class="wide text input" name="mjesto" id="mjesto" type="text" value="<?php
			//ispisujem ime autora
			echo $gost->mjesto; ?>" />
			</div>
			</div>
			<input type="hidden" name="sifra" value="<?php 
			// ispisujem šifru
			//šifru moram proslijediti preko skrivenog unosnog polja (hidden) jer nakon submit-a više nemam šifru u $_GET nizu već će se pojaviti
			// zajedno s svim ostalim podacima u $_POST nizu
			echo $gost->sifra; ?>" />
			<p class="pretty medium info btn"><input type="submit" class="button" value="Promjeni" /></p>
			</fieldset>
			</form>
			

      	
      </div>
    </div>
    
    </li>
      </div>
    </div>
    <?php include_once '../podnozje.php';?>

    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    
     <script src="../js/jquery-ui.js"></script>
   <script>
     
    </script>
  </body>
</html>

