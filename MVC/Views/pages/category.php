<link rel="stylesheet" href="public/css/category.css">
<?php 
$categ = $data["categ"]; require_once 'banner/'.$categ.'.php'; ?>
<!-- <div class="sort">
	<span>Sắp xếp:</span>
	<span>Giá cao đến thấp</span>
	<span>Giá thấp đến cao</span>
</div> -->
<ul class="homeproduct">
	<?php $product = $data[$categ]; foreach ($product as $item){ ?>
	<li class="item">
		<a href="<?php echo $item['folder'] ?>/detail/<?php echo $item['ProductId'] ?>">
			<img src="public/<?php echo $item['ProductImage'];?>">
			<h3><?php echo $item['ProductName']; ?></h3>
			<div class="price">
				<strong><?php if($item['PricePromo']==0) echo number_format($item['PriceCurrent'],0,"","."); else echo number_format($item['PricePromo'],0,"","."); ?>₫</strong>
				<span><?php  if($item['PricePromo']!=0) echo number_format($item['PriceCurrent'],0,"",".") .'₫'; ?></span>
			</div>
			<div class="promo"><?php echo $item['Promo1'] ?></div>
			<?php if($item['PricePromo'] != 0){ ?>
			<label class="discount">GIẢM <?php echo number_format($item['PriceCurrent']-$item['PricePromo'],0,"",".").'₫';}?> </label>
		</a>
	</li>
	<?php } ?>
</ul>
<?php if($categ=="Laptop") { ?>
<script type="text/javascript">
	$(document).ready(function() {
		console.log('test');
		$('.homeproduct').addClass('laptop')
		$('.laptop img').css('width', '220px');
	});
</script>
<?php }  ?>
<a class="viewmore">Xem thêm <span><?php echo ($data["num"]-10).'</span><span> '.$data[$categ][0]["GroupProduct"]?></span></a>
<script>
	$(document).ready(function() {
		group = $('.viewmore span:last-child').text()
		i = 1
		number = $('.viewmore span:first-child').html()
		number = parseInt(number)
		if(number<1){
			$('.viewmore').css('display','none')
		}
		$('.viewmore').click(function(event) {
			total = $('span:first-child',this).html()
			total-=10
			console.log(total)
			$('span:first-child',this).html(total)
			if($('span',this).html()<=0){
				$(this).css('display','none')
			}
			i+=1;
			$.post('ajax/load_product',{i:i,group:group},function(data){
				$('.homeproduct').append(data)
			})
		});
	});
</script>
