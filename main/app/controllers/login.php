<?php 

	class Login extends Controller
	{

		public $login_err ; 

		public function index($params = '')
		{

			//GET FIELDS DATA
			if(isset($_POST['submit'])){

				//CHECK IF USER EXISTS
				$result = $this->select_data('dev','*','WHERE email="'.$this->cleanInput($_POST['email']).'" AND password="'.md5($_POST['password']).'"');
				if($result)
				{
					//REDIRECT TO PANEL
					header("location:".$root."panel/login");

					//SET SESSION
					$_SESSION['active'] = 1;
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['password'] = md5($_POST['password']);


				}else{
					$this->login_err = "Invalid email or password";
				}

			}

			$this->view('login');
		}
	}

 ?>