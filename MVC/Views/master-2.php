<!DOCTYPE html>
<html>
<head>
	<base href="index.php">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iMobile.com - Điện thoại, Tablet, Laptop chính hãng</title>
	<link rel="stylesheet" href="http://localhost:8080/MVC/public/css/header.css">
	<link rel="stylesheet" href="http://localhost:8080/MVC/public/css/cart.css">
	<script src="http://localhost:8080/MVC/public/js/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<?php require_once 'blocks/header.php'; ?>
	<?php require_once 'pages/'.$data['page'].'.php'; ?>
	<script src="http://localhost:8080/MVC/public/js/searching.js" type="text/javascript"></script>
</body>
</html>