<?php 

	class Plan extends Controller
	{
		
		public function web($params = '')
		{


			$this->view('webplan');
		}

		public function app($params = '')
		{
			$this->view('appplan',['name'=>$params]);
		}

		public function soft($params = '')
		{
			$this->view('softplan',['name'=>$params]);
		}

	}

 ?>