<?php
 
 if($_POST)
 {
 $connect=mysqli_connect('localhost','root','','testdb');

 if($connect==true)
 {
 	echo "connected successfully <br>";
 }
 $fname=$_POST["firstname"];
 $pass=$_POST["password"];


 $query="select id from contact where firstname='$fname' and password='$pass'";

$result=mysqli_query($connect,$query);

if($row=mysqli_fetch_object($result))
{
	echo "successfully logged in";
}
else
{
	echo "sorry signup";
}

 }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <form action="login.php" method="post">
      	<p>first name<input type="text" name="firstname"></p>
      	<p>email<input type="text" name="email"></p>
      	<p>password<input type="password" name="password"></p>
      	<p><input type="submit" name="submit"></p>

      </form>
</body>
</html>