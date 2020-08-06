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
		$id;
        if (isset($id[0])) {
            $id = (int)$id[0];
        };
        if ($id==0) {
            $this->view("404");
        }else{ 
            if ($this->model->ViewProduct($id)==null) {
                header('location:/imobile/');
            }else{
                $this->view("master-1",
                [
                    "page" => "detail",
                    "product" => $this->model->ViewProduct($id),
                    "categ" => "detail-tab"
                ]);
            }
        }
    }
    public function err(){
        $this->view("404");
    }
}
?>