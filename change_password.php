
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
                margin-left: 300px;
                margin-bottom: 100px;
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
      include 'header1.php';
      ?>
    
         <div class="container">
              <div class="row row_style">
                  <div class="col-xs-8">
                      <div class="panel panel-default">
                          <div class="panel-heading" style="background-color:white">
                              <center>
                      <h1>Change Password</h1>
                              </center>
                          </div>
                          <div class="panel-body">
                              <form action="change_password_script.php" method="POST">
                          <div class="form-group">
                              <label for="old_password">Old Password</label>
                              <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password"
                                     required = "true" pattern=".{6,}">
                          </div>
                          <div class="form-group">
                              <label for="new_password">New Password</label>
                              <input type="password" class="form-control" name="new_password" id="new_password" required = "true" pattern=".{6,}"
                                     placeholder="New Password">
                          </div>
                          <div class="form-group">
                              <label for="confirm_new_password">Confirm New Password</label>
                              <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" 
                                     placeholder="Re-type New Password" required = "true" pattern=".{6,}">
                          </div>
                              <center>
                          <button style="background-color: #2E8B57; color: white;" type="submit" class="btn btn-default btn-block" value=”registration_submit”>Change</button>
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