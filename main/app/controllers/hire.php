<?php 

class Hire extends Controller
{

	public $dev;

	public function index($params = '')
	{

		$params = explode("/", $params);

		if(isset($params[0]))
		{

			//SELECT DEVELOPERS
			$this->dev = $this->select_data('dev','*','WHERE id="'.$params[0].'"');

			if($this->dev)
			{

				$this->view('hire',$this->dev);

			}else
			{
				header("location:".$this->root);
			}

		}else
		{
			header("location:".$this->root);
		}
	}
}

?>