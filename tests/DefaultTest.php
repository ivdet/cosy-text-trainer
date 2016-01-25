<?php
use Lazer\Classes\Database as Lazer;
use \CosyTextTrainer\Ctrl\DefaultController;
use \Lazer\Classes\Helpers\Validate as LaserValidate;

class DefaultTest extends PHPUnit_Framework_TestCase {
	public function testInit(){
		$_ctrl = new DefaultController();
		$data = $_ctrl->indexAction();
		var_dump($data);
		$this->assertEquals(array_keys($data),array("tabs"));
		$tab = array_shift($data["tabs"]);
		//var_dump($tab);
		$this->assertEquals(array_keys($tab),array("articles"));
		
	}
	
	public function testDBinit(){
	    //var_dump(LAZER_DATA_PATH);
	    $this->assertContains("Web/text-trainer/data/", LAZER_DATA_PATH);
	}
	
	public function testDBStructure()
	{
	    $tables = array("article", "word", "article_word", "language", "translate");
	    foreach($tables as $table) LaserValidate::table($table)->exists(); 
	    
	}
	
	/* TODO: mock test */
}

