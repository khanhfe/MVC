<?php 
class GetAddress extends DB
{
	
	public function province()
	{
		$sql = "SELECT * FROM province";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function district($ProvinceID)
	{
		$sql = "SELECT * FROM district WHERE _province_id = '$ProvinceID'";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function ward($DistrictID)
	{
		$sql = "SELECT * FROM ward WHERE _district_id = '$DistrictID'";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function street($DistrictID)
	{
		$sql = "SELECT * FROM street WHERE _district_id = '$DistrictID'";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
}
?>