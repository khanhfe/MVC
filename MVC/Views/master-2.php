<!DOCTYPE html>
<html>
<head>
	<base href="index.php">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iMobile.com - Điện thoại, Tablet, Laptop chính hãng</title>
	<link href="/MVC/public/img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="/MVC/public/css/header.css">
	<link rel="stylesheet" href="/MVC/public/css/<?php echo($data['page']) ?>.css">
	<script src="/MVC/public/js/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<?php require_once 'blocks/header.php'; ?>
	<?php require_once 'pages/'.$data['page'].'.php'; ?>
	<script src="/MVC/public/js/searching.js" type="text/javascript"></script>
</body>
</html>