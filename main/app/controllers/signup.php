<?php 

class Signup extends Controller
{

	public $email_err;
	public $password_err;

	public function index($params = '')
	{

		//GET FIELDS DATA
		if(isset($_POST['submit'])){

			//CHECK IF EMAIL EXIST
			if($this->select_data('dev','email','WHERE email = "'.$_POST['email'].'"'))
			{
				$this->email_err = 'Email  already exist';
			}

			//CHECK IF PASSWORDS MATCH
			if($_POST['password']==$_POST['password2'] && empty($email_err)){

				//DATE
				$date = date("Y-m-d h:i:s");

				//TABLE COLUMNS FOR INSERTION IN DEV
				$columns = "name,email,phone,password,area,description,image,date,active";
				$values = array($_POST['name'],$_POST['email'],$_POST['phone'],md5($_POST['password']),$_POST['area'],$_POST['description'],'',$date,1);
				
				//SEND DATA INTO DEV
				$this->insert_data("dev",$columns,$values);

				//SET SESSIONS
				$_SESSION['active'] = 1;
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['password'] = md5($_POST['password']);

				//REDIRECT TO DASHBOARD
				header("location:".$root."panel");

			}else{
				$this->password_err = "Passwords don't match";
			}

		}

		//THE VIEW
		$this->view('signup');

	}
}

?>