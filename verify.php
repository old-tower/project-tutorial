<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();
}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';
//$result = $mysqli->query("SELECT email, password from users");
$result = $mysqli->query("SELECT * FROM users WHERE email = '$username' AND password = '$password' ");
//$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');
if($result === FALSE){
  die($mysqli->error);//mysql_error();
}
//'xxx' or '1'='1'
if($result){
  while($obj = $result->fetch_object()){
    //if($obj->email === $username && $obj->password === $password) {
	  if(mysqli_num_rows($result) != 0){
      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
	 setcookie('username', $username , time()+86000);
      header("location:index.php");
	  echo 'this is good';
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}


?>
