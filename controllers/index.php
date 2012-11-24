<?php
// Den här filen ska ta hand om hämtning och leverering av knappar
// 

class Index_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'index';
	
	public function main(array $getVars)
	{
		$indexModel = new Index_Model;
		
		//hämtar knappar		
		$buttons = $indexModel->get_navbar();
		
		//skapa en presentation av genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('button', $buttons);
 
	}
}