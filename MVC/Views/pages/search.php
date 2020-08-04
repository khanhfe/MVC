<style type="text/css" media="screen">
	.report_text{
	    display: block;
	    overflow: hidden;
	    padding: 10px 0 15px;
	    font-size: 18px;
	    color: #a9a9a9;
	}.report_text h1 {
	    font-size: 18px;
	    font-weight: 100;
	    color: #000;
	    display: inline;
	}.noresultsuggestion {
	    background: #fff;
	    padding-left: 36%;
	    padding-top: 3%;
	    padding-bottom: 5%;
	    margin-bottom: 2%;
	}.noresultsuggestion h3 {
	    font-size: 16px;
	    font-weight: 600;
	}.noresultsuggestion ul {
	    margin: 10px 0;
	    line-height: 20px;
	}.noresultsuggestion ul li {
	    list-style-position: inside;
	    list-style-type: disc;
	}
</style>
<?php $result = $data["result"];if (empty($result)) { ?>
<div class="report_text">
	<h1>Rất tiếc, iMobile.com không tìm thấy kết quả nào phù hợp với từ khóa</h1>
</div>
<div class="noresultsuggestion">
    <img src="/imobile/public/img/NoResult1x.jpg">
    <h3>Để tìm được kết quả chính xác hơn, bạn vui lòng:</h3>
    <ul>
        <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
        <li>Thử lại bằng từ khóa khác</li>
        <li>Thử lại bằng những từ khóa tổng quát hơn</li>
        <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
    </ul>
</div>
<?php }else{ ?>
<div class="report_text">
	<h1>Kết quả tìm kiếm:</h1>
</div>
<ul class="listsearch homeproduct">
	<?php foreach ($result as $value) { ?>
	<li class="item">
		<a href="<?php echo $value['folder'].'/detail/'.$value['ProductId'] ?>">
			<img src="/imobile/public/<?php echo $value['ProductImage'];?>" >
			<h3><?php echo $value['ProductName']; ?></h3>
			<div class="price">
				<strong><?php if($value['PricePromo']==0) echo number_format($value['PriceCurrent'],0,"","."); else echo number_format($value['PricePromo'],0,"","."); ?>₫</strong>
				<span><?php  if($value['PricePromo']!=0) echo number_format($value['PriceCurrent'],0,"",".") .'₫'; ?></span>
			</div>
			<div class="promo"><?php echo $value['Promo1'] ?></div>
			<?php if($value['PricePromo'] != 0){ ?>
			<label class="discount">GIẢM <?php echo number_format($value['PriceCurrent']-$value['PricePromo'],0,"",".").'₫';?> </label>
			<?php } ?>
		</a>
	</li>
	<?php } ?>
</ul>
<script>$('label').css('left', '0')</script>
<?php if ($result[0]["folder"]=="laptop") {?>
<script>$('.homeproduct').addClass('laptop')</script>
<?php } }?>