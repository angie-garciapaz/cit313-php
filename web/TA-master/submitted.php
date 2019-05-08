<?php
$nameErr = $emailErr = $majorErr = $commentsErr = "";
$name = $email = $major = $comments = "";

if (empty($_POST["name"])) {
  $nameErr = "Name is required";
} else {
  $name = $_POST["name"];
}

if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = $_POST["email"];
}

if (empty($_POST["major"])) {
  $majorErr = "Major is required";
} else {
  $major = $_POST["major"];
}

$continents = $_POST["continents"];


if (empty($_POST["comments"])) {
  $comments = "";
} else {
  $comments = $_POST["comments"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css" />
  <title>Document</title>
</head>

<body>
  <div class="jumbotron">
    <h1>Review</h1>  
    <p>Name: <?php echo $name ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Where you've visited:
      <?php
      foreach ($continents as $continent) {
        // if ($continenets[] > 1)
        // I wanted to make an if statement cause the comma isn't always needed
        echo $continent . ", ";
        // else
        // echo $continent;
      }
      ?>
    </p>
    <p>Major: <?php echo $major ?> </p>
    <p>Comments: <?php echo $comments?></p>
  </div>
</body>

</html>