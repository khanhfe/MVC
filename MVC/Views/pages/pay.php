<section>
	<div class="container">
		<div class="picsuccess">
            <div class="notistatus">
               	<i class="iconnoti iconsuccess"></i>Đặt hàng thành công
            </div>
        </div>
        <div class="thank">
        Cảm ơn <b><?php echo $_POST['gender'] ." ". $_POST['FullName'];  ?></b> đã cho iMobile.com cơ hội được phục vụ. Trước , nhân viên iMobile.com sẽ <b>gửi tin nhắn hoặc gọi điện </b>xác nhận đặt hàng tại siêu thị cho <?php echo $_POST['gender']; ?>
    	</div>
    	<div class="titlebill">Thông tin đặt hàng:</div>
    	<div class="infoorder">
			<div>Người nhận: <b><?php echo $_POST['FullName']; ?>,<?php echo $_POST['PhoneNumber']; ?></b></div>
			<div>Địa chỉ nhận hàng: <b><?php if($_POST['BillingAddress']==null){echo "Các siêu thị thuộc hệ thống trong khu vực: ";}; echo $_POST['BillingAddress'].", ".$_POST['ward'].", ".$_POST['district'].", ".$_POST['province']; ?></b></div>
			<div>Thời gian nhận hàng dự kiến: 
				<b> Trước <?php $currenttime = date('l, yy-m-d H:i:s');
					$date = new DateTime($currenttime);
					$date->add(new DateInterval('P1D'));
					echo $date->format('H')." giờ 00 phút "." Ngày mai ".$date->format('d/m'); ?>	
				</b>
			</div>
			<div>Tổng tiền: <strong><?php echo number_format($_POST['pay'],0,"","."); ?>₫</strong></div>
    	</div>
    	<div class="mess-payment" id="mess-payment">
		    <span>
		        Bạn đã chọn thanh toán : <b>Tiền mặt khi nhận hàng</b>
		    </span>
		</div>
    	<div class="choosepayment" id="choosepayment">
		    <div>
		        <h3>Chọn hình thức thanh toán:</h3>
		    </div>
		    <div class="clr"></div>
		    <div class="grid">
		        <a href="javascript:choosePayOffline()" class="payoffline">
		            <div>
		                <span>Tiền mặt khi nhận hàng</span>
		            </div>
		        </a>
		        <a href="javascript:void(0)" class="atm">
		            <div>
		                <span>
		                    Thanh toán thẻ
		                </span>
		                <img src="/MVC/public/img/icon/ATM2020.png" alt="Thanh toán qua thẻ ATM" width="30">
		            </div>
		            <p>(Có Internet Banking)</p>
		        </a>
		        <a href="javascript:void(0)" class="visa">
		            <div>
		                <span>Thanh toán thẻ </span>
		                <img src="/MVC/public/img/icon/Visa2020.png" alt="Thanh toán qua thẻ Visa, Master Card">
		                <img src="/MVC/public/img/icon/Master2020.png" alt="Thanh toán qua thẻ Visa, Master Card">
		                <img src="/MVC/public/img/icon/JCB2020.png" alt="Thanh toán qua thẻ Visa, Master Card">
		            </div>
		        </a>
		        <a href="javascript:void(0)" class="qr-code" >
		            <div>
		                <span>Thanh toán qua QR Code</span>
		                <img src="/MVC/public/img/icon/logo-vnp@2x.png" alt="Thanh toán qua Qr-Code Vnpay" height="36">
		            </div>
		        </a>
		    </div>
		</div>
		<div class="deleteOrder">
            <a href="javascript:cancel()">Hủy đơn hàng</a>
        </div>
        <div class="callship">Khi cần hỗ trợ vui lòng gọi
        	<a href="tel:18001060">1800.1060</a> (7h30 - 22h)
            <div class="link-csht">
                <a href="javascript:void(0)">Tham khảo chính sách hoàn tiền khi thanh toán online</a>
            </div>
    	</div>
    	<div class="titlebill">Sản phẩm đã mua:</div>
    	<ul class="list_order">
    		<?php $i=0; foreach($_SESSION['cart'] as $cart) { ?>
			<li>
				<div class="colimg">
					<a href="<?php echo '/MVC/'.$cart['folder'].'/detail/'.$cart['id'] ?>">
						<img src="<?php echo '/MVC/public/'.$cart['image'] ?>">
					</a>
				</div>
				<div class="colinfo">
    				<strong><?php echo number_format($cart['pricecurrent'],0,"","."); ?>₫</strong>
    				<a href="<?php echo '/MVC/'.$cart['folder'].'/detail/'.$cart['id'] ?>"><?php echo $cart['name']; ?></a>
    				<div class="onecolor">
                        <span>Màu:</span> <?php echo $cart['color'] = $_POST['color'][$i]; ?>                         
                    </div>
                    <div class="quan">
                        <span>Số lượng:</span><?php echo $cart['quantity'] = $_POST['amount'][$i];$i++ ?>
                    </div>
                    <div class="clr"></div>
    				<div class="promotion  webnote ">
						<span class="notnull"><?php echo $cart['promo1']; ?></span>
					    <span class="notnull"><?php echo $cart['promo2']; ?></span>
					    <span class="notnull"><?php echo $cart['promo3']; ?></span>
					    <span class="notnull"><?php echo $cart['promo4']; ?></span>
					</div>
				</div>
			</li>
			<?php } ?>
		</ul>
    	<a href="add_database.php" class="buyother">Về trang chủ</a>
	</div>
</section>
<div class="popup" id="popup">
	<div>
		<h1>Hủy đơn hàng</h1>
		<p>Bạn có muốn hủy đơn hàng này ?</p>
		<p class="p1">Lưu ý: quà khuyến mãi có thể thay đổi theo thời điểm đặt hàng.</p>
		<a class="close" href="javascript:close()">Đóng</a>
		<a class="confirm" href="javascript:Success()">xác nhận hủy</a>
	</div>
</div>
<div class="popup" id="popup-success">
	<div>
		<h1>Hủy đơn hàng</h1>
		<p>Đơn hàng đã được hủy thành công!</p>
		<p>Sẽ tự động đóng trong : <b id="time">5</b> s</p>
		<a class="close" href="javascript:Redirect()">Đóng</a>
	</div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
	var notnull = document.querySelectorAll('.promotion span')
	for (var i = 0; i < notnull.length; i++) {
		if(notnull[i].innerHTML.trim()==='') notnull[i].classList.remove('notnull')
	}
	function choosePayOffline(){
		document.getElementById('choosepayment').style.display = "none"
		document.getElementById('mess-payment').style.display = "block"
		document.querySelector('.deleteOrder').style.display = "none"
	}
	function cancel(){
		document.getElementById('popup').style.display = 'flex'
	}
	function close(){
		document.getElementById('popup').style.display = 'none'	
	}
	function Success(){
		close();
		document.getElementById('popup-success').style.display = 'flex'
		var realtime = document.getElementById('time').innerHTML;
		parseInt(realtime);
		var pause = setInterval(runtime,1000)
		function runtime(){
			realtime-=1;
			document.getElementById('time').innerHTML = realtime;
			if (realtime==0) { window.location = "/mvc/pay/cancel"; clearInterval(pause) }
		}
	}
	function Redirect(){
		window.location="/mvc/pay/cancel";
	}
</script>
