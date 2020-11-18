
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
            .row_style{
                margin-top: 100px;
                margin-left: 380px;
                margin-bottom: 35px;
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
                  <div class="col-xs-6">
                      <div class="panel panel-default">
                          <div class="panel-heading" style="background-color:white">
                              <center>
                      <h1>Sign Up</h1>
                              </center>
                          </div>
                          <div class="panel-body">
                              <form action="signup_script.php" method="POST">
                          <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email_id" class="form-control" name="email" id="email" 
                                     placeholder="Enter Valid Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                          </div>
                          <div class="form-group">
                              <label for="password">Password:</label>
                              <input type="password" class="form-control" name="password" id="password" 
                                     placeholder="Password(Min. 6 characters)" required = "true" pattern=".{6,}">
                          </div>
                          <div class="form-group">
                              <label for="phone">Phone:</label>
                              <input type="number" class="form-control" name="phone" id="phone"
                                     placeholder="Enter Valid Phone number(Ex:8448444853)">
                          </div>
                         
                          
                              <center>
                          <button style="background-color: #2E8B57; color: white;" type="submit" class="btn btn-default btn-block" value=”registration_submit”>Sign Up</button>
                              </center>
                         
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