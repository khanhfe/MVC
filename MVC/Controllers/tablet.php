<?php 
class tablet extends Controller
{
	function __construct()
	{
		$this->model = $this->model("ProductModel");
	}
	public function default()
	{
        $group = "Máy tính bảng";
        $this->view("master-1", [
        	"page" => "category",
        	"Tablet" => $this->model->ShowAll($group),
        	"categ" => "Tablet",
            "num" => $this->model->Count($group)
        ]);
	}
	public function detail($id){
		$id = (int)$id[0];
    	$this->view("master-1",
    	[
    		"page" => "detail",
    		"product" => $this->model->ViewProduct($id),
    		"categ" => "detail-tab"
    	]);
    }
}
?>