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
