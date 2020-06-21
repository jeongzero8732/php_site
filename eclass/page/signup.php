<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
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
			<?php include($_SERVER["DOCUMENT_ROOT"].'/include/header.php');?>
			</div>
			<!-- header -->
			<div id="contents-sign">
				<div id="cont-nav">
				<?php include($_SERVER["DOCUMENT_ROOT"].'/include/nav.php');?>
				</div>
				<div id="sign">
		        <br><br>
		        
		        <div style="text-align:center;">
		        	<font size="6" color="gray">회원가입</font>
		        </div>
		        <br><br>
		        <form action="/jungjaeho_free/UserServlet" method="post" name="signup">
		            <table class="sign-table">
		                <tr>
		                    <td id="title">아이디</td> 
		                    <td>
		                        <input type="text" name="id" maxlength="20" required> 
		                    </td>
		                </tr>
		                        
		                <tr>
		                    <td id="title">비밀번호</td> 
		                    <td>
		                        <input type="password" name="password" maxlength="15" required>
		                    </td>
		                </tr>
		                    
		                <tr>
		                    <td id="title">이름</td>
		                    <td>
		                        <input type="text" name="name" maxlength="40" required>
		                    </td>
		                </tr>
		                    
		                <tr>
		                    <td id="title">성별</td>
		                    <td>
		                        <input type="radio" name="gender" value="남" checked>남
		                        <input type="radio" name="gender" value="여" checked>여
		                    </td>
		                </tr>
		                    
		                <tr>
		                    <td id="title">생일</td>
		                    <td>
		                        <input type="text" name="birth" maxlength="6" placeholder="000000" size="6" >		                
		                    </td>
		                </tr>
		                    
		                <tr>
		                    <td id="title">이메일</td>
		                    <td>
		                        <input type="text" name="email" maxlength="30">@
		                        <select name="email_2">
		                            <option>naver.com</option>
		                            <option>daum.net</option>
		                            <option>gmail.com</option>
		                            <option>nate.com</option>                        
		                        </select>
		                    </td>
		                </tr>
		            </table>
		            <br>
		             
		             <div class="reset_sign" style="text-align:center;">
			           	 <input type="submit" name="key" value="ok"/>
			           	 <input type="reset" value="cancel">
		            </div>
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