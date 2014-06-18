<?php
include_once '../konfiguracija.php';

//ovdje definiramo vezu na bazu pomoći PHP Data Object  (http://www.php.net/manual/en/book.pdo.php)
$pdo=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
$pdo->exec("set names utf8;");
//ako je korisnik pritisnuo promjeni tada je poslana forma koja je method="POST" pa će $_POST niz biti postavljen, inače neće
if($_POST){
// prvo pripremimo upit, umjesto konkretnih vrijednosti postavljamo :ključ koji mora odgovarati ključu u $_POST
$izraz = $pdo->prepare("update jelo set naziv=:naziv, cijena=:cijena, opis=:opis where sifra=:sifra");
//na pripremljeni upit postavljamo vrijednosti iz $_POST niza i izvodimo upit
$izraz->execute($_POST);
//Izvedeni upit je odradio update i možemo se vratiti na pregled svih autora
header("location: index.php");
}

//ako nije postavljen $_POST onda smo došli s GET pa izvlačimo sve podatke iz tablice za autora s dobivenom šifrom
$izraz = $pdo->prepare("select * from jelo where sifra=:sifra");
//na pripremljeni upit postavljamo vrijednosti iz $_GET niza i izvodimo upit
$izraz->execute($_GET);
// Znako kako će upit rezultirati jednim redom iz tablice (u uvjetu je primarni ključ) varijabli $jelo dodjeljujemo izvučeni objekt
$jelo = $izraz->fetch(PDO::FETCH_OBJ);

// pogledati OBJAŠNJENJE ZAŠTO I KAKO $jelo


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
			echo $jelo->sifra; ?>" />
			</div>
			</div>
			
			<div class="row">
    		<div class="two columns">
			<label class="inline" for="naziv">Naziv</label>
			</div>
			<div class="ten columns">
			<input class="wide text input" name="naziv" id="naziv" type="text" value="<?php
			//ispisujem ime autora
			echo $jelo->naziv; ?>" />
			</div>
			</div>
			
			<div class="row">
    		<div class="two columns">
			<label class="inline" for="cijena">Cijena</label>
			</div>
			<div class="ten columns">
			<input class="wide text input" name="cijena" id="cijena" type="text" value="<?php
			//ispisujem ime autora
			echo $jelo->cijena; ?>" />
			</div>
			</div>
			
			
			<div class="row">
    		<div class="two columns">
			<label class="inline" for="opis">Opis</label>
			</div>
			<div class="ten columns">
			<input class="wide text input" name="opis" id="opis" type="text" value="<?php
			//ispisujem ime autora
			echo $jelo->opis; ?>" />
			</div>
			</div>
			<input type="hidden" name="sifra" value="<?php 
			// ispisujem šifru
			//šifru moram proslijediti preko skrivenog unosnog polja (hidden) jer nakon submit-a više nemam šifru u $_GET nizu već će se pojaviti
			// zajedno s svim ostalim podacima u $_POST nizu
			echo $jelo->sifra; ?>" />
			<input type="pretty medium info btn" class="button" value="Promjeni" />
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

