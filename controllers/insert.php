<?php

class Insert_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'insert';
	public $author;
	public $body;
	public function main(array $getVars)
	{
		//förberädda variablerna som jag ska skicka till view controller
		$data['title'] = "My Guestbook";
		$data['content'] = "Lägga till en komment";
		//jag kommer att lägga värde till förljande variabler vid en handelse
		$data['tillBlog'] = "";
		$data['entrySucceded'] = "";
		$data['entryFailed'] = "";
		//skapa en presentation av redovisningen genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('title', $data['title']);
		$view->assign('content', $data['content']);
		$view->assign('entrySucceded', $data['entrySucceded']);
		$view->assign('tillBlog', $data['tillBlog']);
		$view->assign('entryFailed', $data['entryFailed']);
		
		//controllera om post action som kommer från (view)insert.php
		//innehåller data. Om det gör ska lägga värde i variblerna som
		//ska användas i argument när jag ska anropa metoden insert()
		//som finns i klass Insert_Model.
		if(isset($_POST['author']) || isset($_POST['body']))
		{
			$this->author = ucfirst($_POST['author']);
			$this->body = ucfirst($_POST['body']);
			$insertModel = new Insert_Model;
			//kör metoden och kontrollera om det gick bra, då 
			//visar jag en lämplig meddelande och en länk till Bloggen
			if($insertModel->insert($this->author, $this->body))
			{	
				$data['tillBlog'] = '<a href="index.php?blog">till blog</a>';
				$data['entrySucceded'] = "Tack för din meddelande";
				$view->assign('entrySucceded', $data['entrySucceded']);
				$view->assign('tillBlog', $data['tillBlog']);
			}
			//om det inte returnera true visar en meddelande
			else
			{
				$data['entryFailed'] = "Vi kan inte registrera din meddelande. Försök igen senare";
				$view->assign('entryFailed', $data['entryFailed']);
			}
		}
	}
}