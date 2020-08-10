<?php 
class admin extends Controller
{
	public $model;
	function __construct()
	{
		$this->model = $this->model("AdminModel");
	}
	public function default()
	{
		if (isset($_SESSION['verify'])) {
			if ($_SESSION['verify']=='true') {
				$this->view("master-4",
				[
					"page" => "admin",
					"ListOrder" =>$this->model->ShowCustomer(),
					"ListProduct" => $this->model->ShowProduct()
					
				]);
			}else header('location:/imobile/login');
		}else header('location:/imobile');
	}
	public function err(){
        $this->view("404");
    }

    public function detailOrder($id)
    {
    	$id;
        if (isset($id[0])) {
            $id = (int)$id[0];
        }
        if ($this->model->DetailOrder($id)==null) {
            header('location:/imobile/admin');
        }else{
            $this->view("master-4",
            [
                "page" => "admin/detail-order",
                "order" => $this->model->DetailOrder($id)
            ]);
        }
    }

    public function update($parram)
    {
    	$id = $parram[0];
    	$id = (int)$id;
    	$status = $parram[1];
    	if ($status == '1') {
    		$status = "Giao hàng thành công";
    	}else $status = "Đã hủy";

    	$this->model->UpdateOrder($id,$status);
    	$this->view("master-4",
        [
            "page" => "admin/detail-order",
            "order" => $this->model->DetailOrder($id)
        ]);
    }

    public function add()
    {
    	$this->view("master-4",
    	[
    		"page" => "admin/add-product"
    	]);
    }
}
?>