<?php 
class banner extends DB
{
	
	public function ListAll()
	{
		$query = "SELECT * FROM banner";
		$rows = mysqli_query($this->con,$query);
		$result = array();
		while($row = mysqli_fetch_array($rows)){
			$result[] = $row;
		}
		return $result;
	}
}

?>