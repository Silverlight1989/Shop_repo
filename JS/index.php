<script src="jquery.js"></script>
<script>
  function auth(){
      var login = $("#login").val();
      var pass = $("#pass").val(); 
      var str = "login="+login+"&pass="+pass;
       
      $.ajax({
        type: 'POST',
        url: 'server.php',
        data: str,
        success: function(data_answer){
           alert(data_answer);
        }
    });
  }
</script>


	<p>Логин</p>
	<input id="login" type="text" name="login">
	<p>Пароль</p>
	<input id="pass" type="password" name="pass"><br><br>
	<a onclick="auth()" href="#">Войти</a>
