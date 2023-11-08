<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method="post">
<label for="">Login Name</label>
<input type="text" name="logname"><br>
<label for="">password</label>
<input type="password" name="passname"><br>
<label for="">email</label>
<input type="email" name="email"><br>
<button name="submit">submit</button>
  </form>  
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","employee");
if(!$con)
{
 die("connection failed".mysqli_connect_error);
}
else{
 echo"connection succsesfull";
}
{
 if(isset($_POST['submit']))
$a=$_POST['logname'];
$b=$_POST['passname'];
$c=$_POST['email'];
$in="insert into login(username,pass,email) values('$a','$b','$c')";
$ins=mysqli_query($con,$in);
$sel="select * from login";
$s=mysqli_query($con,$sel);
echo"<table border='1'>";
echo"<tr>";
echo"<th>username</th>";
echo"<th>password</th>";
echo"<th>email</th>";
echo"</t>";
while($row=mysqli_fetch_assoc($s))
{
    echo"<tr>";
    echo"<td>$row[username]</td>";
    echo"<td>$row[pass]</td>";
    echo"<td>$row[email]</td>";
    echo"</tr>";
}
}
?>
