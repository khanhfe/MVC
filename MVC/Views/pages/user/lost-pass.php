<div class="container">
	<div class="main">
		<div class="form">
			<div class="tit">
				<h3>Đặt lại mật khẩu</h3>
			</div>
			<div class="error"><?php if(isset($data['error'])) echo $data['error'];?></div>
			<div class="success"><?php if(isset($data['success'])){ echo $data['success'];?><a href="/imobile/login" title="">Quay lại</a><?php } ?></div>
			<form action="login/repass" method="post">
				<div class="first">
					<div class="matop">
						<input class="check" value="<?php echo !empty($_SESSION['username'])?$_SESSION['username']:'' ?>" type="text" name="username" placeholder="Tài khoản">	
					</div>
					<div class="matop">
						<input class="check" type="text" name="email" placeholder="Email hoặc số điện thoại">	
					</div>
					<div class="matop">
						<div id="note">Mật khẩu ít nhất 8 ký tự, phân biệt chữ hoa</div>
						<input class="check" type="password" name="newpass" placeholder="Mật khẩu mới" id="newpass">
					</div>
					<div class="matop">
						<input class="check" type="password" name="repass" placeholder="Nhập lại mật khẩu mới" id="repass">
						<div id="tick"></div>
					</div>
					<div class="matop btn">
						<input type="submit" value="Gửi" name="submit" onclick="return validate()">
					</div>
				</div>
			</form>
			<div class="note">
				<a href="/imobile/login">Quay lại</a>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function($) {
		if ($('.error').html()!='') {
			$('.error').css('padding-top', '1rem');
		}
		if ($('.success').html()!='') {
			$('.success').css('padding-top', '1rem');
		}
		$('#repass').keyup(function(event) {
			$(this).parents('.matop').css('position', 'relative')
			if ($(this).val() == $('#newpass').val()) {
				$(this).siblings('div').addClass('tick')
			}else {
				$(this).siblings('div').removeClass('tick')
			}
		});
		if ($('#repass').val() != $('#newpass').val()){
			$(this).siblings('div').removeClass('tick')
		}
	});
	function validate() {
		newpass = document.getElementById('newpass').value
		repass = document.querySelector('#repass').value
		
		if (newpass == '') {
			document.querySelector('.error').style.margin = '1rem 0';
			document.querySelector('.error').innerHTML='Mật khẩu không được để trống!'
			return false;
		}if (repass == '') {
			document.querySelector('.error').style.margin = '1rem 0';
			document.querySelector('.error').innerHTML='Mật khẩu nhập lại không được để trống!'
			return false;
		}if (newpass != repass) {
			document.querySelector('.error').style.margin = '1rem 0';
			document.querySelector('.error').innerHTML='Mật khẩu nhập lại không khớp!'
			return false;
		}
		else return true
	}
</script>
