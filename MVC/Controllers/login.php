<?php 
class login extends Controller
{
	public $model;
	function __construct()
	{
		$this->model = $this->model("AdminModel");
	}

	public function default()
    {
        $this->view("master-3", 
        [
        	"page" => "login"
        ]);
    }

    public function err()
    {
        $this->view("404");
    }

    public function verify()
    {
        if (isset($_POST['login'])) {
            $_SESSION['username'] = $_POST['username'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);
            $result =  $this->model->VerifyAccount($username,$password);
            
            if ($result =='false') {
                $this->view("master-3",
                [
                    "page" => "login",
                    "error" => "Tên đăng nhập hoặc mật khẩu không chính xác"
                ]);
            }else{
                if (isset($_POST['remember'])) {
                    $_SESSION['password'] = $password;
                };
                $_SESSION['verify'] = $result;
                header('location:/imobile/admin');
            }

        }else header('location:/imobile/login');
    }
}
?>