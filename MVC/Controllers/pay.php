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
				'date' => date('H:i:s, yy-m-d ')
				''
			);
			$this->view("master-2",[
				"page" => "pay",
				"infoOrder" => $_SESSION['infoOrder']
			]);
			$this->model("ProductModel")->AddCustomer($_POST['FullName'],$_SESSION['infoOrder']['gender'],$_POST['PhoneNumber'],'',$_SESSION['infoOrder']['address'],'',$_POST['pay'],$_SESSION['infoOrder']['date'],0);
			$i=0;
			foreach ($_SESSION['cart'] as $order) {
				$this->model("ProductModel")->AddOrder($oder['name'],$oder['image'],$oder['pricecurrent'],$oder['pricepromo'],$_POST['color'][$i],$_POST['amount'][$i],$_POST['pay'],$_SESSION['infoOrder']['date']);
				$i++;
			}
		}
	}
	public function cancel()
	{
		session_destroy();
		header('location:/mvc/');
	}
	public function err(){
        $this->view("404");
    }
}
?>
