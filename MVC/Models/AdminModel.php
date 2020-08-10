<?php 
class AdminModel extends db
{
	public function VerifyAccount($username,$password)
	{
		$sql = "SELECT * FROM account WHERE username = '$username'";
		$query = mysqli_query($this->con,$sql);
		$result = false;
		if($query){
			$row = mysqli_fetch_assoc($query);
			if (password_verify($password, $row['password'])) {
				$result = true;
			}
		}
		return json_encode($result);
	}
	public function ShowCustomer()
	{
		$sql = "SELECT * FROM customer ORDER BY customer.CustomID DESC LIMIT 10 ";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function ShowProduct()
	{
		$sql = "SELECT * FROM product LIMIT 10";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function DetailOrder($id)
	{
		$sql = "SELECT * FROM orders JOIN customer ON orders.CustomID = customer.CustomID WHERE orders.CustomID = '$id'";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;	
	}

	public function UpdateOrder($id,$status)
	{
		$sql = "UPDATE customer SET Status = '$status' WHERE CustomID = '$id'";
		$query = mysqli_query($this->con, $sql);
		return $query;
	}
}
?>