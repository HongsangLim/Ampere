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
            <span id="" onClick="login()"><i class="glyphicon glyphicon-user"></i>　로그인</span>
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
        <h2>회원가입</h2>
        <h5>※ 회원가입 정보를 정확하게 기입하여 주십시오!</h5>
        
        <div id="join">
            <form method="post" action="join_ok.php" name="" id="">
                <table class="table">
                    <tr>
                        <td>이름</td>
                        <td><input type="text" name="" id="" class="form-control"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width:150px;">아이디</td>
                        <td><input type="text" name="" id="" class="form-control"></td>
                        <td><input type="text" id="" placeholder="5글자 이상" readonly></td>
                    </tr>
                    <tr>
                        <td style="width:150px;">비밀번호</td>
                        <td><input type="password" name="" id="" class="form-control"></td>
                        <td><input type="text" id="" placeholder="8자리이상 특수문자 포함" readonly></td>
                    </tr>
                    <tr>
                        <td style="width:150px;">이메일</td>
                        <td><input type="text" name="" id="" class="form-control"></td>
                        <td><input type="text" id="" placeholder="이메일 형식 준수" readonly></td>
                    </tr>
                    <tr>
                        <td style="width:150px;">전화번호</td>
                        <td><input type="text" name="" id="" class="form-control"></td>
                        <td><input type="text" value="('-') 빼고" disabled></td>
                    </tr>
                </table>
                
                <input type="button" value="가입완료" class="btn btn-success">
            </form>
        </div>
    </div>
</nav>

<footer>
	Copiright ⓒ Seoul zoo Company All Right Reserve.
</footer>
</body>
</html>
