<?php

class Login_Model
{
	
	public function __construct()
	{
	}
	
	public function login($user, $password)
	{
		//skapa ett objekt av klassen Database_Model för att använda metoden login
		//om login lyckas (metoden i database klass returnera true om lyckas)
		//då skicka jag vidare retur värde till controller, så jag kan meddela lämplig till användare
		$db = new Database_Model;
		$results = $db->Login($user, $password);
		return $results;
	}
}