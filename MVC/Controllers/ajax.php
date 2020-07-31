<?php 
class ajax extends Controller
{
	public $model;
	function __construct()
	{
		$this->model = $this->model("ProductModel");
	}
	public function default()
	{
		$key = $_POST['key'];
		$result = $this->model->search($key);
		foreach ($result as $value) {
			if($value['PricePromo']==0){
				echo '<li>
					<a href="http://localhost:8080/MVC/'.$value["folder"].'/detail/'.$value["ProductId"].'">
						<img src="http://localhost:8080/MVC/public/'.$value["ProductImage"].'">
						<h3>'.$value["ProductName"].'</h3>
						<span class="price">'.number_format($value['PriceCurrent'],0,"",".").'₫</span>
					</a>
				</li>';
			}else{
				echo '<li>
					<a href="http://localhost:8080/MVC/'.$value["folder"].'/detail/'.$value["ProductId"].'">
						<img src="http://localhost:8080/MVC/public/'.$value["ProductImage"].'">
						<h3>'.$value["ProductName"].'</h3>
						<span class="price">'.number_format($value['PricePromo'],0,"",".").'₫</span>
						<cite style="font-style: normal; text-decoration: line-through">'.number_format($value['PriceCurrent'],0,"",".").'₫</cite>
					</a>
				</li>';
			}
		}
	}
	public function load_product()
	{
		$i = $_POST['i'];
		$group = $_POST['group'];
		echo $this->model->Count($group);
		$total_records = $this->model->Count($group);
		$limit = 10;
		$total_page = ceil($total_records / $limit);
		if ($i > $total_page){
		    $i = $total_page;
		}else if ($i < 1){
		    $i = 1;
		}
		$start = ($i-1)*$limit;
		$result = $this->model->Load($group,$start,$limit);
		echo "<pre>";
		
		print_r($result);
	}
	public function get_province()
	{
		$province = $this->model("GetAddress")->province();
		foreach ($province as $value) {
			echo '<div class="list province" value="'.$value["id"].'">'.$value["_name"].'</div>';
		}
	}
	public function get_district()
	{
		$ProvinceID = $_POST['ID'];
		$district = $this->model("GetAddress")->district($ProvinceID);
		foreach ($district as $value) {
			echo '<div class="list listdist" value="'.$value["id"].'">'.$value["_name"].'</div>';
		}
		echo '<div class="error" id="nulldistrict"></div>';
	}
	public function get_ward()
	{
		$DistrictID = $_POST['ID'];
		$ward = $this->model("GetAddress")->ward($DistrictID);
		$street = $this->model("GetAddress")->street($DistrictID);
		foreach ($ward as $value) {
			echo '<div class="list listward" value="'.$value["id"].'">'.$value["_name"].'</div>';
		}
		foreach ($street as $value) {
			echo '<div class="list listward" value="'.$value["id"].'">'.$value["_name"].'</div>';
		}
		echo '<div class="error" id="nullward"></div>';
	}
}
?>