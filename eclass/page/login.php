
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			
			<!-- Base css -->
			<link rel="stylesheet" href="/css/normalize.css"> 
			<link rel="stylesheet" href="/css/reset.css"> 
			
			<!-- page css -->
			<link rel="stylesheet" href="/css/index.css">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

			<title>이클립스 개인 페이지</title>
	</head>
	<body>
		<div id="wrap">
			<div id="header">
			<?php
					include($_SERVER["DOCUMENT_ROOT"].'/include/header.php');
				?>
			</div>
			<!-- header -->
			<div id="contents-log">
				<div id="cont-nav">
					<div class="container">
					<?php include($_SERVER["DOCUMENT_ROOT"].'/include/nav.php');?>
					</div>
				</div>
			
				<div id="cont-log">
					<form action="/jungjaeho_free/UserServlet" id="login-form" method="POST">
	                    <label class="legend">아이디</label>
	                    <input name="userid" type="text" required>
	                    <label class="legend">패스워드</label> 
	                    <input name="passwprd" type="password" required> 
	                    <input type="submit" name="key" value="login">
	                    <a class="legend" style="float:right;" href="/page/signup.php">회원가입</a>
       			  </form>
				</div>
			</div>	
			<!-- contents -->
			<div id="footer">
			<?php include($_SERVER["DOCUMENT_ROOT"].'/include/footer.html');?>
			</div>
		</div>
		<!-- wrap -->
    	<script type="text/javascript" src="js/imgslide.js"></script>
	</body>
</html>