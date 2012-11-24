<?php

class Blog_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'blog';
	public $post = array();
	
	public function main(array $getVars)
	{
		//skapa ett objekt för Blog_Model klass så 
		//att jag kan använda metoder i klassen
		$blogModel = new Blog_Model;
		
		//anropa metoden som ska hämta alla poster
		$posts = $blogModel->getPost();


		//skapa en presentation av redovisningen genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('data', $posts);
	}

}