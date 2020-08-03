<?php
class cart extends Controller
{

	public function default()
	{
		$this->view("master-2",
		[
			"page" => "cart"
		]);
	}

	public function add_to_cart($id)
	{
		$id = (int)$id[0];
		if ($id!=0&&$this->model("ProductModel")->ViewProduct($id)!=null) {
			$product = $this->model("ProductModel")->ViewProduct($id);
			$color = $this->model("ProductModel")->GetColor($id);
			if(!isset($_SESSION['cart'][$id])){
				$_SESSION['cart'][$id] = array(
					'id' => $id,
					'name' => $product['ProductName'],
					'folder' => $product['folder'],
					'pricecurrent' => $product['PriceCurrent'],
					'pricepromo' => $product['PricePromo'],
					'color' => array($color),
					'quantity' => 1,
					'image' => $product['ProductImage'],
					'promo1' => $product['Promo1'],
					'promo2' => $product['Promo2'],
					'promo3' => $product['Promo3'],
					'promo4' => $product['Promo4']
				);
			}
		}
		$this->default();
		return $_SESSION['cart'];
	}
	public function del_product($id)
	{
		$id = (int)$id[0];
		unset($_SESSION['cart'][$id]);
		$this->default();
	}
	public function des_session()
	{
		session_destroy();
		$this->default();
	}
	public function err(){
        $this->view("404");
    }
}
?>