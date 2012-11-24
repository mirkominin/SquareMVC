<?php

class NewUser_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'newuser';
	public $user;
	public $password;
	private $password_hash;
	public $firstname;
	public $lastname;
	public $email;
	public $group;	
	public function main(array $getVars)
	{
		$data['title'] = "Registrera en ny användare";
		$data['content'] = "Fylla alla fält och tryck på 'Lägga till'";
		$newUserModel = new NewUser_Model;
		
		//hämtar knappar		
		//skapa en presentation av genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('title', $data['title']);
		$view->assign('content', $data['content']);
 
 		//controllera om post action som kommer från (view)newuser.php
		//innehåller data. Om det gör ska lägga värde i variblerna som
		//ska användas i argument när jag ska anropa metoden newuser()
		//som finns i klass NewUser_Model.
		if(isset($_POST['user']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && !empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['firstname'])&& !empty($_POST['lastname']) && !empty($_POST['email']))
		{
			$this->user = ($_POST['user']);
			$this->password = ($_POST['password']);
			$this->password_hash = md5($this->password);
			$this->firstname = ucfirst($_POST['firstname']);
			$this->lastname = ucfirst($_POST['lastname']);
			$this->email = ($_POST['email']);
			$this->group = ($_POST['group']);
			$newUserModel = new NewUser_Model;
			//kollar jag om username är tillgängligt och inte redan tagen.
			if($newUserModel->usernameCheck($this->user))
			{
				$data['databaseMessage'] = "Anvärnamn är redan registrerat, välj en annan username";
				$view->assign('databaseMessage', $data['databaseMessage']);
			}
			else
			{
				//register returnera sant om det lyckades eller falsk om det gick inte. 
				//jag ställer funktion anrop in en if-sats för att kolla vad returnera och handlar resultatet lämpligt
				if($newUserModel->register($this->user, $this->password_hash, $this->firstname, $this->lastname, $this->email, $this->group))
				{
					//redirect användare om sant
					 $location = 'dbupdated';
			    		redirect($location);
				}
				else
				{
					//meddela användare om falsk
					$data['databaseMessage'] = "Användaren kunde inte registreras nu, försök igen senare";
					$view->assign('databaseMessage', $data['databaseMessage']);			
				}
			}
			
		}
	}
}