<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'erpcomp');
$email=$_POST['email'];
$pas=$_POST['pass'];
$q="select * from employee where email = '$email' && password = '$pas' && type='A'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$q1="select * from employee where email = '$email' && password = '$pas' && type='E'";
$result1=mysqli_query($con,$q1);
$num1=mysqli_num_rows($result1);
if($num==1)
{
	$_SESSION['em']=$email;
	header("Location:index1.php");
}
else if($num1=1)
{$_SESSION['em']=$email;
	header("Location:adm.php");

}
else
{
	header("Location:login.php");
}
?>