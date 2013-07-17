<?php
session_start();

if(isset($_POST['register']))
{
  include_once('/class.register.php');

  $register = new Register();

  if($register->process())
    echo "Successfully Signed Up!";
  else
    $register->show_errors();
}

$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <table>
  <tr><td>Username:</td><td><input type="text" name="ruser"/></td></tr>
  <tr><td>Password:</td><td><input type="password" name="rpass"/></td></tr>
  <tr><td>Email:</td><td><input type="text" name="remail"/></td></tr>
 </table>
 <input type="hidden" name="token" value="<?php echo $token;?>"/>
 <input type="submit" name="register" value="Sign Up"/>
</form>