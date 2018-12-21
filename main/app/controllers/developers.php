<?php 

	class Developers extends Controller
	{

		public $devs;

		public function index($params = '')
		{

			$params = explode("/", $params);

			//SELECT DEVELOPERS
			$this->devs = $this->select_data('dev','*','');

			$this->view('developers',$params);
		
		}
	}

 ?>