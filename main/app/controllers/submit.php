<?php 

class Submit extends Controller
{
	public function index($params = '')
	{
		$params = explode("/", $params);
		
		if(isset($_POST['submit'])){

			//INSERT PROJECT INFO
			
			//DATE
			$date = date("Y-m-d h:i:s");
			
			$this->insert_data('project','name,description,owner,dev,date,active',[$_POST['pname'],$_POST['description'],$_POST['email'],'',$date,1]);

			//INSERT CLIENT INFO

			$this->insert_data('client','name,email,phone,date,active',[$_POST['cname'],$_POST['email'],$_POST['phone'],$date,1]);

			header("location:".$this->root."home/index/success/#services");

		}

		$this->view('submit',$params);

	}
}

?>