<form method="post" action="faqs/update">
<fieldset>
<legend>Ajouter/modifier </legend>
<div class="alert alert-info">faq : <?php echo $faq->toString()?></div>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $faq->getId()?>">
	<input type="text" name="titre" value="<?php echo $faq->getTitre()?>" placeholder="Entrez un titre" class="form-control">
	<?php echo "<br> texte : <br />";?>
	<textarea name="texte" class="form-control"> <?php echo $faq->getContenu() ?> </textarea><br />
	<label for="datecreation">Date de création :</label><br />
	<input class="form-control" type="text" readonly value="<?php echo $faq->getDateCreation()?>">
	<br />
	<label for="datecreation">Version :</label><br />
	<input class="form-control" type="text" readonly value="<?php echo $faq->getVersion()?>">
	</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default">
	<a class="btn btn-default" href="<?php echo $config["siteUrl"]?>faq">Annuler</a>
</div>
</fieldset>
</form>
