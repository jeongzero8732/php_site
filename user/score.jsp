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
			
			<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
			
				<div id="cont-log" style="text-align:center;">
					<div >
						<div id="chart">
					   
						</div>
					</div>
				</div>
			</div>	
			<!-- contents -->
			<div id="footer">
				<%@include file="../include/footer.jsp" %>
				
			</div>
				<!-- Hidden Layer -->
			<div class="hidden">
					<ul class="hidden">
						<li class="invisible">${user.getScore_F_F()}</li>
						<li class="invisible">${user.getScore_F_S()}</li>
						<li class="invisible">${user.getScore_S_F()}</li>
						<li class="invisible">${user.getScore_S_S()}</li>
						<li class="invisible">${user.getScore_T_F()}</li>
						<li class="invisible">${user.getScore_T_S()}</li>
						<li class="invisible">${user.getScore_FF_F()}</li>
						<li class="invisible">${user.getScore_FF_S()}</li>
				</ul>
			</div>
		</div>
		
	
		<!-- wrap -->
   		
   		<!-- END HTML -->
   		<script type="text/javascript" src="${pageContext.request.contextPath}/js/score.js"></script>	
	</body>
</html>