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
  
<div class="row">
	<div class="large-12 columns">
	<li class="info alert">
		<h3>Detalji baze</h3>
		<?php 
		include_once 'konfiguracija.php';
		$veza=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
		$veza->exec("set names utf8;");
		
		$izraz = $veza->prepare("show tables;");
		$izraz->execute();
		$skup=$izraz->fetchALL(PDO::FETCH_BOTH);
		
		foreach($skup as $s){
			echo "<h2>" . $s[0] . "</h2>";
			$izraz = $veza->prepare("describe " . $s[0]);
			$izraz->execute();
			$skup1=$izraz->fetchALL(PDO::FETCH_BOTH);
			//print_r($skup1);
			echo("Field Type Null Key Default Extra<br />");
			foreach($skup1 as $s1){
				echo $s1[0] . " " .$s1[1] . " " .$s1[2] . " " .$s1[3] . " " .$s1[4] . " " .$s1[5] . "<br />";
		
			}
		}
		echo "<hr />";
		$izraz = $veza->prepare("select concat(table_name, '.', column_name) as 'Vanjski kljuc', concat(referenced_table_name, '.', referenced_column_name) as 'primarnji kljuc' from     information_schema.key_column_usage where referenced_table_name is not null and table_schema = '" . $baza . "';");
		$izraz->execute();
		$skup=$izraz->fetchALL(PDO::FETCH_BOTH);
		//print_r($skup);
		echo "Vanjski ključ : Primarni ključ<br />";
		foreach($skup as $s){
			echo $s[0] . " : " . $s[1] . "<br />";
		}
		
		echo "<hr />";
		$izraz = $veza->prepare("show tables;");
		$izraz->execute();
		$skup=$izraz->fetchALL(PDO::FETCH_BOTH);
		$brojAtributa=0;
		$brojZapisa=0;
		$brojNull=0;
		foreach($skup as $s){
			$izraz = $veza->prepare("describe " . $s[0]);
			$izraz->execute();
			$skup1=$izraz->fetchALL(PDO::FETCH_BOTH);
			foreach($skup1 as $s1){
				$izraz = $veza->prepare("select count(*) as ukupno from " . $s[0] . " where " . $s1[0] . " is null");
				$izraz->execute();
				$skup2=$izraz->fetchALL(PDO::FETCH_BOTH);
				foreach($skup2 as $s2){
					$brojNull=$brojNull + $s2[0];
				}
				
			$brojAtributa++;
			}
			
			$izraz = $veza->prepare("select count(*) as ukupno from " . $s[0]);
			$izraz->execute();
			$skup1=$izraz->fetchALL(PDO::FETCH_BOTH);
			foreach($skup1 as $s1){
				$brojZapisa=$brojZapisa+$s1[0];
			}
		}
		
		echo "Tablice ukupno imaju minimalno 20 atributa. (max 3 boda). Ja imam " . $brojAtributa . "<hr />";
		echo "U tablicama ukupno ima minimalno 50 zapisa. (max 3 boda). Ja imam " . $brojZapisa . "<hr />";
		echo "U zapisima je dozvoljeno ne poznavanje vrijednosti ili prazne vrijednosti (\"\") na 100 atributa. (max 2 boda). Ja imam " . $brojNull . "<hr />";
		
		?>
		
		

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

