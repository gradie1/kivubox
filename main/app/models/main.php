<?php

class Main
{

	public $conn ;

	public function __construct($dbn,$dbu,$dbh,$dbpw){

		ob_start();
		session_start();

		//DB CONNECTION
		try
		{
			$this->conn = new PDO('mysql:host='.$dbh.';dbname='.$dbn,$dbu,$dbpw);
			// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}catch(PDOException $e)
		{
			die('ERROR 101');
		}
	}

	//CHECK SESSION
	public function loggedin(){
		if(isset($_SESSION['active'])){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//ESCAPE STRING FUNCTION
	public function escape_string($str){
		$str = preg_replace("%\'%", "\'", $str);
		$str = preg_replace("%\"%", "", $str);
		$str = preg_replace("%\-%", "\-", $str);
		$str = preg_replace("%\-%", "-", $str);
		return $str;
	}

	//CLEAN INPUT
	public function cleanInput($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = strip_tags($data);
		$data = htmlspecialchars($data);
		$data = $this->escape_string($data);
		return $data;
	}

	//COMPRESS IMAGE
	public function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

		if ($info['mime'] == 'image/jpeg'){
			$image = imagecreatefromjpeg($source_url);

		}elseif ($info['mime'] == 'image/png'){
			$image = imagecreatefrompng($source_url);
		}
		imagejpeg($image, $destination_url, $quality);

		return $destination_url;

	}

	//INSERT DATA
	public function insert_data($tbl,$columns,$values){
		//CLEAN VALUES
		$new_values = []; $records = '';
		for($i =0; $i<count($values);$i++)
		{
			array_push($new_values, $this->cleanInput($values[$i]));			 
		}

		$records = implode("','", $new_values);

		//INSERT INTO DB
		$q = "INSERT INTO ".$tbl." (".$columns.")
		VALUES ('".$records."')
		";

		$sql = $this->conn->prepare($q);

		$sql->execute();

	}

	public function select_data($tbl,$values,$where = '')
	{
		
		//SELECT FROM DB
		$q = "SELECT ".$values." FROM ".$tbl." ".$where." ";

		$sql = $this->conn->prepare($q);

		$sql->execute();

		$result = $sql->fetchAll();

		return $result;

	}

	//UPDATE DATA
	public function update_data($tbl,$set,$where){
		
		//INSERT INTO DB
		$q = "UPDATE ".$tbl." ".$set."
		".$where."
		";

		//print_r($q);

		$sql = $this->conn->prepare($q);

		$sql->execute();

	}

} 

?>