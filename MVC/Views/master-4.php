<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost:8080/imobile/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản trị hệ thống website iMobile</title>
	<link href="public/img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="public/css/admin.css">
	<script src="public/js/jquery-2.2.4.min.js"></script>
</head>
<body>
	<nav>
		<div>
			<a href="index.php" title="">Welcome</a>
			<button>
				<div></div>
				<div></div>
				<div></div>
			</button>
		</div>
		<ul>
			<li>
				<a href="javascript:" class="dropdown-toggle user">
					<svg class="svg-user" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
				</a>
				<div class="dropdown-menu " aria-labelledby="userDropdown">
	                <a class="dropdown-item" href="#">Cài đặt</a>
	                <a class="dropdown-item" href="#">Hoạt động đăng nhập</a>
	                <div class="dropdown-divider"></div>
	                <a class="dropdown-item" href="/imobile/login">Đăng xuất</a>
	            </div>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav"></div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container">
					<h1>Dashboard</h1>
					<?php require_once 'pages/'.$data['page'].'.php'; ?>
				</div>
			</main>
		</div>
	</div>
	<footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright © iMobile 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    ·
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
	<script>
		jQuery(document).ready(function($) {
			$('a.user').click(function(event) {
				$('.dropdown-menu').toggleClass('show');
			});
		});
	</script>
</body>
</html>