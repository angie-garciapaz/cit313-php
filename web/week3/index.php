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

  <!-- Navigation -->
  <?php include 'nav.php'; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Plates</h1>
        <!-- <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div> -->

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="../week3/images/pic7-93.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../week3/images/pic2-93.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../week3/images/pic1-93.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- FOOD BEGINS HERE -->
        <h3>Menu</h3>
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../week3/images/pic1-74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <form action="cart.php" method="POST">
                  <label for="name">Chicken Korma</label>
                </h4>
                <h5>$14.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                <input type="submit" name="submit" value="{image: 'images/pic1-3', name: 'Chicken Korma', price: '$14.99'}" class="btn btn-warning btn-lg">Add to cart
              </form>

              </div>
              
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../week3/images/pic2-74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <label for="name">Samosas</label>
                  <?php
                  // Set session variables
                  $my_array = array('image', 'Samosas', '$4.99');
                  $_SESSION['meals'] = $my_array;
                  ?>
                </h4>
                <h5>$9.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                <a href="cart.php" class="btn btn-warning btn-lg">Add to Cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../week3/images/pic3-74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <label for="name">Naan</label>
                  <?php
                  // Set session variables
                  $my_array = array('image', 'Naan', '$4.99');
                  $_SESSION['meals'] = $my_array;
                  ?>
                </h4>
                <h5>$4.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                <a href="cart.php" class="btn btn-warning btn-lg">Add to Cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../week3/images/pic4-74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <label for="name">Chicken Tikka Masala</label>
                  <?php
                  // Set session variables
                  $my_array = array('image', 'Chicken Tikka Masala', '$13.99');
                  $_SESSION['meals'] = $my_array;
                  ?>
                </h4>
                <h5>$13.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                <a href="cart.php" class="btn btn-warning btn-lg">Add to Cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../week3/images/pic5-74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <label for="name">Sweet Potatoe Dahl</label>
                  <?php
                  // Set session variables
                  $my_array = array('image', 'Sweet Potatoe Dahl', '$3.99');
                  $_SESSION['meals'] = $my_array;
                  ?>
                </h4>
                <h5>$3.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                <a href="cart.php" class="btn btn-warning btn-lg">Add to Cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../week3/images/pic6-74.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <label for="name">Chicken Mughalai</label>
                  <?php
                  // Set session variables
                  $my_array = array('image', 'Chicken Mughali', '$14.99');
                  $_SESSION['meals'] = $my_array;
                  ?>
                </h4>
                <h5>$14.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                <a href="cart.php" class="btn btn-warning btn-lg">Add to Cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>

  <!-- /.container -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>