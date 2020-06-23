<div id="sign">
    <br><br>

    <div style="text-align:center;">
        <font size="6" color="gray">회원가입</font><br>
				<br>
				<?php echo validation_errors(); ?>
    </div>
    <br><br>


    <form action="/index.php/auth/register" method="post">
        <table class="sign-table">
            <tr>
                <td id="title">아이디</td>
                <td>
                    <input
                        type="text"
                        name="userid"
                        maxlength="20"
                        value="<?php echo set_value('userid')?>"
                        required="required">
                </td>
            </tr>

            <tr>
                <td id="title">비밀번호</td>
                <td>
                    <input
                        type="password"
                        name="password"
                        maxlength="15"
                        value="<?php echo set_value('password')?>"
                        required="required">
                </td>
            </tr>

            <tr>
                <td id="title">이름</td>
                <td>
                    <input
                        type="text"
                        name="name"
                        maxlength="40"
                        value="<?php echo set_value('name')?>"
                        required="required">
                </td>
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
            <input type="submit" value="회원가입"/>
            <input type="reset" value="취소">
        </div>
    </form>
</div>
<!-- contents -->