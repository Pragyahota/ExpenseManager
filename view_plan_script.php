<?php
require 'common.php';
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$expense_name = mysqli_real_escape_string($con,$_POST['expense_name']);
$date = $_POST['date'];
$amount_spent = $_POST['amount_spent'];
$choose = $_POST['choose'];
$user_registration_query = "insert into add_new_expense(expense_name,date,amount_spent,choose) values "
        . "('$expense_name','$date','$amount_spent','$choose')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";

$_SESSION['expense_name']=$expense_name;
$_SESSION['date']=$date;
$_SESSION['amount_spent']=$amount_spent;
$_SESSION['choose']=$choose;
header('location:view_plan1.php');
?>



