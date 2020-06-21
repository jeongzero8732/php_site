
<div id="cont-log">
	<form action="/jungjaeho_free/UserServlet" id="login-form" method="POST">
		<label class="legend">아이디</label>
		<input name="userid" type="text" required>
		<label class="legend">패스워드</label> 
		<input name="passwprd" type="password" required> 
		<input type="submit" name="key" value="login">
		<a class="legend" style="float:right;" href="<?=site_url()?>/auth/register">회원가입</a>
	</form>
</div>
