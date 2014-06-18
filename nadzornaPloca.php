<?php 
include_once 'konfiguracija.php';
if(!isset($_SESSION["operater"])){
	header("Location: " . $putanja .  "index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	

	<title>Jelovnik restorana</title>
<?php include_once 'head.php';?>	

<style>
@import url(http://fonts.googleapis.com/css?family=Varela+Round);

html, body { background: #333 url("http://codepen.io/images/classy_fabric.png"); }

.slides {
    padding: 0;
    width: 550px;
    height: 400px;
    display: block;
    margin: 0 auto;
    position: relative;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

.slides input { display: none; }

.slide-container { display: block; }

.slide {
    top: 0;
    opacity: 0;
    width: 550px;
    height: 400px;
    display: block;
    position: absolute;

    transform: scale(0);

    transition: all .7s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
}

.nav label {
    width: 200px;
    height: 100%;
    display: none;
    position: absolute;

	  opacity: 0;
    z-index: 9;
    cursor: pointer;

    transition: opacity .2s;

    color: #FFF;
    font-size: 156pt;
    text-align: center;
    line-height: 380px;
    font-family: "Varela Round", sans-serif;
    background-color: rgba(255, 255, 255, .3);
    text-shadow: 0px 0px 15px rgb(119, 119, 119);
}

.slide:hover + .nav label { opacity: 0.5; }

.nav label:hover { opacity: 1; }

.nav .next { right: 0; }

input:checked + .slide-container  .slide {
    opacity: 1;

    transform: scale(1);

    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .nav label { display: block; }

.nav-dots {
	width: 100%;
	bottom: 9px;
	height: 11px;
	display: block;
	position: absolute;
	text-align: center;
}

.nav-dots .nav-dot {
	top: -5px;
	width: 11px;
	height: 11px;
	margin: 0 4px;
	position: relative;
	border-radius: 100%;
	display: inline-block;
	background-color: rgba(0, 0, 0, 0.6);
}

.nav-dots .nav-dot:hover {
	cursor: pointer;
	background-color: rgba(0, 0, 0, 0.8);
}

input#img-1:checked ~ .nav-dots label#img-dot-1,
input#img-2:checked ~ .nav-dots label#img-dot-2,
input#img-3:checked ~ .nav-dots label#img-dot-3,
input#img-4:checked ~ .nav-dots label#img-dot-4,
input#img-5:checked ~ .nav-dots label#img-dot-5,
input#img-6:checked ~ .nav-dots label#img-dot-6 {
	background: rgba(0, 0, 0, 0.8);
}
</style>
</head>

<body style="background-image:url(restoran.jpg);background-attachment:fixed;
background-size:100%;">
<div class="row">
    <div class="twelve columns">     
<?php include_once 'izbornik.php';?>
<?php include_once 'naslov.php';?>
</div>
  </div>
<div class="row">
    <div class="twelve columns">
    <li class="info alert">

	<!-- image-slider -->

<ul class="slides"">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="img/slika1.jpg" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="img/slika2.JPG" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="img/slika3.JPG" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
    </li>
</ul>
  


	<!-- kraj image-slidera -->
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

	
	<script src="<?php echo $putanja;?>js/plugins.js"></script>
	<script src="<?php echo $putanja;?>js/main.js"></script>
	

	
  </body>
</html>