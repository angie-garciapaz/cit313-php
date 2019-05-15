<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curry on the Corner</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<div class="col-xs-12">
    <!-- Navigation -->
    <?php include 'nav.php'; ?>


    <h1>you've ordered</h1>

    <?php
    // Echo session variables that were set on previous page
    //set up a loop
    foreach($_SESSION['meals'] as $key=>$value)
    {
        
        //values are object value->name
        //hr
        //session remove
        //class
        echo "$value ";
    }
    ?>
    
    <!-- image goes here -->
    <div class="col-xs-3">

    </div>

    <!-- description goes here -->
    <div class="col-xs-5">

    </div>

    <!-- prices goes here -->
    <div class="col-xs-2">

    </div>

    <!-- remove button goes here -->
    <div class="col-xs-2">

    </div>
    </div>
    

</div>

<!-- /.container -->
<?php include 'footer.php'; ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>