<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "expense_manager") or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Expense Manager</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
            .row_style{
                margin-top: 100px;
                margin-right: 70px;
                margin-bottom: 130px;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
        </style>
    </head>
</head>
<body>
  <?php
      include 'header.php';
      ?>
    <div class="container">
        <div class="row row_style">
            <div class="col-xs-5 col-xs-offset-4">
                <div class="panel panel-default">
                    <div style="text-align:center; background-color:white; color:black;" class="panel-heading"><h1>Login</h1></div>
                    <div class="panel-body">
                        <form method="POST" action="login_script.php">
                           
                           
                                <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" placeholder="Email" required = "true" 
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">password:</label>
                                <input type="password" class="form-control" placeholder="Password" required = "true" pattern=".{6,}"  name="password">
                            </div>

                            <button type="submit" style="background-color:#2E8B57 " class="btn btn-primary btn-block" name="submit" 
                                    value="submit">Login</button><br>
                          <div>
                           <p><lg>Don't have an account?</lg> &nbsp;&nbsp;&nbsp;<a href="signup.php">Click here to sign up</a></p>
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



           <?php
      include 'footer.php';
      ?>



</body>

</html>