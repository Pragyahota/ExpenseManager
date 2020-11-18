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
                margin-bottom:220px;
            }
            .jumbotron{
                width: 50%;
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
                <h1>You don't have any active plans</h1><br><br>
                <center>
            <div class="jumbotron">
                <center>
                <a href="create_new_plan.php"><h3><span class="glyphicon glyphicon-plus-sign"></span>
                    Create a New Plan</h3></a>
                </center>
            </div>
                </center>
        </div>
        </div>
        <?php
      include 'footer.php';
      ?>
    </body>
</html>
