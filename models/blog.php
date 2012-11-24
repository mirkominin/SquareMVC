<?php

class Blog_Model
{		
	public function __construct()
	{
	}
	
	//den enda metod i klassen är att skapa ett
	//objekt av klass Database_Model och sen 
	//anropa metoden Get() för att hämta rader
	//och returnera resultatet
	public function getPost()
	{
		$db = new Database_Model;
		$results = $db->Get();
		
		return $results;
	}
}