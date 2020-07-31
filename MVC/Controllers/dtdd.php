<?php 
class dtdd extends Controller
{	
	public $model;
	function __construct()
	{
		$this->model = $this->model("ProductModel");
	}
	public function default()
	{
        $group = "Điện thoại";
        $this->view("master-1", [
        	"page" => "category",
        	"Mobile" => $this->model->ShowAll($group),
        	"categ" => "Mobile",
            "num" => $this->model->Count($group)
        ]);
	}
	public function detail($id){
		$id = (int)$id[0];

    	$this->view("master-1",
    	[
    		"page" => "detail",
    		"product" => $this->model->ViewProduct($id),
            "categ" => "detail-mob"
    	]);
    }
}
?>