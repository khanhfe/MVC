<?php 
class history extends Controller
{
	
	public function default()
	{
		if (isset($_SESSION['phone'])) {
			$phonenumber = $_SESSION['phone'];
			$this->view("master-2",[
				"page" => "history",
				"orders" => $this->model("ProductModel")->ShoppingHistory($phonenumber)
			]);
		}else{
			$this->view("master-2",[
				"page" => "login-history"
			]);
		}
		
	}
	public function err(){
        $this->view("404");
    }
    public function result()
    {
    	$_SESSION['phone'] = $_POST['txtPhoneNumber'];
    	if (!isset($_SESSION['phone'])) {
    		$this->view("master-2",[
				"page" => "login-history"
			]);
    	}
    	
    	$phonenumber = $_SESSION['phone'];
    	if ($this->model("ProductModel")->ShoppingHistory($phonenumber)==null) {
    		$fail = "true";
            $this->view("master-2",[
				"page" => "login-history",
				"result" => $fail
			]);
        }else{
        	$_SESSION['phone'] = $phonenumber;
			$this->view("master-2",[
				"page" => "history",
				"orders" => $this->model("ProductModel")->ShoppingHistory($phonenumber)
			]);
        }
    	
    }
    public function detail($id)
    {
    	$id;
        if (isset($id[0])) {
            $id = (int)$id[0];
        };
        if ($id==0) {
            $this->view("404");
        }else {
            if ($this->model("ProductModel")->ViewOrder($id,$_SESSION['phone'])==null) {
               	$this->view("404");
            }else{
                $this->view("master-2",
                [
                    "page" => "detail-order",
                    "order" => $this->model("ProductModel")->ViewOrder($id,$_SESSION['phone'])
                ]);
            }
        }
    }
    public function DelOrder($arr)
    {
    	$id;
    	if (isset($arr[0])) {
            $id = (int)$arr[0];
        };
        $reason = $arr[1];
        $this->model("ProductModel")->DelOrder($reason,$id);
        $this->view("master-2",[
			"page" => "history",
			"orders" => $this->model("ProductModel")->ShoppingHistory($_SESSION['phone'])
		]);
    }
    public function desSession()
    {
    	session_destroy();
    	header('location:/imobile/history');
    }
}
?>