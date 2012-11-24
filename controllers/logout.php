<?php
// Den här filen ska ta hand om hämtning och leverering av knappar
// 

class Logout_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'logout';
	
	public function main(array $getVars)
	{
		$logoutModel = new Logout_Model;
		
		$logoutModel->logout();	
		
		//skapa en presentation av logout genom view
		$view = new View_Model($this->template);
		$data['title'] = "Logga ut";
		$data['content'] = "Du är nu loggat ut";

		//lägga till data till view
		$view->assign('title', $data['title']);
		$view->assign('content', $data['content']);
 
	}
}