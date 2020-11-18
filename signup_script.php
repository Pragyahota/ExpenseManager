<?php

$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
//session_start();
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5($_POST['password']);
$phone = $_POST['phone'];
$user_registration_query = "insert into users( name,email,password, phone) values ('$name', '$email', '$password', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
//echo("<script>location.href='home_page.php'</script>")
echo "User successfully inserted";
header('location:home.php');
//$_SESSION['email']=$email;
//$_SESSION['id']=mysqli_insert_id($con);
?>

