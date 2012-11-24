<?php

class Insert_Model
{
	
	public function __construct()
	{
	}
	
	public function insert($author, $body)
	{
		//skapa ett objekt av klassen Database_Model för att använda metoden insert
		//om insert lyckas (metoden i database klass returnera true om lyckas)
		//då skicka jag vidare retur värde till controller, så jag kan meddela lämplig till användare
		$db = new Database_Model;
		if($db->insert($author, $body))
		{
			return true;
		}
	}
}