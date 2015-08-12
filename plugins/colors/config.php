
<?php if (!defined('PLX_ROOT')) exit; 

if(!empty($_POST)) {
	$plxPlugin->setParam('facebook', $_POST['facebook'], 'cdata');
	$plxPlugin->setParam('twitter', $_POST['twitter'], 'cdata');
	$plxPlugin->setParam('google', $_POST['google'], 'cdata');
	$plxPlugin->setParam('logo', $_POST['logo'], 'cdata');
	$plxPlugin->setParam('about', $_POST['about'], 'cdata');
	$plxPlugin->saveParams();
	header('Location: parametres_plugin.php?p=colors');
	exit;
}

?>

<h2><?php echo $plxPlugin->getInfo("description") ?></h2>

<style>
	input, textarea {border-radius: 5px;width: 70%}
	textarea {min-height: 70px}
	label{font-style: italic}
</style>



<form action="parametres_plugin.php?p=colors" method="post">

	<!-- navigation sur la page configuration du plugin -->
<nav id="tabby-1" class="tabby-tabs" data-for="example-tab-content">
	<ul>
		<li><a data-target="tab1" class="active" href="#">Info</a></li>
		<li><a data-target="tab2" href="#">Réseaux sociaux</a></li>
		<li><a data-target="tab3" href="#">Modifier le logo</a></li>
		<li><a data-target="tab4" href="#">Ajouter A Propos</a></li>
	</ul>
</nav>

<!-- contenu de la page configuration -->
<div class="tabby-content" id="example-tab-content">

<div data-tab="tab1">
	<h3>Configurer votre template</h3>

	<p>
		Ajoutez les liens vers vos réseaux sociaux, placez votre logo dans le header du site et ajoutez le contenu dans le footer.
	</p>

	<p>
		Le template utilise la technologie SASS, n'hésitez pas à me contacter pour plus d'info.
	</p>
	<p>
		<a href="http://libertea.fr">www.libertea.fr</a>
	</p>
</div>	




<!-- page pour afficher les témoignages -->
<div data-tab="tab2">

	<p>
		<label for="facebook">Votre page facebook (ex: http://facebook.fr)</label>
		<input id="facebook" name="facebook"  maxlength="255" value="<?php echo $plxPlugin->getParam("facebook"); ?>">
	</p>	

	<p>
		<label for="twitter">Votre page twitter (ex: http://twitter.fr)</label>
		<input id="twitter" name="twitter"  maxlength="255" value="<?php echo $plxPlugin->getParam("twitter"); ?>">
	</p>

	<p>
		<label for="google">Votre page google plus (ex: http://google.fr)</label>
		<input id="google" name="google"  maxlength="255" value="<?php echo $plxPlugin->getParam("google"); ?>">
	</p>

</div>


<div data-tab="tab3">

	<p>
		<label for="logo">Le lien de votre logo (ex: http://votresite.fr/data/medias/logo.png)</label>

		<input id="logo" name="logo"  maxlength="255" value="<?php echo $plxPlugin->getParam("logo"); ?>">
	</p>

	<?php 

		$logo = $plxPlugin->getParam("logo");

			if (empty($logo)) {?>

			<img src="<?php echo PLX_PLUGINS ?>colors/app/AucuneImage.jpg" alt="logo">

				<?php
			}else{?>

			<img src="<?php echo $logo; ?>" alt="logo">

		<?php
			 
		}
	?>

</div>

<div data-tab="tab4">

	<p>
		<label for="about">Votre texte dans la partie About</label>
		<textarea id="about" rows="10"   name="about"><? echo $plxPlugin->getParam('about'); ?></textarea>

	</p>


</div>

</div>

	<p class="in-action-bar">
		<?php echo plxToken::getTokenPostMethod() ?>
		<input type="submit" name="submit" value="Valider" />
	</p>


</form>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo PLX_PLUGINS ?>colors/app/jquery.tabby.js"></script>
<script>
    $(document).ready(function(){
        $('#tabby-1').tabby();
    });
</script>		