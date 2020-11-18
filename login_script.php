<?php

$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));

$email = $_POST['email'];
//$pwd = $_POST['password'];
$password =md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
$id = $row["id"];
$email = $row["email"];
$password = $row["password"];
session_start();
$_SESSION['id'] = $id;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
}
//echo " email or password";
header("Location: home.php");
}
else
{
echo "Invalid email or password";
}


?>

