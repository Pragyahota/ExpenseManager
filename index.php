<?php
require 'common.php';
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
            #banner_image{
                padding-top: 75px;
                padding-bottom: 50px;
                text-align: center;
                color: #f8f8f8;
                background:url("img/index image.jpg")no-repeat center;
                background-size: cover;
            }
            #banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0,0,0,0.7);
                max-width: 660px;
            }
            #inner-banner-image{
                padding-top: 12%;
                width: 50%;
                margin: auto;
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
        <div id="banner_image">
            <div class="container">
                <div id="inner-banner-image">
                <div id="banner_content">
                    <h2>We help you control your budget</h2>
                    <a href="login.php" class="btn btn-success btn-lg active">Start Today</a>
                    
                </div>
            </div>
            </div>
             </div>
        <?php
      include 'footer.php';
      ?>
    </body>
</html>
