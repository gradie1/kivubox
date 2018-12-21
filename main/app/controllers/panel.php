<?php 

class Panel extends Controller
{

	public $dev ;
	public $profil;

	public function index($params = '')
	{

		if(!$this->loggedin()){
			header("location:".$this->root);
		}

			//SAVE DP
		if(isset($_POST["submit"])){
			
			if (($_FILES["profil"]["type"] == "image/gif") ||
				($_FILES["profil"]["type"] == "image/jpeg") ||
				($_FILES["profil"]["type"] == "image/png") ||
				($_FILES["profil"]["type"] == "image/pjpeg")) {

				//INSERT IMAGE NAME TO DEV TABLE
				$this->update_data('dev','SET image="'.$_FILES['profil']['name'].'"',' WHERE email="'.$_SESSION['email'].'"');
			
				//COMPRESS AND MOVE
				$url = "../data/dev/".$_SESSION['email']."/dp/";
				if(!file_exists($url)){
					mkdir($url,0777,TRUE);
				}

				$this->compress_image($_FILES['profil']['tmp_name'],$url.$_FILES['profil']['name'],50);
		}
	}

	$params = explode("/", $params);

	//SELECT DEV INFOS
	$result = $this->select_data('dev','*','WHERE email="'.$this->cleanInput($_SESSION['email']).'" AND password="'.$_SESSION['password'].'"');

	$this->dev = $result[0]['email'];

	$this->profil = $result[0]['image'];

		//GRAB
	if(isset($params[0]) && $this->loggedin()){

		if($params[0]=="grab"){

			$dev = $this->cleanInput($result[0]['email']);
			$id = $this->cleanInput($params[1]);

				//ASSIGN DEVELOPPER
			$this->update_data('project',"SET dev='".$dev."'","WHERE id='".$id."'");

		}

	}

	if(isset($params[0]) && $this->loggedin()){

		if($params[0]=="rel"){

			$dev = $this->cleanInput($result[0]['id']);
			$id = $this->cleanInput($params[1]);

					//RELEASE
			$this->update_data('project',"SET dev=''","WHERE id='".$id."'");

		}

		if($params[0]=="del"){

			$id = $this->cleanInput($params[1]);

					//DELETE
			$this->update_data('project',"SET active='0'","WHERE id='".$id."'");

		}

	}


	if($result){

		$this->name = $result[0]['name'];

	}

			//SELECT PROJECTS
	$projects = $this->select_data('project','*','WHERE dev="" AND active="1"');

	$this->view('panel',$projects);
}

public function out ($params = '')
{
	session_destroy();
	header("location:".$this->root);
}

}

?>