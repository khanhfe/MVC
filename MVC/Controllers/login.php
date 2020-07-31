<?php 
class login extends Controller
{
	public $model;
	function __construct()
	{
		$this->model = $this->model("ProductModel");
	}
	public function default(){
        // Call Views
        $this->view("master-3", 
        [
        	"page" => "login"
        ]);
    }
}
?>