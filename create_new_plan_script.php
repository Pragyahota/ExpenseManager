<?php
require 'common.php';
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$initial_budget = $_POST['initial_budget'];
$no_of_people = $_POST['no_of_people'];
$user_registration_query = "insert into new_plan(initial_budget,no_of_people) values ('$initial_budget','$no_of_people')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['initial_budget']=$initial_budget;
$_SESSION['no_of_people']=$no_of_people;
header('location:plan_details.php');
?>

