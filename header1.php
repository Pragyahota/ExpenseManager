<?php
require 'common.php';

if(!isset($_SESSION["email"])){
    header("Location:login.php");
  }
?>
<div class="navbar navbar-inverse navbar-fixed-top">   
    <div class="container">      
        <div class="navbar-header">       
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">  
                <span class="icon-bar"></span>              
                <span class="icon-bar"></span>            
                <span class="icon-bar"></span>              
            </button>          
            <a class="navbar-brand" href="index.php">Ct&#8377l Budget</a>   
        </div>       
        <div class="collapse navbar-collapse" id="myNavbar">       
            <ul class="nav navbar-nav navbar-right">              
                 
   <li><a href="About_Us.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li> 
        <li><a href="change_password.php"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>     
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>     
                           
            </ul>      
        </div>   
    </div> 
</div> 
 
 

