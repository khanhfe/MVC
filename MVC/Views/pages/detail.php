<?php $product = $data["product"];?>
<link rel="stylesheet" href="public/css/detail.css">
<div class="container">
	<ul class="category">
		<li><a href="/imobile">Trang chủ </a><span>›</span></li>
		<li><a href="/imobile/<?php echo$product['folder'] ?>"><?php echo $product['GroupProduct']; ?></a><span>›</span></li>	
		<li><a href="#"><?php echo $product['Brand']; ?></a></li>	
	</ul>
	<h1>Điện thoại <?php if(isset($product['ProductName'])) echo $product['ProductName']; ?></h1>
	<div class="row"></div>
	<div class="product" id="product">
		<div class="image">
			<img src="public/<?php echo $product['ProductImage'] ?>" width="400">	
		</div>
		<div class="price_sale">
			<div class="price">
				<strong>
					<?php if($product['PricePromo']==0) echo number_format($product['PriceCurrent'],0,"","."); else echo number_format($product['PricePromo'],0,"",".") ?>₫
				</strong>
				<span class="hisprice">
					<?php if($product['PricePromo']!=0) echo number_format($product['PriceCurrent'],0,"",".").'₫'; ?>
				</span>
				<label class="installment">Trả góp 0%</label>
			</div>
			<div class="mermory">
				<div class="default">Bạn đang xem phiên bản: <b></b></div>
			</div>
			<div class="area_promotion">
				<strong>Khuyến mãi</strong>
				<div class="infopromo">
					<span class="notnull">
						<?php echo $product['Promo1']; ?>
					</span>
					<span class="notnull">
						<?php echo $product['Promo2']; ?>
					</span>
					<span class="notnull">
						<?php echo $product['Promo3']; ?>
					</span>
					<span class="notnull">
						<?php echo $product['Promo4'] ?>
					</span>
					<span class="notnull">
						<?php echo $product['Promo5'] ?>
					</span>
				</div>
				<script type="text/javascript" charset="utf-8">
					var notnull = document.querySelectorAll('.infopromo span')
					for (var i = 0; i < notnull.length; i++) {
						if(notnull[i].innerHTML.trim()==='') {
							notnull[i].classList.remove('notnull')
						}
					}
				</script>
				<div class="vipservice">
					<div>
						<b>Chọn thêm các dịch vụ<b style="color: #ff0011;"> miễn phí chỉ có ở iMobile</b></b>
					</div>
					<div class="ol">
						<label>
							<input type="checkbox" name="" value="" checked="checked">
							<span> Giao ngay từ cửa hàng gần bạn nhất</span>
						</label>
					</div>
					<div class="ol">
						<label>
							<input type="checkbox" name="" value="">
							<span> Chuyển danh bạ, dữ liệu qua máy mới</span>
						</label>
					</div>
					<div class="ol">
						<label>
							<input type="checkbox" name="" value="">
							<span> Mang thêm điện thoại khác để bạn xem</span>
						</label>
					</div>		
				</div>
			</div>
			<div class="area_order btn-buy">
				<a id="mua-ngay" href="cart/add_to_cart/<?php echo $product['ProductId'] ?>" class="buy_now"><b>Mua ngay</b><span>Giao tận nơi hoặc nhận tại siêu thị</span></a>
				<a id="tra-gop" class="buy_repay " href=""><b>Mua trả góp 0%</b><span>Thủ tục đơn giản</span></a>
				<a class="buy_repay s " href=""><b>Trả góp  qua thẻ</b><span>Visa, Master, JCB</span></a>
			</div>
		</div>
		<div class="tableparameter">
			<h2>Thông số kỹ thuật</h2>
			<?php require_once 'detail/'.$data['categ'].'.php'; ?>
			<button type="button" class="viewparameterfull">Xem thêm cấu hình chi tiết</button>
		</div>	
	</div>
</div>
