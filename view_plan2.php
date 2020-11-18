<?php
require 'common.php'
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
                margin-bottom:80px;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
                margin-top: 10px;
            }
        </style>
          </head>
    <body>
        <?php
      require 'header1.php';
      ?>

<div class="container">
            <div class="row row_style">
                <div class="col-xs-8">
                    <div class="panel panel-default">
                        <div style="color: white; text-align: center; height: 100px; background-color: #2E8B57;" class="panel-heading">
                            <h2>My first Plan</h2>
                            <h4><div style="float:right;" ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['no_of_people'];  ?></div></h4>
                        </div>
                            <div class="panel-body">
                            <div style="margin-top:20px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Budget</b></td>
                                        <td style="padding-left: 450px; padding-bottom: 20px;">&#8377 <?php echo $_SESSION['initial_budget']; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Remaining Amount</b></td>
                                        <td style="padding-left: 450px; padding-bottom: 20px;">&#8377 <?php $exp=0; $rem_amt=$_SESSION['initial_budget']-$exp; echo $rem_amt; ?>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td style="padding-left: 290px;"><?php echo $_SESSION['from_date'];echo " to ";echo $_SESSION['to_date']; ?></td>
                                    </tr>
                                </tbody>
                            </table> 
                            </div>
                            </div>
                    </div>
                </div>
                <a style="  text-decoration: none;" href="expense_distribution.php"><button style="border-color: #2E8B57;
                 float:right; color: #2E8B57; margin-bottom:500px;" class="btn btn-lg btn-default">Expense Distribution</button></a>
                  
                  <div class="col-xs-4">
                      <div class="panel panel-default">
                          <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>My First Expense</h2>
                        </div>
                           <div class="panel-body">
                            <div style="margin-top:20px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Amount</b></td>
                                        <td style="padding-left: 200px; padding-bottom: 20px;">&#8377 <?php echo $_SESSION['amount_spent'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Paid by</b></td>
                                        <td style="padding-left: 180px; padding-bottom: 20px;"><?php echo $_SESSION['choose'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Paid On</b></td>
                                        <td style="padding-left: 150px;"><?php echo $_SESSION['date'];?></td>
                                    </tr>
                                </tbody>
                            </table> 
                      </div>
                               <center>
                                   <h3 style="color:darkcyan;">You don't have bill</h3>
                               </center>
                  </div>
                      </div> 
                  </div>
                
                <div class="col-xs-4">
                      <div class="panel panel-default">
                          <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>My Second Expense</h2>
                        </div>
                           <div class="panel-body">
                            <div style="margin-top:20px;" class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Amount</b></td>
                                        <td style="padding-left: 200px; padding-bottom: 20px;">&#8377 <?php echo $_SESSION['amount_spent1'];?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Paid by</b></td>
                                        <td style="padding-left: 200px; padding-bottom: 20px;"><?php echo $_SESSION['choose1'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Paid On</b></td>
                                        <td style="padding-left: 150px;"><?php echo $_SESSION['date1'];?></td>
                                    </tr>
                                </tbody>
                            </table> 
                      </div>
                               <center>
                                   <h3 style="color:darkcyan;">you don't have a bill</h3>
                               </center>
                  </div>
                      </div> 
                  </div>
             
                
                <div style="float:right; margin-top: 50px;" class="col-xs-5 col-xs-offset-7">
                    <div class="panel panel-default">
                        <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>Add New Expense</h2>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                        <label for="expense_name1">Title</label>
                        <input type="text" class="form-control" name="expense_name1" id="expense_name1" placeholder="Expense Name">
                        </div>
                                 <div class="form-group">
                                <label for="date1">Date</label><br>
                            <input type="date" class="form-control" name="date1" id="date1" placeholder="dd/09/2019" max="2019-09-01">
                            </div>
                                <div class="form-group">
                        <label for="amount_spent1">Amount Spent</label>
                        <input type="number" class="form-control" name="amount_spent1" id="amount_spent1" placeholder="Amount Spent" min="0">
                        </div>
                                <div class="form-group">
                                    <input type="select" class="form-control" name="choose1" id="choose1" placeholder="Choose">
                                </div>
                                
                                <div class="form-group">
                        <label for="upload_bill">Upload Bill</label>
                        <input type="file" class="form-control" name="upload_bill" id="upload_bill" placeholder="No file chosen">
                        </div>
                                <button style="border-color: #2E8B57; color: #2E8B57;" class="btn btn-default btn-block">Add</button>
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

