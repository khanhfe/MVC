<?php
class news extends Controller
{
	public function default()
	{
		$this->view("master-1",[
			"page" => "news"
		]);
	}
	function __construct()
	{
		# code...
	}
	public function err(){
        $this->view("404");
    }
}
 ?>