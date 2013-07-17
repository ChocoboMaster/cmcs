<?php

class Register
{
  private $username;
  private $password;
  private $passmd5;
  private $email;

  private $errors;
  private $token;

  public function __construct()
  {
    $this->errors = array();

    $this->username = $this->filter($_POST['ruser']);
    $this->password = $this->filter($_POST['rpass']);
    $this->email    = $this->filter($_POST['remail']);
    $this->token    = $_POST['token'];

    $this->passmd5  = md5($this->password);
  }

  public function process()
  {
    if($this->valid_token() && $this->valid_data())
         $this->register();

    return count($this->errors)? 0 : 1;
  }

  public function filter($var)
  {
    return preg_replace('/[^a-zA-Z0-9@.]/','',$var);
  }

  public function register()
  {
   mysql_connect("localhost","root","") or die(mysql_error());
   mysql_select_db("chocobo") or die (mysql_error());

   mysql_query("INSERT INTO users(username,password) VALUES ('{$this->username}','{$this->passmd5}')");

   if(mysql_affected_rows()< 1)
     $this->errors[] = 'Could Not Process Form';
  }

  public function user_exists()
  {
    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("chocobo") or die (mysql_error());

    $data = mysql_query("SELECT ID FROM users WHERE username = '{$this->username}'");

    return mysql_num_rows($data)? 1 : 0;
  }

  public function show_errors()
  {
    echo "<h3>Errors</h3>";

    foreach($this->errors as $key=>$value)
      echo $value."<br>";
  }

  public function valid_data()
  {
    if($this->user_exists())
      $this->errors[] = 'Username Already Taken';
    if(empty($this->username))
      $this->errors[] = 'Invalid Username';
    if(empty($this->password))
      $this->errors[] = 'Invalid Password';
    if(empty($this->email) || !preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/',$this->email))
      $this->errors[] = 'Invalid Email';

  return count($this->errors)? 0 : 1;
  }


  public function valid_token()
  {
   if(!isset($_SESSION['token']) || $this->token != $_SESSION['token'])
     $this->errors[] = 'Invalid Submission';

   return count($this->errors)? 0 : 1;
  }
}

?>