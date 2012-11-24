<?php
// Den här filen ska ta hand om hämtning och leverering av knappar
// 

class Dbupdated_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'logout';
	
	public function main(array $getVars)
	{		
		//skapa en presentation av db updated genom view
		$view = new View_Model($this->template);
		$data['title'] = "Databas updaterat";
		$data['content'] = "Dina uppgifterna ska visas uppdaterat vid nästa inlogging";

		//lägga till data till view
		$view->assign('title', $data['title']);
		$view->assign('content', $data['content']);
 
	}
}