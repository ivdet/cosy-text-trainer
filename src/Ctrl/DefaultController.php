<?php
/**
 * Default controller
*/
namespace CosyTextTrainer\Ctrl;

class DefaultController {
	/**
	 * Index action 
	*/	
	public function indexAction(){
		$dataset = array(
			"tabs" => array(
            "PL"=> array("articles"=>array(array())), "DE"=>array("articles"=>array(array()))
            
            )
		);
		return $dataset;
	}

}
