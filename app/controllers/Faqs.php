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
			$categories = DAO::getAll("Categorie");
			$cat = -1;
			if ($faq->getCategorie() != null) {
				$cat = $faq->getCategorie()->getId();
			}
			$list = Gui::select($categories, $cat, "Sélectionnez catégorie ...");
			$this->loadView("faq/vAdd", array("faq" => $faq, "listCat" => $list));
			echo JsUtils::execute("CKEDITOR.replace( 'contenu');");
		}else{
			$this->nonValid();
		}
	}

	public function isValid() {
		return Auth::isAuth();
	}

	public function onInvalidControl () {
		$this->loadView("main/vHeader", array("infoUser"=>Auth::getInfoUser()));
		$this->nonValid();
		$this->loadView("main/vFooter");
		exit;
	}
}

