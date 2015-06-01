<form method="post" action="tickets/update">
<fieldset>
<legend>Ajouter/modifier un ticket</legend>
<div class="alert alert-info">ticket : <?php echo $ticket->toString()?></div>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $ticket->getId()?>">
	<label for="titre">Titre :</label><br />
	<input type="text" name="titre" value="<?php echo $ticket->getTitre()?>" placeholder="Entrez un titre" class="form-control"><br />
	<label for="type">Type :</label><br />
	<select name="type" class="form-control">
	<option readonly value />
	<option value="1">Probleme technique</option>
	<option value="2">Question</option>
	<option value="3">Suggestion</option>
	</select>
	<br />
	<label for="texte">Texte :</label><br />
	<textarea name="contenu" class="form-control" placeholder="Entrez une description"></textarea>
	<label for="datecreation">Date de création :</label><br />
	<input class="form-control" type="text" readonly value="<?php echo (new DateTime())->format('d-m-Y H:i:s'); ?>"><br />
	<label for="cat">Categorie :</label><br />
	<select name="categorie" class="form-control"><option readonly value /><?php echo $listCat;?></select><br />
	<label for="user">Utilisateur :</label><br />
	<input class="form-control" type="text" readonly value="<?php echo Auth::getUser()?>"><br />
	<label for="stat">Statut :</label><br />
	<input name="type" readonly value="En attente" class="form-control"><br />
	
	</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default">
	<a class="btn btn-default" href="<?php echo $config["siteUrl"]?>tickets">Annuler</a>
</div>
</fieldset>
</form>
