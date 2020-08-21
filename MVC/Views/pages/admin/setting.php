<div class="dataTable">
	<div class="noti">
		<div class="error"></div>
		<?php if (isset($data['error'])) {?>
			<div class="text-danger">
				<?php echo $data['error']; ?>
			</div>
		<?php }if (isset($data['success'])) { ?>
			<div class="text-success">
				<?php echo $data['success']; ?>
			</div>	
		<?php } ?>
	</div>
	<form action="/imobile/admin/editprofile" method="post">
		<div class="typing">
			<h1 class="text-primary">Cài đặt tài khoản chung</h1>
			<?php foreach ($data['profile'] as $profile) {?>
	        <div class="border">
	            <div>Họ và tên:</div>
	            <div>
	            	<input type="text" name="Name" value="<?php echo $profile['FirstName'].$profile['LastName']?>">
	            	<div>
	            		<a href="javascript:void(0)">Thay đổi</a>
	            	</div>
	            </div>
	        </div>
	        <div>
	            <div>Ngày sinh:</div>
	            <div>
	            	<input type="text" name="Birthday" value="<?php echo $profile['Birthday']?>">
	            	<div>
	            		<a href="javascript:void(0)">Thay đổi</a>
	            	</div>
	            </div>
	        </div>
	        <div>
	            <div>Số điện thoại:</div>
	            <div>
	            	<input type="text" name="PhoneNumber" value="<?php echo $profile['PhoneNumber']?>">
	            	<div>
	            		<a href="javascript:void(0)">Thay đổi</a>
	            	</div>
	            </div>
	        </div>
	        <div>
	            <div>Email:</div>
	            <div>
	            	<input type="text" name="Email" value="<?php echo $profile['Email']?>">
	            	<div>
	            		<a href="javascript:void(0)">Thay đổi</a>
	            	</div>
	            </div>
	        </div>
	        <div>
	            <div>Tài khoản:</div>
	            <div>
	            	<input type="text" name="username" value="<?php echo $profile['username']?>">
	            </div>
	        </div>
	        <div>
	            <div>Mật khẩu:</div>
	            <div>
	            	<input type="text"id="oldpass" name="oldpass" placeholder="Mật khẩu hiện tại" value="*******">
	            	<input type="hidden"id="newpass" name="newpass" placeholder="Mật khẩu mới">
	            	<input type="hidden"id="repass" name="repass" placeholder="Nhập lại mật khẩu mới">
	            	<a class="hidden forgotpass" href="/imobile/login/lostpass">Bạn quên mật khẩu?</a>
	            	<input class="hidden" type="submit" name="resetpass" value="Lưu thay đổi" onclick="return validate()">
	            	<div>
	            		<a href="javascript:void(0)">Thay đổi</a>
	            	</div>
	            </div>
	        </div>
	    	<?php } ?>
	    </div>
	</form>
</div>
<style type="text/css" media="screen">
	.hidden{
		display: none!important;
	}
    .noti{
        text-align: center;
        font-size: 1.5rem;
        font-weight: lighter;
        margin-bottom: 1rem
    }
    .typing{
        margin-bottom: 1rem;
        border: 1px dashed #ccc;
        width:100%;
        max-width: 800px;
        margin: auto;
        line-height: 1.5;
        text-align: center;
        padding: 2rem;
    }h1{
        line-height: 2
    }
    .border{
    	border-top: 1px solid #dadada;
    }
    .typing>div{
        display: grid;
        grid-template-columns: 1fr 3fr;
        align-items: center;
        text-align: left;
        background: #fff;
        padding: 1rem 0.5rem;
        border-bottom: 1px solid #dadada;
    }
    .typing input{
    	font-size: 1rem;
    	color: #90949c;
        padding: 0.7rem;
        width: 75%;
        background: #fff;
        border: 1px solid #fff;
        border-radius: 0.25rem;
    }
    input:focus{
    	outline: none;
    	color: #000;
		border: 1px solid rgba(53, 120, 229);
		box-shadow:0px 0px 0px 3px inset rgba(53, 120, 229, 0.2);
    }
    .typing>div>div:nth-child(2)>div{
    	display: inline-block;
    	margin-left: 55px
    }
    .typing>div>div:nth-child(2)>div>a{
    	text-align: right;
    	color: #365899;
    }
    .typing>div>div:nth-child(2)>div>a:hover{
    	text-decoration: underline
    }
    input[type="submit"]{
     	cursor: pointer
    }
</style>
<script>
	jQuery(document).ready(function($) {
		$('input').attr('disabled', 'disabled');
		$('.forgotpass').css({
			'display': 'block',
			'width': '75%',
			'color': '#216fdb',
			'font-size': '12px'
		});
		$('.typing>div>div:nth-child(2)>div>a').click(function(event) {
			$(this).html('Đóng')
			$(this).css({
				'display': 'block',
				'padding': '0.5rem',
				'border': '1px solid #ccd0d5',
				'border-radius': '0.25rem',
				'background': '#fff',
				'color': '#4b4f56'
			});
			$(this).parents('div').siblings('input').removeAttr('disabled')
			$(this).parents('div').siblings('input,a').removeClass('hidden')
			$(this).parents('div').siblings('input[type="hidden"]').attr('type','password')
			$(this).parents('div').siblings('input[name="oldpass"]').attr('type', 'password');
			$(this).parents('div').siblings('input[name="oldpass"]').val('')
			$(this).parents('div').siblings('input[type="password"]').css('margin-bottom', '1rem');
			$(this).parents('div').siblings('input').css({
				'border-color': 'rgb(204, 208, 213)',
				'background': '#fff',
				'color': '#000'
			});
			$('input[type="submit"]').css({
				'border-color': '#b0d5ff',
				'width': 'fit-content',
				'background': '#b0d5ff',
				'color': '#fff'
			});
			$('#repass').keyup(function(event) {
				if ($('#newpass').val() == $('#repass').val()) {
					$('input[type="submit"]').css({
						'background': '#1877f2',
						'border-color': '#1877f2'
					});
				}else {
					$('input[type="submit"]').css({
						'border-color': '#b0d5ff',
						'background': '#b0d5ff'
					});
				}
			});
			$('input[type="submit"]').hover(function() {
				
			}, function() {
				$('input[type="submit"]').css({
					'border-color': '#b0d5ff',
					'background': '#b0d5ff'
				});
			});
			$(this).closest('.typing>div').css({
				'background': '#f2f2f2',
				'align-items': 'baseline'
			});

		});
		$('input').focus(function(event) {
			$(this).css('border-color', 'rgb(53, 120, 229)')
		})
		$('input').focusout(function(event) {
			$(this).css('border-color', 'rgb(204, 208, 213)')
		})
	});
	function validate() {
		newpass = document.getElementById('newpass').value
		repass = document.getElementById('repass').value
		
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
		}else return true
	}
</script>