<!DOCTYPE html>
<html>
<head>
	<base href="http://localhost:8080/imobile/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iMobile.com - Điện thoại, Tablet, Laptop chính hãng</title>
	<link href="public/img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="public/css/header.min.css">
	<link rel="stylesheet" href="public/css/footer.min.css">
	<script src="public/js/jquery-2.2.4.min.js"></script>
	<?php if ($data['page'] !='detail') { ?>
	<link rel="stylesheet" href="public/css/style.min.css">
	<?php } ?>
</head>
<body>
	<?php require_once 'blocks/header.php'; ?>
	<section>
	<?php require_once 'pages/user/'.$data['page'].'.php'; ?>
	</section>
	<?php require_once 'blocks/footer.php'; ?>
	<?php if ($data['page'] =='home') { ?>
	<script src="public/js/carousel.min.js"></script>
	<?php } ?>
	<script src="public/js/searching.min.js"></script>
</body>
</html>