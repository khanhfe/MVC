<?php 
class home extends Controller
{
	public $model;
	function __construct()
	{
		$this->model = $this->model("ProductModel");
	}
	public function banner()
	{
		return $this->model("banner");
	}
	public function default(){
        // Call Views
        $this->view("master-1", 
        [
        	"page" => "home",
        	"banner" => $this->banner()->ListAll(),
        	"Mobile" => $this->model->ProductCategory("Điện thoại"),
        	"Tablet" => $this->model->ProductCategory("Máy tính bảng"),
        	"Laptop" => $this->model->ProductCategory("Laptop")
        ]);
    }
}
?>