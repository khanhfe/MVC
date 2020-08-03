<?php 
class search extends Controller
{
	public function default()
	{
		
	}
	public function search()
	{
		$key = $_POST['key'];
		$this->view("master-1",[
			"page" => "search",
			"result" => $this->model("ProductModel")->search($key)
		]);
	}
	public function err(){
        $this->view("404");
    }
}
?>