<! DOCTYPE html>
<head>
<title>Login</title>
<style type="text/css">

.LOGINtext{
  font-family: gurmukhi sangam mn;
}

</style>
<script src="validation.js"></script>

</head>
<body>
<form name = "login" action = "Loginform.php" method = "post">
    <table class="LOGINtext" width="550px" border = 0 cellspacing="8" cellpadding="8" align = "center">
      <tr>
        <td> E-mail</td>
          <td><input name = "Email_id" id = "eid" type = "email" class = "in2" maxlength = "40" size = 23 placeholder = "Email Id" onblur = "validateEmail2()" required>
        </td>
      </tr>
      <tr>
        <td> Password</td>
          <td><input name = "password"  id = "p" type = "password" maxlength = "8" placeholder = "Password" size = 23 class = "in2" required>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
            <td><input type = "submit" name ="login"  class = "button" id = "login" value = "Login">
                <input type = "reset" name = "reset" class = "button" value = "Clear"> </td>
      </tr>
        <tr>
            <td><label style="font-size:13px;"> <a href="ForgotPassword.php" target = "myframe">Forgot Password?</a> </label><td>
</table>
</form>
</body>
</html>
