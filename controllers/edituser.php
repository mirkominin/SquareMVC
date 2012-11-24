<?php

class EditUser_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'edituser';
	public $id;
	public $user;
	public $password;
	private $password_hash;
	public $firstname;
	public $lastname;
	public $email;
	public $group;	
	public function main(array $getVars)
	{
		$data['title'] = "Redigera användaren";
		$data['content'] = "Fylla alla fält och tryck på 'Redigera'";
		$editUserModel = new EditUser_Model;
		
				
		//skapa en presentation av controller genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('title', $data['title']);
		$view->assign('content', $data['content']);
	 
 		//controllera om post action som kommer från (view)edituser.php
		//innehåller data. Om det gör ska lägga värde i variblerna som
		//ska användas i argument när jag ska anropa metoden edit()
		//som finns i klass EditUser_Model.
		if(isset($_POST['user']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && !empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['firstname'])&& !empty($_POST['lastname']) && !empty($_POST['email']))
		{
			//spara alla data som kommer från formuläret i lokala variable
			//för orsak jag fortfarande inte vet kunde inte jag spara id från _POST
			//men jag hade det i _SESSION och det funkar.
			$this->id = ($_SESSION['user_id']);
			$this->user = ($_POST['user']);
			$this->password = ($_POST['password']);
			$this->password_hash = md5($this->password);
			$this->firstname = ucfirst($_POST['firstname']);
			$this->lastname = ucfirst($_POST['lastname']);
			$this->email = ($_POST['email']);
			$this->group = ($_POST['group']);
			$editUserModel = new EditUser_Model;
			
			//eftersom edit ska returnare sant om "UPDATE" i databas lyckade och falsk om det inte gick 
			//ställer jag funktionen i en if-sats och göra olika handling beroende på svaret
			if($editUserModel->edit($this->id, $this->user, $this->password_hash, $this->firstname, $this->lastname, $this->email, $this->group))
			{
				//omdirigera användare om det returnera sant
			    $location = 'dbupdated';
			    redirect($location);
			}
			else
			{
				//meddela användare att UPDATE misslyckade
			    $data['databaseMessage'] = "Användaren kunde inte uppdaterar nu, försök igen senare";
			    $view->assign('databaseMessage', $data['databaseMessage']);			
			}			
		}
	}
}