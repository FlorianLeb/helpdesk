<?php
/**
 * Gestion des articles de la Faq
 * @author jcheron
 * @version 1.1
 * @package helpdesk.controllers
 */
class Faqs extends \_DefaultController {
	public function Faqs(){
		parent::__construct();
		$this->title="Foire aux questions";
		$this->model="Faq";
	}

	protected function setValuesToObject(&$object)
	{
		parent::setValuesToObject($object);
		$object->setUser(Auth::getUser());
		$categorie = DAO::getOne("Categorie", $_POST["idCategorie"]);
		$object->setCategorie($categorie);
	}

	public function frm($id=null){
		if(Auth::isAdmin()){
			$faq = $this->getInstance($id);
			$this->loadView("faq/vAdd", array("faq" => $faq));
			echo JsUtils::execute("CKEDITOR.replace( 'contenu');");
		}else{
			$this->messageDanger("Vous devez être connecté");
		}
	}

}

