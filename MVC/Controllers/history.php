<?php 
class history extends Controller
{
	
	public function default()
	{
		$this->view("master-2",[
			"page" => "history"
		]);
	}
	public function err(){
        $this->view("404");
    }
    public function result()
    {
    	if (!isset($_POST['btn-phone'])) {
    		header('location:/imobile/history');
    	}
    	$phonenumber = $_POST['txtPhoneNumber'];
    	$this->view("master-2",[
			"page" => "result",
			"orders" => $this->model("ProductModel")->ShoppingHistory($phonenumber)
		]);
    }
}
?>