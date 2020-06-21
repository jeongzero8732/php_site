<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <!-- Base css -->
        <link rel="stylesheet" href="/static/css/normalize.css">
        <link rel="stylesheet" href="/static/css/reset.css">

        <!-- page css -->
        <link rel="stylesheet" href="/static/css/index.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

        <!-- jquery plugin -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <title>이클립스 개인 페이지</title>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
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
                        <h1>
                            <a href="http://www.kpu.ac.kr/index.do?sso=ok" target="_blank">www.kpu.ac.kr</a>
                        </h1>
                    </div>
                </div>

            </div>