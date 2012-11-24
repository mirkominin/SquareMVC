<?php

class EditUser_Model
{
	public function __construct()
	{
	}
	
	public function edit($id, $user, $password, $firstname, $lastname, $email, $group)
	{
		//skapa ett objekt av klassen Database_Model för att använda metoden edit
		//om edit lyckas (metoden i database klass returnera true om lyckas)
		//då skicka jag vidare retur värde till controller, så jag kan meddela lämplig till användare
		$db = new Database_Model;
		if($db->edit($id, $user, $password, $firstname, $lastname, $email, $group))
			return true;
	}
}