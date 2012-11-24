<?php
//Den här filen ska ta hand om hämtning och leverering av redovisningar

class Redovisning_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'redovisning';
	
	//den här är den default funktion som ska ropas från router.php
	public function main(array $getVars)
	{
		$redovisningModel = new Redovisning_Model;
		
		//hämta en redovisning
		$redovisningen = $redovisningModel->get_redovisning($getVars['redovisning']);
		
		//skapa en presentation av redovisningen genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('title', $redovisningen['title']);
		$view->assign('content', $redovisningen['content']); 
	}
}