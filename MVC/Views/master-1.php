<!DOCTYPE html>
<html>
<head>
	<base href="index.php">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iMobile.com - Điện thoại, Tablet, Laptop chính hãng</title>
	<link rel="stylesheet" href="http://localhost:8080/MVC/public/css/header.css">
	<link rel="stylesheet" href="http://localhost:8080/MVC/public/css/footer.css">
	<script src="http://localhost:8080/MVC/public/js/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8"></script>
	<?php if ($data['page'] !='detail') { ?>
	<link rel="stylesheet" href="http://localhost:8080/MVC/public/css/style.css">
	<?php } ?>
</head>
<body>
	<?php require_once 'blocks/header.php'; ?>
	<section>
		<?php require_once 'pages/'.$data['page'].'.php'; ?>
	</section>
	<?php require_once 'blocks/footer.php'; ?>
	<?php if ($data['page'] =='home') { ?>
	<script src="http://localhost:8080/MVC/public/js/carousel.js" type="text/javascript"></script>
	<?php } ?>
	<script src="http://localhost:8080/MVC/public/js/searching.js" type="text/javascript"></script>
</body>
</html>