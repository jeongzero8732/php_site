<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			
			<!-- Base css -->
			<link rel="stylesheet" href="${pageContext.request.contextPath}/css/normalize.css"> 
			<link rel="stylesheet" href="${pageContext.request.contextPath}/css/reset.css"> 
			
			<!-- page css -->
			<link rel="stylesheet" href="${pageContext.request.contextPath}/css/index.css">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

			<title>이클립스 개인 페이지</title>
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<%@ include file="../include/header.jsp" %>
			</div>
			<!-- header -->
			<div id="contents-log">
				<div id="cont-nav">
					<div class="container">
						<%@ include file="../include/nav.jsp" %>
					</div>
				</div>
			
				<div id="cont-log">
					<form action="/jungjaeho_free/UserServlet" id="login-form" method="POST">
	                    <label class="legend">아이디</label>
	                    <input name="userid" type="text" required>
	                    <label class="legend">패스워드</label> 
	                    <input name="passwprd" type="password" required> 
	                    <input type="submit" name="key" value="login">
	                    <a class="legend" style="float:right;" href="/jungjaeho_free/UserServlet?key=signup">회원가입</a>
       			  </form>
				</div>
			</div>	
			<!-- contents -->
			<div id="footer">
				<%@include file="../include/footer.jsp" %>
			</div>
		</div>
		<!-- wrap -->
    	<script type="text/javascript" src="js/imgslide.js"></script>
	</body>
</html>