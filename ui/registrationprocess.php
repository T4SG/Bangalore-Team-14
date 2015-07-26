</html>
<body>
	<table width="1000" border="1" align="center" cellspacing="0">
<tr>
<td>
<?php ob_start();
session_start();
?>
 <?php 
 $email=$_POST['email'];
 $password=$_POST['password'];
 //$id=(int)$_POST['id'];
 $name=$_POST['uname'];
 $location=$_POST['location'];
 $language=$_POST['language'];
 $roleid=(int)$_POST['roleid'];
 $interests=$_POST['interests'];
 $gender=$_POST['gender'];
require ("connectme.php");
$check = mysql_query("SELECT * FROM users WHERE email ='$email' AND password='$password'") or die (mysql_error());
if (mysql_num_rows($check)){
	echo "UnSuccessfull Registration
 Click <a href='index.php'>Here</a> To  Login";
}
else{
$add = mysql_query("INSERT INTO users (name,email,password,location,language,roleid,interests,gender)
 VALUES ('$name','$email','$password','$location','$language',$roleid,'$interests','$gender')") or die(mysql_error());
				header('location:mentor.php');
	}

//$_SESSSION['user']=$email;
//header('location:mentor.php');
?>
</td>
</tr>
</table>
</body>
</html>