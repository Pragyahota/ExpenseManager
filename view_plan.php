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
      include 'header1.php';
      ?>

<div class="container">
            <div class="row row_style">
                <div class="col-xs-7">
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
                                        <td style="padding-left: 410px; padding-bottom: 20px;">&#8377 <?php echo $_SESSION['initial_budget'];  ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 20px;"><b>Remaining Amount</b></td>
                                        <td style="padding-left: 410px; padding-bottom: 20px;">&#8377 <?php $exp=0; $rem_amt=$_SESSION['initial_budget']-$exp; echo $rem_amt; ?>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td style="padding-left: 280px;"><?php echo $_SESSION['from_date'];echo " to ";echo $_SESSION['to_date']; ?>
</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                    </div>
                </div>
                <button style="border-color: #2E8B57; margin-top: 50px; margin-left: 200px;" class="btn btn-lg btn-default">
                    <a style=" text-decoration: none; color: #2E8B57;" href="expense_distribution.php">Expense Distribution</a></button>
               
                <div style="float:right; margin-top: 50px;" class="col-xs-5 col-xs-offset-7">
                    <div class="panel panel-default">
                        <div style="background-color: #2E8B57; color: white; text-align: center;" class="panel-heading">
                            <h2>Add New Expense</h2>
                        </div>
                        <div class="panel-body">
                            <form action="view_plan_script.php" method="POST">
                                <div class="form-group">
                        <label for="expense_name">Title</label>
                        <input type="text" class="form-control" name="expense_name" id="expense_name" placeholder="Expense Name">
                        </div>
                                 <div class="form-group">
                                <label for="date">Date</label><br>
                            <input type="date" class="form-control" name="date" id="date" placeholder="dd/09/2019" max="2019-09-01">
                            </div>
                                <div class="form-group">
                        <label for="amount_spent">Amount Spent</label>
                        <input type="number" class="form-control" name="amount_spent" id="amount_spent" placeholder="Amount Spent" min="0">
                        </div>
                                <div class="form-group">
                                    <input type="select" class="form-control" name="choose" id="choose" placeholder="Name of Person 1">
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


