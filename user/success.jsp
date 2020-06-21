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
					<form action="${pageContext.request.contextPath}/index.jsp" id="login-form">
	                    <label class="legend" style="margin-left:45px; margin-bottom:20px;">회원가입 성공!!.</label>
	                   	<input type="submit" value="돌아가기">
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