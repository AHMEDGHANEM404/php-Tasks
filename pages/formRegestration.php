<?php
include("first.php");
session_start();
?>
<form action="registartion.php" method="POST" class=" container form-group ">
   <p>Username:</p>  <input type="text" class="form-control" name="username" /><br />
   <p>Email:</p>  <input type="mail" class="form-control" name="mail" /><br />
  <p>Password:</p>   <input type="password"class="form-control" name="password" /><br />
   <p>Confirm password:</p>  <input type="password"class="form-control" name="password_confirm" /><br />
   <p>facebook:</p>  <input type="email"class="form-control" name="face" /><br />
   <p>instgram:</p>  <input type="email"class="form-control" name="insta" /><br />
   <p>twitter :</p>  <input type="email" class="form-control"name="twitter" /><br />
    <input type="submit" value="Register" class="btn btn-primary" />
</form>
<?php
include("second.php");
?>
