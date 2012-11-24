<?php

class Database_Model
{
	//variabelna som ska behålla den enda instatiation av klassen
	private $_db;
	static $_instance;
	
	//deklarera variabelrna för kopplingen till min databas
	private $_host;
	private $_username;
	private $_password;
	private $_database;
	
	//konstruktoren som har modifier "private" så att det bli inte möjlight att 
	//instantiera klassen från utanför
	public function __construct()
	{
		$this->_host 		= "blu-ray.student.bth.se";
		$this->_username 	= "mimi11";
		$this->_password 	= "m@6scemo";
		$this->_database	= "mimi11";
		$this->db = mysql_connect($this->_host, $this->_username, $this->_password);
		//eftersom jag kommer att använda bara en tabell på databas
		//i den här moment, det är lika bra att select tabellen just nu
		$this->db = mysql_select_db ($this->_database);
	}
	
	//skapa en privat metod för att göra omöjligt att kopiera objektet 
	//från utanför klassen. Det är kravet för att skapa en singleton instans.
	private function __clone() {}

	//skapa en publik funktion för att skapa ett objekt av klassen
	public static function getInstance()
	{
		//kontrollera om variablen $_instance redan håller en referens till en objekt av klass Database
		if(!(self::$_instance instanceof self))
		{
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	//jag ska skapa ett par metoder som jag kommer att använda i min webbapplicationen.
	//jag kan sen anropa på metoden genom att använda self:$_instance-
	
	//en metod för att lägga en rad i databas
	public function Insert($body, $author)
	{
		//förberädda queryn genom att använda variablerna passerade som argumnet
		//ska köra lite skidd emot sql injection
		$query = "INSERT into `blog` VALUES ('', '" . mysql_real_escape_string($body) . "','" . mysql_real_escape_string($author) ."', NOW())";
		//kör query och använda variablerna passerade som arguments för att skapa en insert query
		if ($queryRun = mysql_query($query))
			{
				//om query lyckas returnera true
				//det gör jag för att veta vilken meddelande ska jag skicka till view/användare
				return true;
			}
	}
	
	//en metod för att visa databas innehållet
	public function Get()
	{
		//förberädd querin
		$query = "SELECT * FROM `blog` ORDER BY 'date' DESC";
		//return arrayen med alla rader
		$results = mysql_query($query);
		$data = array(); 
		while($row = mysql_fetch_assoc($results)) 
		{ 
		   $data[] = $row; 
		} 
		
		return $data;
	}
	
	//login funktionen för att hämta users uppgifterna om användare finns i databas
	public function Login($user, $password)
	{
		//förberädd queryn och hämtar id och firstname från databas om user och password matchar
		$query = "SELECT * FROM `users` WHERE `username` ='".mysql_real_escape_string($user)."' AND `password` ='".mysql_real_escape_string($password)."'";
		//ställa upp query till databas och sedan räknar jag hur många rader returnera 
		if($query_run = mysql_query($query))
		{
			$data = array(); 
			$rows = mysql_num_rows($query_run);
			//om ingen rad returnera skicka jag en null array
			if($rows == 0)
			{
				$data = null;
			}
			//p.g.a. funktionen usernameCheck() det kan vara 1 och bara 1 rad för varje username
			elseif($rows == 1)
			{
				while($row = mysql_fetch_assoc($query_run)) 
				{ 
				   $data[] = $row; 
				} 
				
				return $data;			
			}
					
		}
	}
	//funktionen för att lägga till en ny rad i databas
	public function Register($user, $password, $firstname, $lastname, $email, $group)
	{
		$query = "INSERT into `users` VALUES ('','".mysql_real_escape_string($user)."', '".mysql_real_escape_string($password)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."', '".mysql_real_escape_string($email)."','".$group."')";
		if ($queryRun = mysql_query($query))
			{
				//om query lyckas returnera true
				//det gör jag för att veta vilken meddelande ska jag skicka till view/användare
				return true;
			}
	}
	//funktionen för att kolla om en username är tillgänglig
	public function usernameCheck($user)
	{
		$query = "SELECT * FROM `users` WHERE `username` ='".mysql_real_escape_string($user)."'";
		//im query producera mer en 0 rader (det kan vara bara 1 p.g.a just den här funktion) det betyder att användarnamn är redan använt.
		$query_run = mysql_query($query);
		$rows = mysql_num_rows($query_run);
		if($rows != 0)
			return	true; 
	}
	//funktionen för att redigera en rad
	public function edit($id, $user, $password, $firstname, $lastname, $email, $group)
	{
		$query = "UPDATE users SET `username` = '".mysql_real_escape_string($user)."', `password`= '".mysql_real_escape_string($password)."', `firstname`= '".mysql_real_escape_string($firstname)."',`lastname`= '".mysql_real_escape_string($lastname)."',`email`= '".mysql_real_escape_string($email)."', `group`= '".$group."' WHERE `id`='".$id."'";
		
		if($query_run = mysql_query($query))
			return true;
	}
}
