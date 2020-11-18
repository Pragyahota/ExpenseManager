<?php
require 'common.php';
$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
$old_password = $_POST['old_password'];
$new_password =$_POST['new_password'];
$confirm_new_password =$_POST['confirm_new_password'];
$sql = "SELECT password FROM users WHERE password ='$old_password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
$old_password=$row['password'];
    if($new_password==$confirm_new_password){
      $update="UPDATE users SET password='$confirm_new_password' WHERE password='$old_password'";
  $success_update= mysqli_query($con, $update);
      if($success_update){
             echo"<script>alert('new password set')</script>";
      }else{
             echo"<script>alert('old pwd do not match')</script>";
      }
     
    }
    else{
        echo"<script>alert('new and confirm password do not match')</script>";
         }
}
}

?>


