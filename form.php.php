<?php

if($_POST)
{
  $errors=array();

  if(empty($_POST['fname']) || $_POST['fname'] < 8)
  {
   $errors['fname1']="enter valid name<br>";
   }

   if(empty($_POST['lname']))
   {
   	$errors['lname1']="lastname can not be left empty <br>";

   }
   if($_POST['lname'] < 3)
   	 {
   	 	$errors['lname2']="lastname can not be less than three characters
   	 	<br><br>";
   	 }

   if(empty($_POST['email']))
   {
   	$errors['email1']="enter email-id";
   	if(empty($_POST['email']))
   		$errors['email1']="email can not left empty<br>";
   }

   if(empty($_POST['password']))
   {
   	$errors['password1']="password can not be left empty ";
   }
}





?>


<html>
<head>
	<title></title>
</head>
<body>
   <form name="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
   
   		<p><label>First name<span style="color:red">*</span></label>
   		<input type="text" name="fname" value="<?php if(isset($_POST['fname']))
   		 echo $_POST['fname']?>">&nbsp;
   		<span style="color:red ; font-size:150%">
   		<?php if(isset($errors['fname1'])) echo $errors['fname1']?></span></p>
     
   		<label>Last name <span style="color:red">*</span></label>
   		<input type="text" name="lname"><br><br>
   		<?php if(isset($errors['lname1'])) echo $errors['lname1']?>
   		<?php if(isset($errors['lname2'])) echo $errors['lname2']?>


    
   		<label>Email<span style="color:red">*</span></label>
   		<input type="text" name="email"><br><br>
   		<?php  if(isset($errors['email1'])) echo $errors['email1']?>
    
   		<label>password<span style="color:red">*</span></label>
   		<input type="password" name="password"><br><br>
     
   		<input type="submit" name="submit">
   </form>
</body>
</html>