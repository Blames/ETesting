<?php 

class HomeModel
{
	
	public function listeCopains()
	{
		require_once ('classes/db.php');
		$instanceDb = DB::getInstance();
		$query = $instanceDb ->Db->query('SELECT * FROM copains');

		$results = $query->fetchall();
	}
}

 ?>