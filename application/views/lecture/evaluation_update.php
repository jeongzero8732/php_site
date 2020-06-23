<div id="sign">
		        <br><br>
		        
		        <div style="text-align:center;">
		        	<font size="6" color="gray">강의평가</font><br>
				<br>작성자 : <?=$writer?>

				<?php echo validation_errors(); ?>
		        </div>
		        <br><br>
		        <form action="/index.php/evaluation/update" method="post">
		            <table class="sign-table">
		                <tr>
		                    <td id="title">강의명</td>
		                    <td><input type="text" name="lecName" value=<?=$lectureName?> maxlength="20" required></td>
		                    <td id="title">교수명</td>
		                    <td><input type="text" value="<?=$professorName?>" name="proName" maxlength="20" required></td>
		                </tr>
		                        
		                <tr>
		                    <td id="title">수강연도</td>
		                    <td><input type="text" name="lecYear" maxlength="15" value="<?=$lectureYear?>"></td>
		                    <td id="title">수강학기</td>
		                    <td><input type="text" value="<?=$semester?>" name="semester" maxlength="40"></td>
		                </tr>
		           
		                    
		                <tr>
		                    <td id="title">강의구분</td>
		                    <td>
		                         <select name="leckind" value="<?=$lecture_kinds?>">
		                            <option>전공</option>
		                            <option>교양</option>
		                            <option>기타</option>                    
		                        </select>
		                    </td>
		                    <td id="title">강의력</td>
		                    <td>
		                    	 <select name="lecSkill" value="<?=$lecskill?>">
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
		                        <select name="lecLevel" value="<?=$leclevel?>">
		                            <option>A</option>
		                            <option>B</option>
		                            <option>C</option>
		                            <option>D</option>                        
		                        </select>
		                    </td>
		                     <td id="title">종합</td>
		                    <td>
		                       <select name="totalScore" value="<?=totalScore?>">
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
		             		<td><input type="text" size="54.5" name="evalTitle" value="<?=$evalutionTitle?>" required/></td>
		             	</tr>
		                <tr>
		                    <td id="title">내용</td>
		                   
		                    <td>
		                        <textarea name="evalContent" maxlength="2048" value="<?=$evalutionContent?>" required style="height:180px;width:430px;"></textarea>
		                    </td>
		                </tr>
		             </table>
		             <div class="reset_sign" style="text-align:center;">
                        <input type="hidden" name="id" value="<?=$evalutionID?>">
			           	<input type="submit" name="key" value="수정" />			        
			           	<a href="/index.php/evaluation">취소</a>
		            </div>
		        </form>
		   		</div>
			</div>
