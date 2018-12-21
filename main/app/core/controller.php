<?php 

	require_once '../app/models/main.php';

	DEFINE('dbn','dev');
	DEFINE('dbu','root');
	DEFINE('dbh','localhost');
	DEFINE('dbpw','xcode');

	class Controller extends Main
	{

		public $root = 'http://localhost/test/devcrowd/main/public/';
		public $rootdata = 'http://localhost/test/devcrowd/main/';	

		public function __construct()
		{
			Main::__construct(dbn,dbu,dbh,dbpw);
		}

		public function model($model)
		{
			require_once '../app/models/' . $model . '.php';
		}
		public function view($view, $data = [])
		{	
			$root = $this->root;
			require_once '../app/views/' . $view . '.php';
		}
	}

 ?>