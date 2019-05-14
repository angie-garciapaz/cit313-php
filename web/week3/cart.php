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
        //bootstrap columns
        //values are object value->name
        //hr
        //session remove
        //class
        echo "$value ";
    }
    ?>

</div>

<!-- /.container -->
<?php include 'footer.php'; ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>