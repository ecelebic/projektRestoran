
  <div class="row">
  
  <div class="eight columns">
    <p><?php include_once 'naslov.php';?></p>
    
  </div>
  
  
  <div class="four columns">
    <p class="pretty medium warning btn">
    <?php if(!isset($_SESSION["operater"])){?>
    <a data-reveal-id="autorizacijaForma" href="#" class="switch" gumby-trigger="#modal1">Prijava</a>
    <?php }else{
    		$o=$_SESSION["operater"];
    			
    			?>
    		<a href="<?php echo $putanja;?>odjava.php" >Odjava <?php echo $o->ime . " " . $o->prezime;?></a>
    		<?php }?>
    </p>
  </div>
  
  
</div>

