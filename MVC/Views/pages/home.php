<aside class="homebanner">
	<div class="owl-carousel" id="sync1" onmouseover="clickable()" onmouseout="clickdisable()">
		<div class="owl-wrapper-out">
			<div class="owl-wrapper">
				<?php $banner = $data["banner"];foreach ($banner as $item) { ?>
				<div class="owl-item">
					<div class="item">
						<a href="" title="">
							<img src="public/<?php echo $item['image'] ?>" alt="">
						</a>
					</div>
				</div><?php } ?>
			</div>
		</div>
		<div class="owl-control">
			<div class="owl-buttons">
				<div class="owl-prev">‹</div>
				<div class="owl-next">›</div>
			</div>
		</div>
	</div>
	<div id="sync2" class="owl-carousel">
        <div class="owl-wrapper-outer">
           	<div class="owl-wrapper">
            	<?php foreach ($banner as $item) { ?>
            	<div class="owl-item" >
            		<div class="item">
                		<h3><?php echo $item['content']; ?></h3>
                	</div>
                </div> <?php } ?>
            </div>
        </div>            
    </div>			
</aside>
<aside class="homenews">
	<figure>
    	<h2><a href="#">Tin công nghệ</a></h2>
    	<b></b>
       	<a id="b_35866" title="Vina TẶNG 20% giá trị nạp thẻ - 24/06" href="#" class="liveevent card" rel="noopener"><span id="dot"><span class="ping"></span></span><span class="text"><strong>Vina TẶNG 20%</strong> giá trị thẻ nạp - 17/07</span></a>
    </figure>
    <ul>
        <li>
            <a href="">
                <img width="100" height="70" src="public/img/news/honor-30_800x451-100x100.jpg">
                <h3>Huawei Enjoy 20s lộ gần như toàn bộ thông số cấu hình: Chip Dimensity 800, bộ 3 camera sau 64MP, viên pin 4.300mAh</h3>
                <span>8 giờ trước</span>
            </a>
        </li>
    </ul>
    <div class="twobanner ">
	    <a aria-label="slide" href="">
	        <img style="cursor:pointer" src="public/img/banner/A31-398-110-398x110.png" alt="A21s" width="398" height="110">
	    </a>
		<a aria-label="slide" href="">
			<img style="cursor:pointer" src="public/img/banner/398-110copy-398x110.png" width="398" height="110">
		</a>    
	</div>
</aside>
<div class="clr"></div>
<div class="">
	<div class="navigat">
		<h2>10 Điện thoại hot nhất</h2>
	</div>
	<div class="owl-carousel product">
		<div class="owl-wrapper-out">
			<div class="owl-wrapper">
				<?php $mobile = $data["Mobile"]; foreach ($mobile as $item) {?>
				<div class="owl-item">
					<div class="item">
						<a href="<?php echo $item['folder']."/detail/".$item['ProductId'] ?>">
							<img src="public/<?php echo $item['ProductImage'] ?>" width="180">	
							<h5><?php echo $item['ProductName']; ?></h5>
							<div class="price">
								<strong><?php if($item['PricePromo']==0) echo number_format($item['PriceCurrent'],0,"","."); else echo number_format($item['PricePromo'],0,"","."); ?>₫</strong>
								<span><?php  if($item['PricePromo']!=0) echo number_format($item['PriceCurrent'],0,"",".") .'₫'; ?></span>
							</div>
							<div class="promo">
								<?php echo $item['Promo1'] ?>
							</div>
							<?php if($item['PricePromo'] != 0){ ?>
							<label class="discount">GIẢM <?php echo number_format($item['PriceCurrent']-$item['PricePromo'],0,"",".").'₫'?> </label>
							<?php }?>
						</a>
					</div>
				</div> <?php } ?>
			</div>	
		</div>
		<div class="control">					
			<div class="btn prev">‹</div>
			<div class="btn next">›</div>
		</div>
	</div>
</div>
<div class="navigat">
	<h2>Laptop nổi bật</h2>
	<div class="viewcat">
		<a href="laptop">Xem tất cả laptop</a>
	</div>
</div>
<div class="clr"></div>
<ul class="homeproduct laptop">
	<?php $Laptop = $data["Laptop"]; foreach ($Laptop as $item) { ?>
	<li class="item">
		<a href="<?php echo $item['folder']."/detail/".$item['ProductId'] ?>">
			<img src="public/<?php echo $item['ProductImage'];?>" >
			<h3><?php echo $item['ProductName']; ?></h3>
			<div class="price">
				<strong><?php if($item['PricePromo']==0) echo number_format($item['PriceCurrent'],0,"","."); else echo number_format($item['PricePromo'],0,"","."); ?>₫</strong>
				<span><?php  if($item['PricePromo']!=0) echo number_format($item['PriceCurrent'],0,"",".") .'₫'; ?></span>
			</div>
			<div class="promo"><?php echo $item['Promo1'] ?></div>
			<?php if($item['PricePromo'] != 0){ ?>
			<label class="discount">GIẢM <?php echo floor((($item['PriceCurrent']-$item['PricePromo'])/$item['PriceCurrent'])*100).'%';?> </label>
				<?php } ?>
		</a>
	</li>
	<?php } ?>
</ul>
<div class="navigat">
	<h2>Máy tính bảng nổi bật</h2>
	<div class="viewcat">
		<a href="tablet">Xem tất cả máy tính bảng</a>
	</div>
</div>
<div class="clr"></div>
<ul class="homeproduct tablet">
	<?php $Tablet = $data["Tablet"]; foreach ($Tablet as $item) { ?>
	<li class="item">
		<a href="<?php echo $item['folder']."/detail/".$item['ProductId'] ?>">
			<img src="public/<?php echo $item['ProductImage'];?>" >
			<h3><?php echo $item['ProductName']; ?></h3>
			<div class="price">
				<strong>
					<?php if($item['PricePromo']==0) echo number_format($item['PriceCurrent'],0,"","."); else echo number_format($item['PricePromo'],0,"","."); ?>₫
				</strong>
				<span>
					<?php  if($item['PricePromo']!=0) echo number_format($item['PriceCurrent'],0,"",".") .'₫'; ?>
				</span>
			</div>
			<div class="promo"><?php echo $item['Promo1'] ?></div>
			<?php if($item['PricePromo'] != 0){ ?>
			<label class="discount">GIẢM <?php echo number_format($item['PriceCurrent']-$item['PricePromo'],0,"",".").'₫'?> </label>
				<?php } ?>
		</a>
	</li>
	<?php } ?>
</ul>