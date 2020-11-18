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
                margin-left:300px;
                margin-bottom: 30px;
            }
            footer {
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
                    <div style="padding:20px;"class="panel panel-default">
                        <form action="plan_details_script.php" method="POST">
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title(Ex. Trip to Goa)">
                        </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="from_date">From</label><br>
                            <input type="date" class="form-control" name="from_date" id="from_date" placeholder="dd/mm/yyyy" required="true" min="2019-04-01">
                            </div>
                            <div class="form-group">
                            <label class="col-xs-offset-8" for="to_date">To</label>
                            <input type="date" class="form-control col-xs-offset-8" name="to_date" id="to_date" placeholder="dd/mm/yyyy" required="true" max="2050-04-20">
                        </div>
                        </div><br>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="initial_budget">Initial Budget</label><br>
                                <input type="number" class="form-control" name="initial_budget" id="initial_budget" placeholder="<?php echo $_SESSION['initial_budget']; ?>" disabled>

                            </div>
                            <div class="form-group">
                            <label class="col-xs-offset-4" for="no_of_people">No. of People</label>
                            <input type="number" class="form-control col-xs-offset-4" name="no_of_people" id="no_of_people" placeholder="<?php echo $_SESSION['no_of_people']; ?>" disabled>
                        </div>
                        </div><br>
                         <div class="form-group">
                        <label for="person_1">Person 1</label>
                        <input type="text" class="form-control" name="person_1" id="person_1" placeholder="Person 1 Name" >
                        </div>
                        <div class="form-group">
                        <label for="person_2">Person 2</label>
                        <input type="text" class="form-control" name="person_2" id="person_2" placeholder="Person 2 Name">
                        </div>
                        <button style="border-color: darkcyan; color: darkcyan;" class="btn btn-default btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
   <?php
      include 'footer.php';
      ?>
     
    </body>
</html>


