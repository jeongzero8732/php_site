<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
 <%@ taglib tagdir="/WEB-INF/tags/" prefix="evaltag" %>
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
		        	<font size="6" color="gray">강의평가 등록</font>
		        </div>
		        <br><br>
		        <form action="/jungjaeho_free/EvalutionServlet" method="post" name="enroll">
		            <table class="sign-table">
		                <tr>
		                    <td id="title">강의명</td>
		                    <td><input type="text" name="lec_name" maxlength="20"></td>
		                    <td id="title">교수명</td>
		                    <td><input type="text" name="pro_name" maxlength="20"></td>
		                </tr>
		                        
		                <tr>
		                    <td id="title">수강연도</td>
		                    <td><input type="text" name="year" maxlength="15"></td>
		                    <td id="title">수강학기</td>
		                    <td><input type="text" name="semester" maxlength="40"></td>
		                </tr>
		           
		                    
		                <tr>
		                    <td id="title">강의구분</td>
		                    <td>
		                         <select name="lec_div">
		                            <option>전공</option>
		                            <option>교양</option>
		                            <option>기타</option>                    
		                        </select>
		                    </td>
		                    <td id="title">강의력</td>
		                    <td>
		                    	 <select name="lec_skill">
		                            <option>A</option>
		                            <option>B</option>
		                            <option>C</option>
		                            <option>D</option>                        
		                        </select>
		                    </td>
		                </tr>
		                    
		                <tr>
		                    <td id="title">난이도</td>
		                    <td>
		                        <select name="level">
		                            <option>A</option>
		                            <option>B</option>
		                            <option>C</option>
		                            <option>D</option>                        
		                        </select>
		                    </td>
		                     <td id="title">종합</td>
		                    <td>
		                       <select name="total_score">
		                            <option>A</option>
		                            <option>B</option>
		                            <option>C</option>
		                            <option>D</option>                        
		                        </select>		                
		                    </td>
		                </tr>		 		               
		            </table>
		            <br>
		             <table class="sign-table3">
		             	<tr>
		             		<td id="title">제목</td>
		             		<td><input type="text" size="54.5" name="content_title"/></td>
		             	</tr>
		                <tr>
		                    <td id="title">내용</td>
		                   
		                    <td>
		                        <textarea name="eval_contents" maxlength="2048" style="height:180px;width:430px;"></textarea>
		                    </td>
		                </tr>
		             </table>
		             <div class="reset_sign" style="text-align:center;">
			           	 <input type="submit" name="key" value="등록" />			        
			           	 <a href="/jungjaeho_free/UserServlet?key=cancel">취소</a>
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