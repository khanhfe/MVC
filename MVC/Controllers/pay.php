<?php 
class pay extends Controller
{
	
	public function default()
	{
		if (!isset($_POST['submit'])) {
			header('location:/MVC/');
		}else{
			$_SESSION['quantity'] = $_POST['amount'];
			$_SESSION['color'] = $_POST['color'];
	 		$_SESSION['phonenumber'] = $_POST['PhoneNumber'];
			$_SESSION['note'] = $_POST['serviceother'];
			$_SESSION['gender'] = $_POST['gender'];
			$_SESSION['fullname'] = $_POST['FullName'];
			$_SESSION['email'] = '';
			$_SESSION['pay'] = $_POST['pay'];
			if($_POST['BillingAddress']!=null){
				$_SESSION['address'] = $_POST['BillingAddress'].", ".$_POST['ward'].", ".$_POST['district'].", ".$_POST['province'];
			}else{
				$_SESSION['address'] = $_POST['district'].", ".$_POST['province'];
			}
			$this->view("master-2",[
				"page" => "pay"
			]);
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