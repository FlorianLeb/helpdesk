<form method="post" action="tickets/update">
<fieldset>
<legend>Ajouter/modifier un statut</legend>
<div class="alert alert-info">Statut : <?php echo $ticket->toString()?></div>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $ticket->getId()?>">
	<input type="text" name="titre" value="<?php echo $ticket->getTitre()?>" placeholder="Entrez un titre" class="form-control">
	<input type="text" name="type" value="<?php echo $ticket->getType()?>" placeholder="Entrez un type" class="form-control">
	<input type="text" name="type" value="<?php echo $ticket->getDescription()?>" placeholder="Entrez une desc" class="form-control">
	<input type="hidden" name="id" value="<?php echo $ticket->getDateCreation()?>">
	<input type="text" name="type" value="<?php echo $ticket->getCategorie()?>" placeholder="Entrez une categorie" class="form-control">
	<input type="text" name="type" value="<?php echo $ticket->getUser()?>">
	<input type="text" name="type" value="<?php echo $ticket->getStatut()?>" placeholder="Entrez un statut" class="form-control">
	
	</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default">
	<a class="btn btn-default" href="<?php echo $config["siteUrl"]?>tickets">Annuler</a>
</div>
</fieldset>
</form>
