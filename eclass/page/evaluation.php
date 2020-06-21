
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
			
			<!-- jquery plugin -->
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
			<div id="contents">
				<div id="cont-nav">
				<?php include($_SERVER["DOCUMENT_ROOT"].'/include/nav.php');?>
				</div>		
				<div id="cont-cont">
					<div class="ss-cont">
						<section class="select-container">
							<form method="post" action="/jungjaeho_free/EvalutionServlet" class="form-inline">
								<select name="Lecture-div" class="form-control1">
									<option  value="전체">전체</option>
									<option  value="전공">전공</option>
									<option  value="교양">교양</option>
									<option  value="기타">기타</option>
								</select>
								<input type="text" name="search" class="form-control2" placeholder="내용을 입력하세요">
								<input type="submit" name="key" class="btn-lec1" value="검색" ></button>
								<a class="btn-lec2" href="/page/evaluation_insert.php">등록하기</a>
							</form>
						</section>
					</div>
				</div>
				<!-- card -->
				
				<%	
					EvalutionDAO evalutionDAO=new EvalutionDAO();
					ArrayList<EvalutionVO> datas=evalutionDAO.getList();
				%>
			
					<% for(EvalutionVO  evalutionVO : datas) {%>
				
				<div class="card">
					<div class="card-header">
						<div class="row">
							
							<div class="col-left">강의명: <%=evalutionVO.getLectureName()%>(<%=evalutionVO.getLecture_kinds()%>)&nbsp;</div>
							<div class="col-right">종합:<span style="color:red;"><%=evalutionVO.getTotalScore() %></span></div>
						</div>
						<br>
						<div class="col-leftt"><small>교수:<%=evalutionVO.getProfessorName() %></small></div>
						<div class="col-leftt" style="margin-left:5px;">작성자: <%=evalutionVO.getUserID() %>&nbsp;</div>
						<br>
						<hr>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							제목 : <%=evalutionVO.getEvalutionTitle() %>&nbsp;<small>(<%=evalutionVO.getSemester() %>)</small>
						</h5>
						<br>
						<p class="card-text">내용 : <%=evalutionVO.getEvalutionContent()%></p>
						<hr>
						<div class="row">
							<div class="col-left">
								강의력<span style="color:red;"><%=evalutionVO.getLecskill() %></span>
								난이도<span style="color:red;"><%=evalutionVO.getLeclevel() %></span>			
							</div>
							<div class="col-text-right">
								<a href="/jungjaeho_free/EvalutionServlet?key=good&key2=<%=evalutionVO.getUserID()%>&key3=<%=evalutionVO.getEvalutionID()%>">수정</a>
								<a href="/jungjaeho_free/EvalutionServlet?key=del&key2=<%=evalutionVO.getUserID()%>&key3=<%=evalutionVO.getEvalutionID()%>">삭제</a>
							</div>
						</div>
					</div>
		    	</div>
		    	<%}%>
		    </div>	
			<!-- contents -->
			<div id="footer">
			<?php include($_SERVER["DOCUMENT_ROOT"].'/include/footer.html');?>

			</div>
			
		</div>
		
		<!-- wrap -->
    	<script type="text/javascript" src="./js/imgslide.js"></script>
	</body>
</html>