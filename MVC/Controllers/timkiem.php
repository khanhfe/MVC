<?php 
class timkiem extends Controller
{
	public function default()
	{
		
	}
	public function timkiem()
	{
		$key = $_POST['key'];
		$this->view("master-1",[
			"page" => "timkiem",
			"result" => $this->model("ProductModel")->search($key)
		]);
	}
}
?>