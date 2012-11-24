<?php

// skapar jag övning klass för index sidan där jag försöker att ladda upp
// två knappar genom modellen

class Index_Model
{
	private $navbar = array 
	(
	//första
	'button0' => array(
		'title' => '<a href="http://www.student.bth.se/~mimi11/Tutorial%20MVC%20John%20Squibb/index.php?redovisning&redovisning=redovisning1">Redovisning 1</a>'
		),
	//andra
	'button1' => array(
		'title' => '<a href="http://www.student.bth.se/~mimi11/Tutorial%20MVC%20John%20Squibb/index.php?redovisning&redovisning=redovisning2">Redovisning 2</a>'
		)
	);
	
	//jag skapa en funktion för att skapa en artikel som finns i arrayen
	public function get_navbar()
	{
		return $this->navbar;
	}
	
	public function __construct()
	{
	}
	
}