<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <!-- Base css -->
        <link rel="stylesheet" href="/static/css/normalize.css">
        <link rel="stylesheet" href="/static/css/reset.css">
        <link rel="stylesheet" href="/static/css/bootstrap.css">
        <!-- page css -->
        <link rel="stylesheet" href="/static/css/index.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

        <!-- jquery plugin -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="/static/js/bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $("#search_btn").click(function() {
                    if ($("#q").val() == '') {
                        alert("검색어를 입력하세요!");
                        location.href="/index.php/evaluation";
                        return false;
                    } else {
                        var act = "/index.php/evaluation/list/q/" + $("#q").val()+"/page/1";
                        $("#bd_search").attr('action', act).submit();
                    }
                });
            });
 
            function board_search_enter(form) {
                var keycode = window.event.keyCode;
                if (keycode == 13)
                    $("#search_btn").click();
            }
       </script>

        <title>이클립스 개인 페이지</title>
    </head>
    <body>
        <?php
            	if($this->session->flashdata('message')){
         ?>
        <script>
            alert('<?=$this->session->flashdata('message')?>');
        </script>
        <?php
            	}
            	?>
        <div id="wrap">
            <div id="header">
                <div class="container">
                    <div class="quick-menu">
                    <?php
				        	if($this->session->userdata('is_login')){
				        	?>
                                <a><?=$this->session->userdata('nickname')?>님</a>
				        		<a href="/index.php/auth/logout">로그아웃</a>
				        	<?php
				        	} else {
				        	?>
				        		<a href="/index.php/auth/login">로그인</a>
				        		<a href="/index.php/auth/register">회원가입</a>
				        	<?php
				        	}
				        	?>
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