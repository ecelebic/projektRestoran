

<div class="modal" id="modal1">
<div class="content">
<a class="close switch" gumby-trigger="|#modal1"><i class="icon-cancel" /></i></a>
<div class="row">
<div class="ten columns centered text-center">
             
<form action="">
<fieldset>
  <legend class="ul">Pristupni podaci</legend>
  	<ul class="ul">
    	<li class="field">
      		<label class="inline" for="email">Email</label>
      		<input class="wide text input" name="email" id="email" type="text" value="ecelebic@ffos.hr"  />
    	</li>
    
    	<li class="field">
      		<label class="inline" for="lozinka">Lozinka</label>
      		<input class="wide password input" name="lozinka" id="lozinka" type="password" value="e" />
    	</li>
    
			<p class="pretty medium info btn">
 			   <a id="autoriziraj" href="#" class="switch" gumby-trigger="|#modal1">Prijavi se</a>
			</p>
  </ul>
</fieldset>
</form>
        
<p id="porukaGreske"></p>
        
        
        
        
</div>
</div>
</div>
</div>


<script>

$(function(){
	$("#autoriziraj").click(function(){
//alert("korisnik=" + $("#korisnik").val() + "&lozinka=" + $("#lozinka").val());
			$.ajax({
				type: "POST",
				url: "<?php echo $putanja;?>autorizacija.php",
				data: "email=" + $("#email").val() + "&lozinka=" + $("#lozinka").val(),
				success: function(poruka){
					if(poruka=="DA"){
						window.location="nadzornaPloca.php";
					}
					else{
						$("#porukaGreske").addClass("tiny alert button");
						$("#porukaGreske").css("width","100%");
						$("#porukaGreske").css("text-align","center");
						$("#porukaGreske").html("Neispravna kombinacija korisniÄŤkog imena i lozinke");
					}

					}

				});


			return false;
		});




	});


			</script>
