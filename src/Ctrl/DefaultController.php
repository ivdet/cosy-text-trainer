<?php
/**
 * Default controller
*/
namespace CosyTextTrainer\Ctrl;

use Lazer\Classes\Database as Lazer;

class DefaultController {
	/**
	 * Index action 
	*/	
	public function indexAction(){
	    
		$dataset = array(
			"tabs" => Lazer::table('language')->findAll()
			);
		if(isset($_GET['article']))
		{
		    if($article = Lazer::table('article')->find(intval($_GET['article'])))
		    {
		        $dataset['text'] = $article->content;
		    }
		    
		}
		return $dataset;
	}
	
	/**
	 * Add a word 
	*/	
	public function addWordAction($articleId, $content){
	
	    $row = Lazer::table('word');
        $row->article_id = $articleId;
        $row->content = $content;
        $row->save();
	}



    /**
     * Add an article
     */
     public function addArticleAction($content, $languageId)
     {
         $row = Lazer::table('article');
         $row->language_id = $languageId;
         $row->content = $content;
         $row->save();
     }
}
