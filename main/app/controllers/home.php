<?php 

	class Home extends Controller
	{

		public $devs;

		public function index($params = '')
		{
			$params = explode("/", $params);

			//SELECT DEVELOPERS
			$this->devs = $this->select_data('dev','*','LIMIT 3');

			if(isset($_POST['submit']))
			{
				//DATE
				$date = date("Y-m-d h:i:s");

				//SEND MESSAGE TO DB
				$this->insert_data('contact','title,email,message,date,active',[$_POST['title'],$_POST['email'],$_POST['message'],$date,1]);
			
				header("location:".$this->root."home/index/sent/#contact");

			}

			$this->view('index',$params);
		
		}
	}

 ?>