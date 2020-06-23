<div id="sign">
    <br><br>
            <div style="text-align:center;">
				<font size="6" color="gray">회원정보</font><br>
				<br> 
				<?php echo validation_errors(); ?>

            </div>
            <br>
				<br>
                    <form action="/index.php/auth/update" method="post">
                        <table class="sign-table">
                            <tr>
                                <td id="title">아이디</td>
                                <td>
                                    <input
                                        type="text"
                                        name="userid"
                                        maxlength="20"
                                        value="<?=$userID?>"
                                        disabled="disabled" required="required"></td>
                                </tr>

                                <tr>
                                    <td id="title">비밀번호</td>
                                    <td>
                                        <input
                                            type="password"
                                            name="password"
                                            maxlength="15" required="required"></td>
                                    </tr>

                                    <tr></tr>

                                    <tr>
                                        <td id="title">이름</td>
                                        <td>
                                            <input
                                                type="text"
                                                value="<?=$userName?>"
                                                name="name"
                                                maxlength="40" required="required"></td>
                                        </tr>

                                        <tr>
                                            <td id="title">성별</td>
                                            <td>
                                                <input type="radio" name="gender" value="남" checked="checked">남
                                                    <input type="radio" name="gender" value="여" checked="checked">여
                                                    </td>
                                                </tr>

                                            </table>

                                            <div class="reset_sign" style="text-align:center;">
                                                <input type="submit" name="key" value="수정"/>
                                                <a href="/">취소</a>
                                                <a href="/index.php/auth/delete">회원탈퇴</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- contents -->