<?php 
$vPath = "";
include "$vPath"."header.php"; 

require_once( 'php/php-gettext/language.php' );
?>

<div id="login" class="text-center">
    
    <img src="images/camaleon-logo-white.png">
	
	<div class="well">
	
	<?php
	$language = "en_GB";
	putenv("LC_ALL=$language");
	setlocale(LC_ALL, $language);
	bindtextdomain("messages-es_ES", "./locale");
	textdomain("messages-es_ES 	");

	print "<p>" . _("Hello World") . "</p>\n";
	?>
      
           <form id="form-login" method="POST" action="callCenter/callCenter.php">
             <label><?php _e("Email");?>:</label>
             <input class="form-control" type="text" name="mail">
             <label><?php _e("Password");?>:</label>
             <input class="form-control" type="password" name="password"><p></p>
             <button type="submit" class="btn btn-default pull-right"><i class="fa fa-power-off"></i> Iniciar sesión</button>        
           </form>
         	</div>
	
</div>

<?php include "$vPath"."footer.php"; ?>