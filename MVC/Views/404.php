<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lỗi 404</title>
	<link href="/imobile/public/img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<style type="text/css" media="screen">
		body, input, button, option, textarea, label, legend, h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
		    font: 14px/18px Helvetica, Arial, 'DejaVu Sans', 'Liberation Sans', Freesans, sans-serif;
		    color: #333;
		    outline: none;
		    background-color: #f1c40f;
		}
		[class^="iconerror-"], [class*="iconerror-"] {
		    background: transparent url(/MVC/public/img/icon/icon-404.png);
		    background-repeat: no-repeat;
		    display: inline-block;
		    height: 30px;
		    width: 30px;
		    line-height: 30px;
		    vertical-align: middle;
		}
		.errorswrap {
		    width: 978px;
		    overflow: hidden;
		    margin: 15px auto;
		    font-size: 13px;
		    color: #333;
		    line-height: 18px;
		    text-align: center;
		}.errorswrap h1 {
		    font-size: 25px;
		    font-weight: bold;
		    text-transform: uppercase;
		    line-height: 40px;
		}#search-site {
		    float: none;
		    width: 300px;
		    height: 50px;
		    margin: 8px auto;
		    background: #f8f9fb;
		    position: relative;
		    border-radius: 5px;
		}.topinput {
		    float: left;
		    width: 250px;
		    border: 0;
		    position: relative;
		    background: #f8f9fb;
		    height: 48px;
		    text-indent: 10px;
		    font-size: 18px;
		    border-radius: 5px;
		}.btntop {
		    float: right;
		    width: 46px;
		    height: 50px;
		    border: 0;
		    background: none;
		}.iconerror-topsearch {
		    background-position: -152px 4px;
		    width: 40px;
		    height: 48px;
		}.errorswrap .iconlink {
		    width: 300px;
		    height: 120px;
		    margin: 0px auto;
		}.errorswrap .iconlink .error {
		    width: 130px;
		    float: left;
		    cursor: pointer;
		}.iconerror-home {
		    background-position: 4px 0px;
		    width: 80px;
		    height: 80px;
		    margin: 7px 8px 0 7px;
		}
		.iconerror-contact {
		    background-position: -76px 0px;
		    width: 76px;
		    height: 80px;
		    margin: 7px 8px 0 7px;
		}.errorswrap .iconlink .error span {
		    color: #fff;
		    font-size: 16px;
		    display: block;
		    width: 130px;
		}
	</style>
</head>
<body>
	<div class="errorswrap">
        <h1>Rất tiếc, trang bạn tìm kiếm không tồn tại</h1>
        <form id="search-site" action="/MVC/search" method="post" accept-charset="utf-8" autocomplete="off">
            <input class="topinput" type="text" id="search-keyword" name="key" placeholder="Tìm kiếm" >
            <button class="btntop" type="submit" onclick="return validate()"><i class="iconerror-topsearch"></i></button>
        </form>
        <script type="text/javascript">function validate(){if(document.getElementById("search-keyword").value==""){return false}else return true}</script>
        <p class="or">Hoặc</p>
        <div class="iconlink">
            <a href="/MVC" style="float: left">
                <div class="error">
                    <i class="iconerror-home"></i>
                    <span>Về trang chủ</span>
                </div>
            </a>
            <a href="/MVC" style="float: right">
                <div class="error">
                    <i class="iconerror-contact"></i>
                    <span>Báo lỗi</span>
                </div>
            </a>
        </div>
        <p class="or">Nếu bạn cần hỗ trợ, vui lòng liên hệ tổng đài <b>1800.2020</b> hoặc <b>024.2020</b></p>
    </div>
</body>
</html>