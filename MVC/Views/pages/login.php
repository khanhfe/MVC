<div class="container">
	<div class="left">
		
	</div>
	<div class="right">
		<div class="form">
			<div class="tit">
				<h3>Đăng nhập</h3><br>
				<img src="public/img/icon/account.jpg" height="45">
			</div>
			<div class="error"><?php if(isset($_SESSION['error'])) echo $_SESSION['error'];?></div>
			<form action="check.php" method="post" >
				<div class="user">
					<input class="input check" type="text" name="username" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>" placeholder="Tài khoản">	
				</div>
				<div class="pass">
					<input class="input check" type="password" name="password" value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password']; ?>" placeholder="Mật khẩu">
					<div class="togglepass">Ẩn/Hiện</div>	
				</div>
				<div class="remember_forgot">
					<label><input type="checkbox" name="remember" value="save"> Ghi nhớ đăng nhập</label>
					<a href="#" title="">Quên mật khẩu?</a>
				</div>
				<div class="btn-submit">
					<input class="input" type="submit" name="submit" value="Đăng nhập" disabled>
				</div>
			</form>
			<div class="note">Hiện tại hệ thống chưa có chức năng đăng nhập và tạo tài khoản dành cho người dùng!
				<a href="../MVC" title="">Quay lại trang chủ</a></div>
		</div>
	</div>
</div>