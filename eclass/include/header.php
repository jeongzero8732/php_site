<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page import="my.eclass.Domain.*"%>
	<% 
		String str2=null;
		if(session.getAttribute("user")!=null)
		{
			UserVO user = (UserVO) session.getAttribute("user");
			str2=user.getUserID();
		}
	%>	
	<div class="container">
		<div class="quick-menu">
			<c:if test="${user!=null}">
				<a><%=str2%>님</a>
				<a href="/jungjaeho_free/UserServlet?key=logout">로그아웃</a>
			</c:if>
					
			<c:if test="${user==null}">
				<a href="/jungjaeho_free/UserServlet?key=login">로그인</a>
			</c:if>
					
				<a href="http://www.kpu.ac.kr/index.do?sso=ok" target="_blank">학교홈페이지가기</a>
		</div>
		<div class="title">
			<p>이클래스 개인 페이지</p>
			<h1><a href="http://www.kpu.ac.kr/index.do?sso=ok" target="_blank">www.kpu.ac.kr</a></h1>
		</div>
	</div>