<?php
class BDD{
	public static $instance;

	private function __construct()
	{
		$this->bdd = new PDO('mysql:host=localhost;dbname=Pokedex;charset=utf8','root','');
		
	}

	public static function getInstance()
	{
		if (empty(self::$instance)) {
			self::$instance = new BDD();
					}
		
		return self::$instance;
		
	}

}

//DB::getInstance(); A UTILISER
?>