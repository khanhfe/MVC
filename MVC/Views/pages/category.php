<link rel="stylesheet" href="public/css/category.css">
<?php $categ = $data["categ"]; require_once 'banner/'.$categ.'.php'; ?>
<div class="overlay">
	<span class="cswrap">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</span>
</div>
<style type="text/css" media="screen">
	.overlay {
    display: none;
    width: 100%;
    height: 100%;
    max-height: 200vh;
    background: rgba(255,255,255,0.5);
    position: absolute;
    top: 0;
    left: 0;
    z-index: 100000;
    clear: both;
    text-align: center;
    overflow: hidden;
	}
	.overlay .cswrap{
	    position: absolute;
	    top: 50%;
	}
	.overlay .cswrap span.dot.active{
	    width: 8px;
	    height: 8px;
	    border: 1px solid #288ad6;
	    background: #288ad6;
	    border-radius: 50%;
	    float: left;
	    margin: 0 2px;
	    transform: scale(0);
	    box-shadow: 0 2px 2px 0 rgba(0,0,0,.1);
	    animation: overlay 1s ease infinite;
	}
	@keyframes overlay{
	    0%{
	        opacity: 0;
	        transform: scale(0);
	    }
	    50%{
	        opacity: 1;
	        transform: scale(1);
	    }
	    100%{
	        opacity: 0;
	        transform: scale(0);
	    }
	}
</style>
<div class="flex">
	<div class="tit"><h1 class="h1">Danh mục <span><?php echo $data[$categ][0]['GroupProduct']; ?></span></h1></div>
	<div class="fr sort expand">
	    <span class="criteria">Sắp xếp</span>
	    <div>
	        <a href="javascript:void(0)" class="check" data-id="5"><i class="icon-checklist"></i>Nổi bật nhất</a>
	        <a href="javascript:void(0)" data-id="1"><i class="icon-checklist"></i>Giá cao đến thấp</a>
	        <a href="javascript:void(0)" data-id="2"><i class="icon-checklist"></i>Giá thấp đến cao</a>
	    </div>
	</div>
</div>
<script>
	$(document).ready(function() {
		group = $('.tit .h1 span').text()
		$('.filter .brand a').click(function(event) {
			if ($(this).hasClass('check')){
				$.post('ajax/sort', {sort: 5,group: group}, function(data) {
					$('.homeproduct').html(data)
				});
				$(this).removeClass('check')
			}else{
				brand = $(this).attr('data-brand')
				$.post('ajax/filter_brand', {brand: brand,group: group}, function(data) {
					$('.homeproduct').html(data)				
				});
				$('.brand').find('a.check').removeClass('check')
				$(this).addClass('check')
			}
			timing();
			$('.dot').addClass('active')
			$('.viewmore').css('display', 'none');
			
		});
		// brand = $('.brand a').length;
		// $('.brand').css('grid-template-columns', 'repeat('+brand+',1fr)');
		$('.criteria').click(function(event) {
			$('.sort').find('div').slideToggle(250)
		});
		
		$('.sort a').click(function(event) {
			$('.sort').find('div').slideToggle(250)
			$('.sort').find('div a.check').removeClass('check')
			$(this).addClass('check')
			sort = $(this).attr('data-id')
			$.post('ajax/sort', {sort: sort,group: group}, function(data) {
				$('.homeproduct').html(data)
			});
			timing();
			$('.dot').addClass('active')
			$('.viewmore').css('display', 'none');
			$('.brand').find('a.check').removeClass('check')
		});
		function delay(){
			$('.overlay').css('display','none')
		}
		function timing(){
			$('.overlay').css('display','block')
			setTimeout(delay,200)
		}
	});
</script>
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
		$('.homeproduct').addClass('laptop')
	});
</script>
<?php }  ?>
<a class="viewmore">Xem thêm 
	<span><?php echo ($data["num"]-10)?></span>
	<span><?php echo $data[$categ][0]["GroupProduct"]?></span>
</a>
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
			i+=1;
			$.post('ajax/load_product',{i:i,group:group},function(data){
				$('.homeproduct').append(data)
			})
			total = $('span:first-child',this).html()
			total-=10
			$('span:first-child',this).html(total)
			if($('span',this).html()<=0){
				$(this).css('display','none')
			}
		});
		url = window.location.pathname
		str = url.slice(9)
		str = '.'+str
		document.querySelector(str).classList.add('actmenu')
	});
</script>
