<div class="row">
	<div class="ten columns">
		<div class="row navbar pretty" id="nav1">
		<!-- Toggle for mobile navigation, targeting the <ul> -->
			<a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
			<ul>
				<li><a href="<?php echo $putanja;?>index.php">Početna</a></li>
				<li><a href="<?php echo $putanja;?>onama.php">O nama</a></li>
				<li><a href="<?php echo $putanja;?>kontakt.php">Kontakt</a></li>
    
				<li class="divider"></li>
				<?php if(isset($_SESSION["operater"])){?>
   
      
				<li><a href="<?php echo $putanja;?>nadzornaPloca.php">Nadzorna ploča</a></li>
    
				<li><a href="<?php echo $putanja;?>jelo/index.php">Jelo</a></li>
				<li><a href="<?php echo $putanja;?>narudzba/index.php">Narudžba</a></li>
				<li><a href="<?php echo $putanja;?>gost/index.php">Gost</a></li>
				<li><a href="<?php echo $putanja;?>detaljiBaze.php">Detalji baze</a></li>
    
				<?php }?>
    
			</ul>
		</div>
	</div>
	<div class="two columns">
		<p class="pretty medium info btn">
    <?php if(!isset($_SESSION["operater"])){?>
    <a data-reveal-id="autorizacijaForma" href="#" class="switch" gumby-trigger="#modal1">Prijava</a>
    <?php }else{
    		
    			
    			?>
    		<a href="<?php echo $putanja;?>odjava.php" >Odjava <?php echo $o->ime . " " . $o->prezime;?></a>
    		<?php }?>
    </p>
	</div>
</div>