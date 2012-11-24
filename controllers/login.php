<?php

class Login_Controller
{
	//i template variable ska jag hålla presentation delen av min ramverk
	public $template = 'login';
	public $user;
	public $password;
	private $password_hash;
	public $loggedInUser = array();
	public function main(array $getVars)
	{
		//förberädda variablerna som jag ska skicka till view controller
		$data['title'] = "Login";
		$data['content'] = "lägga din användarnamn och ditt lösenord";
		//jag kommer att lägga värde till förljande variabler vid en handelse
		$data['Ny_användare'] = "";
		$data['id'] = "";
		$data['databaseMessage'] = "";
		$data['Ny_användare'] = "<a href='index.php?newuser'>Lägga till en ny användare</a>";
		
			
		//skapa en presentation av redovisningen genom view
		$view = new View_Model($this->template);
		
		//lägga till data till view
		$view->assign('title', $data['title']);
		$view->assign('content', $data['content']);
		$view->assign('Ny_användare', $data['Ny_användare']);

		//controllera om post action som kommer från (view)login.php
		//innehåller data. Om det gör ska lägga värde i variblerna som
		//ska användas i argument när jag ska anropa metoden login()
		//som finns i klass Login_Model.
		if(isset($_POST['user']) && isset($_POST['password']) && !empty($_POST['user']) && !empty($_POST['password']))
		{
			$this->user = ($_POST['user']);
			$this->password = ($_POST['password']);
			$this->password_hash = md5($this->password);
			$loginModel = new Login_Model;
						
			//ska spara resultatet i en array
			$loggedInUser = $loginModel->login($this->user, $this->password_hash);
			if($loggedInUser == null)
			{
				//om array är null det betyder att det finns ingen användare med det namn eller att lösenord är fel
				$data['databaseMessage'] = "Användarnamn eller löserord är felaktig";
				$view->assign('databaseMessage', $data['databaseMessage']);
			}
			else
			{
				//om det returnera spara jag data i både $data[] för att skicka det till view kontroll
				//samt spara data i SESSION också, det kommer jag behöver det
				foreach($loggedInUser as $row)
				{
				    $data['id'] = $row['id'];
				    $data['username'] = $row['username'];
				    $data['firstname'] = $row['firstname'];
				    $data['lastname'] = $row['lastname'];
				    $data['email'] = $row['email'];
				    $data['group'] = $row['group'];
				    $_SESSION['user_id'] = $row['id'];
				    $_SESSION['username'] = $row['username'];
				    $_SESSION['firstname'] = $row['firstname'];
				    $_SESSION['lastname'] = $row['lastname'];
				    $_SESSION['email'] = $row['email'];
				    $_SESSION['group'] = $row['group'];
				    $data['Redigera_användare'] = "<a href='index.php?edituser'>Redigera användaren</a>";
					$view->assign('Redigera_användare', $data['Redigera_användare']);
				}
				
			}
			
		}
	}
}