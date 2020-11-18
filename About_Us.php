<?php

$con = mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
session_start();
?>
<html>
    <head>
        <title>Expense Manager</title>
        <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
             .row_style{
                margin-top: 50px;
                margin-bottom: 175px;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
         <?php
      include 'header.php';
      ?>
        <div class="container">
              <div class="row row_style">
                  <div class="col-xs-6 column-style">
                      <h1>Who are we?</h1>
                      <p>We are a group of young technocrats who came up with an idea of solving budget
                          and time issues which we usually face in our daily lives. We are here to provide
                      a budget controller according to your aspects.<br><br>
                      Budget control is the biggest financial issue in the present world. 
                      One should look after their budget control to get ride off from their 
                      financial crisis.<br><br>
                      <h1>Contact Us</h1><br>
                      <b>Email:</b> trainings@internshala.com<br><br>
                      <b>Mobile:</b> +91-8448444853</p>
                  </div>
                  <div class="col-xs-6 column-style">
                      <h1>Why choose us?</h1>
                      <p>We provide with a predominant way to control and manage your budget
                      estimations with ease of accessing for multiple users.</p>
                  </div>
              </div> 
        </div>
            <?php
      include 'footer.php';
      ?>          
    </body>
</html>