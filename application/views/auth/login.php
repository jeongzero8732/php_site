
<div id="cont-log">
	<form action="/index.php/auth/authentication" id="login-form" method="POST">
		<label class="legend">아이디</label>
		<input name="userid" type="text" required>
		<label class="legend">패스워드</label> 
		<input name="password" type="password" required> 
		<input type="submit" name="key" value="login">
		<a class="legend" style="float:right;" href="/index.php/auth/register">회원가입</a>
	</form>
</div>
