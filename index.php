<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:: 서울동물원 ::</title>
<link rel="stylesheet" type="text/css" href="/lib/css/common.css">
<link rel="stylesheet" type="text/css" href="/lib/css/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/lib/js/jquery/jquery-ui-1.11.4/themes/redmond/jquery-ui.css">
<script src="/lib/js/jquery/jquery-1.11.2.js"></script>
<script src="/lib/js/jquery/jquery-ui-1.11.4/jquery-ui.js"></script>
<script src="/lib/js/common.js"></script>
</head>

<body>
<header>
	<div id="header_center">
        <div id="logo">
            <a href="/"><img src="image/logo.jpg" alt="logo" title="logo" style="width:200px; height:90px;"></a>
        </div>
        
        <div id="menu">
        	<span id="" onclick="location.href='/'"><i class="glyphicon glyphicon-home"></i>　처음으로</span>
            <span id="" onClick="login();"><i class="glyphicon glyphicon-user"></i>　로그인</span>
            <span id="" onclick="location.href='/join.php'"><i class="glyphicon glyphicon-plus"></i>　회원가입</span>
            <span id="" onclick="location.href='/'"><i class="glyphicon glyphicon-th-list"></i>　동물탐색기</span>
        </div>
    </div>
</header>

<nav>
	<div id="login" title="로그인">
    <h3 style="text-align:center;">로그인</h3><br>
    	<form method="post" action="login.php">
        	<input type="text" name="" id="" placeholder="ID" class="form-control" style="margin-bottom:10px;">
            <input type="password" name="" id="" placeholder="********" class="form-control" style="margin-bottom:10px;">
        	<input type="submit" value="로그인" id="" class="btn btn-primary" style="width:100%">
        </form>
    </div>
	<div id="nav_center">
    <img src="image/bg1.jpg" style="float:left; width:100%; height:300px;" alt="banner" title="banner">
    <h2>동물탐색기</h2>
    <h5>※ 동물들을 클릭하여 자세한 정보를 볼 수 있습니다!</h5>
        <table id="table" class="table table-hover" style="text-align:center; margin-top:30px;">
            <thead>
                <tr>
                    <th style="width:200px;"></th>
                    <th id="1">포유류</th>
                    <th id="2">파충류</th>
                    <th id="3">어류</th>
                    <th id="4">조류</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>제1관람관</td>
                    <td data-no="1"></td>
                    <td data-no="2"></td>
                    <td data-no="3"></td>
                    <td data-no="4"></td>
                </tr>
                <tr>
                    <td>제2관람관</td>
                    <td data-no="1"></td>
                    <td data-no="2"></td>
                    <td data-no="3"></td>
                    <td data-no="4"></td>
                </tr>
                <tr>
                    <td>제3관람관</td>
                    <td data-no="1"></td>
                    <td data-no="2"></td>
                    <td data-no="3"></td>
                    <td data-no="4"></td>
                </tr>
                <tr>
                    <td>제4관람관</td>
                    <td data-no="1"></td>
                    <td data-no="2"></td>
                    <td data-no="3"></td>
                    <td data-no="4"></td>
                </tr>
            </tbody>
        </table>
    </div>
</nav>

<footer>
	Copiright ⓒ Seoul zoo Company All Right Reserve.
</footer>
</body>
</html>
