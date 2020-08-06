<header>
	<div class="wrap-main">
		<a href="/imobile" title="Về trang chủ iMobbile.com" class="logo">
			<i class="icon-logo"></i>
		</a>
		<form id="search-site" action="/imobile/search" method="post" accept-charset="utf-8" autocomplete="off">
			<input type="text" name="key" class="topinput" maxlength="50" placeholder="Bạn tìm gì..." id="search-keyword">
			<button class="btntop" type="submit" onclick="return validate()">
				<i class="icon-topsearch"></i>
			</button>
			<ul class="wrap-suggestion">
			</ul>
		</form>
		<script type="text/javascript">function validate(){if(document.getElementById("search-keyword").value==""){return false}else return true}</script>
		<nav>
	        <a href="/imobile/mobile" class="mobile" title="Điện thoại di động, smartphone">
	            <i class="icon-mobile"></i>Điện thoại
	        </a>
	        <a href="/imobile/laptop" class="laptop" title="Máy tính xách tay, Laptop">
	            <i class="icon-laptop"></i>Laptop
	        </a>
	        <a href="/imobile/tablet" class="tablet" title="Máy tính bảng, tablet">
	           	<i class="icon-tablet"></i>Tablet
	        </a>
            <a href="/imobile/cart" class="cart" title="Giỏ hàng">
                <i class="icon-cart"></i>Giỏ hàng
            </a>
            <a href="/imobile/history" class="history" title="Lịch sử mua hàng">
            Lịch sử<br>mua hàng
            </a>
	        <a href="/imobile/login" class="account" title="Đăng nhập">
	           	<i class="icon-account"></i> Đăng nhập
	        </a>
        </nav>
	</div>
</header>