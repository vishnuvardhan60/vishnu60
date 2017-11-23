<?php

include_once('conn.php');

?>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$user=$_POST['username'];
$pass=$_POST['password'];

if(isset($user) and isset($pass))
{
      
	$some=$_POST['username'];
       $pass=$_POST['password'];	
$stmt=$conn->prepare("select * from signup where username=:name and password=:pswd");

 $stmt->bindParam(':name', $user);
  $stmt->bindParam(':pswd',$pass);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_NUM);
print_r($row);
if($row>0)
{

	$_SESSION['username']=$row[0];
	$_SESSION['password']=$row[2];
	print_r($_SESSION);
	header("location:login.php");

}


else {
	echo "username and password not matched";
}
  }



?>



