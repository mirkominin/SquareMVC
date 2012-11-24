<?php

class NewUser_Model
{
	public function __construct()
	{
	}
	
	public function register($user, $password, $firstname, $lastname, $email, $group)
	{
		//skapa ett objekt av klassen Database_Model för att använda metoden Register
		//om Register lyckas (metoden i database klass returnera true om lyckas)
		//då skicka jag vidare retur värde till controller, så jag kan meddela lämplig till användare
		$db = new Database_Model;
		if($db->Register($user, $password, $firstname, $lastname, $email, $group))
		return true;
	}
	//innan jag registrera en ny username ska jag kolla om en rad finns redan med detta username
	public function usernameCheck($user)
	{
		$db = new Database_Model;
		if($db->usernameCheck($user))
			return true;
	}	
}