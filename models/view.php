
<?php

//klassen som ska ta hand om presentation av mina data

class View_Model
{
	//variablerna som ska skickas till template
	private $data = array();
	
	//leverans statusen
	private $render = FALSE;
	
	//Ladda upp template
	public function __construct($template)
	{
		$file = SERVER_ROOT . 'views/' . strtolower($template) . '.php';
		//kolla om filen finns i mappen
		if(file_exists($file))
		{
			$this->render = $file;
		}
	}
	
	//hämtar data från controller och spara de i lokala arrayen
	public function assign($variable, $value)
	{
		$this->data[$variable] = $value;
	}
	public function __destruct()
	{
		$data = $this->data;
		include($this->render);
	}
}