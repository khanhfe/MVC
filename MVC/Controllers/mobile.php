<?php 
class mobile extends Controller
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
		$id;
        if (isset($id[0])) {
            $id = (int)$id[0];
        };
        if ($id==0) {
            $this->view("404");
        }else {
            if ($this->model->ViewProduct($id)==null) {
                header('location:/MVC/');
            }else{
                $this->view("master-1",
                [
                    "page" => "detail",
                    "product" => $this->model->ViewProduct($id),
                    "categ" => "detail-mob"
                ]);
            }
        }
    	
    }
    public function err(){
        $this->view("404");
    }
}
?>