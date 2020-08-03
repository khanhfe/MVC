<?php 
class pay extends Controller
{
	public function default()
	{
		if (!isset($_POST['submit'])) {
			header('location:/MVC/');
		}else{
			$_SESSION['infoOrder'] = array(
				'fullname' => $_POST['FullName'],
				'gender' => $_POST['gender'] == 'anh' ? 'Nam' : 'Nữ',
				'phonenumber' => $_POST['PhoneNumber'],
				'email' => '',
				'address' => $_POST['BillingAddress'].", ".$_POST['ward'].", ".$_POST['district'].", ".$_POST['province'],
				'pay' => $_POST['pay'],
				'time' => $_POST['time'],
				'note' => implode(" ",$_POST['serviceother']) 
			);
			$this->view("master-2",[
				"page" => "pay",
				"infoOrder" => $_SESSION['infoOrder']
			]);
			$this->model("ProductModel")->AddCustomer($_POST['FullName'],$_SESSION['infoOrder']['gender'],$_POST['PhoneNumber'],'',$_SESSION['infoOrder']['address'],$_SESSION['infoOrder']['note'] ,$_POST['pay'],$_SESSION['infoOrder']['time']);
			$i=0;
			foreach ($_SESSION['cart'] as $order) {
				$this->model("ProductModel")->AddOrder($order['name'],$order['image'],$order['pricecurrent'],$order['pricepromo'],$_POST['color'][$i],$_POST['amount'][$i],$_POST['pay'],$_SESSION['infoOrder']['time'],$_POST['PhoneNumber'],$_SESSION['infoOrder']['time']);
				$i++;
			}
		}
	}
	public function cancel()
	{
		echo $this->model("ProductModel")->CancelOrder($_SESSION['phonenumber'],$_SESSION['time']) ;
		session_destroy();
		header('location:/imobile');
	}
	public function err(){
        $this->view("404");
        session_destroy();
    }
    public function desSession()
    {
    	session_destroy();
		header('location:/imobile');
    }
}
?>
