<?php
/**
* The main core class
*/
namespace CosyTextTrainer;

use Lazer\Classes\Database as Lazer;

class CosyTextTrainer{
	/* 
	* Initialization function
	*/
	public static function db_init(){
	    
	    //db init
	    Lazer::create('language', array(
            'id' => 'integer',
            'name' => 'string'
        ));
	    Lazer::create('article', array(
            'id' => 'integer',
            'content' => 'string',
            'language_id' => 'integer'
        ));        
        
 	    Lazer::create('word', array(
            'id' => 'integer',
            'content' => 'string',
            'language_id' => 'integer'
        ));  
        
 	    Lazer::create('article_word', array(
            'article_id' => 'integer',
            'word_id' => 'integer'
        ));
        
        Lazer::create('translate', array(
            'id' => 'integer',
            'word_id' => 'integer',
            'dest_language_id' => 'integer',
            'content' => 'string'
        ));   
        
                
        
		return true;
	}
}
