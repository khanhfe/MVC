<?php 
class history extends Controller
{
	
	public function default()
	{
		$this->view("master-2",[
			"page" => "history"
		]);
	}
	public function err(){
        $this->view("404");
    }
}
?>