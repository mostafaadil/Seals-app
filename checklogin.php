<?php
session_start();
	include("lib/db.class.php");
$myconnection = mysqli_connect("localhost", "root", "","posnic");


// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM `stock_user` WHERE username='$myusername' and password='$mypassword'" ;
$result=mysqli_query($myconnection,$sql);

// mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "dashboard.php"
$row = mysqli_fetch_row($result);

$_SESSION['id']=$row[0];
$_SESSION['username']=$row[1];
$_SESSION['usertype']=$row[3];

if($row[3]=="admin")
header("Location: dashboard.php");
else 
die("Not Valid User Type. Check with your application administartor");

} else {
header("Location: index.php?msg=Wrong%20Username%20or%20Password&type=error");
}
?>