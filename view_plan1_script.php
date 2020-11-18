<?php
require 'common.php';
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$expense_name1 = mysqli_real_escape_string($con,$_POST['expense_name1']);
$date1 = $_POST['date1'];
$amount_spent1 = $_POST['amount_spent1'];
$choose1 = $_POST['choose1'];
$user_registration_query = "insert into add_new_expense1(expense_name1,date1,amount_spent1,choose1) values "
        . "('$expense_name1','$date1','$amount_spent1','$choose1')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";

$_SESSION['expense_name1']=$expense_name1;
$_SESSION['date1']=$date1;
$_SESSION['amount_spent1']=$amount_spent1;
$_SESSION['choose1']=$choose1;
header('location:view_plan2.php');
?>





