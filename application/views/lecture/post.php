<div id="sign">
		        <br><br>
		        
		        <div style="text-align:center;">
		        	<font size="6" color="gray">강의평가 </font><br>
				<br>작성자 : <?=$writer?>

		        </div>
		        <br>

		            <table class="sign-table">
		                <tr>
		                    <td id="title">강의명</td>
		                    <td style="word-break:break-all;width: 150px; font-family: black;font-weight: bold;"><?=$lectureName?></td>
		                    <td id="title">교수명</td>
		                    <td style="word-break:break-all; width: 150px; font-family: black;font-weight: bold;" ><p type="text" name="proName" maxlength="20" required><?=$professorName ?></td>
		                </tr>
		                        
		                <tr>
		                    <td id="title">수강연도</td>
		                    <td style="word-break:break-all;width: 150px; font-family: black;font-weight: bold;" ><?=$lectureYear?></td>
		                    <td id="title">수강학기</td>
		                    <td style="word-break:break-all;width: 150px; font-family: black;font-weight: bold;"><?=$semester?></td>
		                </tr>
		           
		                    
		                <tr>
		                    <td id="title">강의구분</td>
		                    <td>
		                         <a name="leckind" style="margin-left:5px;font-family: black;font-weight: bold;"><?=$lecture_kinds?></a>
		          
		                    </td>
		                    <td id="title">강의력</td>
		                    <td>
		                    	 <a name="lecSkill" style="margin-left:5px;font-family: black;font-weight: bold;"><?=$lecskill?><a>
		                    </td>
		                </tr>
		                    
		                <tr>
		                    <td id="title">난이도</td>
		                    <td>
		                        <a name="lecLevel" style="margin-left:5px;font-family: black;font-weight: bold;"><?=$leclevel?></a>
		                    </td>
		                     <td id="title">종합</td>
		                    <td>
		                       <a name="totalScore" style="margin-left:5px;font-family: black;font-weight: bold;"><?=$totalScore?></a>             
		                    </td>
		                </tr>		 		               
		            </table>
		            <br>
		             <table class="sign-table3">
		             	<tr>
		             		<td id="title" >제목</td>
		             		<td style="margin-left:10px;"><?=$evalutionTitle ?></td>
		             	</tr>
		                <tr>
		                    <td id="title" >내용</td>
		                   
		                    <td>
		                        <textarea name="evalContent" maxlength="2048" required style="height:180px;width:430px;" disabled ><?=$evalutionContent?></textarea>
		                    </td>
		                </tr>
		             </table>
		             <div class="reset_sign" style="text-align:center;">	
                         <a href="/index.php/evaluation">돌아가기</a>
                         <?php
				        	if($this->session->userdata('nickname')==$writer){
				        	?>
                        <form action="/index.php/evaluation/update" style="display: contents;;" method="post">
                        <input type="hidden" name="id" value="<?=$evalutionID?>">
                         <input type="submit" value="수정하기">
                         </form>
                         <a href="/index.php/evaluation/delete">회원탈퇴</a>
                            <?php }?>
		            </div>
		   		</div>
			</div>
