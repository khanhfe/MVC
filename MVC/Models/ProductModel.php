<?php 
class ProductModel extends DB
{
	public function ProductCategory($group)
	{
		$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId WHERE product.PricePromo>0 AND product.GroupProduct = '$group' LIMIT 10";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function ShowAll($group)
	{
		$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId WHERE product.GroupProduct = '$group' LIMIT 10";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function Count($group)
	{
		$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId WHERE product.GroupProduct = '$group'";
		$query = mysqli_query($this->con,$sql);
		$num = mysqli_num_rows($query);
		return $num;
	}
	public function Load($group,$start,$limit)
	{
		$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId WHERE product.GroupProduct = '$group' LIMIT $start,$limit";
		$query = mysqli_query($this->con, $sql);
		$result = array();
		if($query){
			while($row = mysqli_fetch_assoc($query)){
				$result[] =$row;
			}
		}
		return $result;
	}
	public function search($key)
	{
		$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId WHERE INSTR(ProductName,'$key')>0 OR INSTR(GroupProduct,'$key')>0 ";
		$query = mysqli_query($this->con,$sql);
		$result = array();
		while($row = mysqli_fetch_array($query)){
			$result[] = $row;
		}
		return $result;
	}
	public function ViewProduct($id)
	{
		$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId JOIN detail ON product.ProductId = detail.ProductId WHERE product.ProductId = '$id'";
		$query = mysqli_query($this->con,$sql);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}
	public function GetColor($id)
	{
		$sql = "SELECT * FROM color_product WHERE ProductId = '$id'";
		$query = mysqli_query($this->con,$sql);
		$color = array();
		if($query) {
			while($row = mysqli_fetch_assoc($query)){
				$color[] = $row;
			}
		}
		return $color;
	}
}
?>