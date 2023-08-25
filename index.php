<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="icon" type="images/png" href="images/Untitled-1.png">

  <?php include('style/ccs4.php'); ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Store</title>

</head>

<body>

  <?php include('style/navbar2.php'); ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="website/banner1.jpg" alt="First slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="website/banner2.jpg" alt="Second slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="website/banner3.jpg" alt="Third slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="website/banner5.jpg" alt="Third slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="website/banner4.jpg" alt="Third slide">

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

  <div class="container">

    <h2 class="text-center">Latest Products</h2>

  </div>

  <div class="container page-wrapper">
    <div class="page-inner">
      <div class="row">

        <?php
        include('config.php');
        $sql = "SELECT * from product inner join product_catageroy on
                        product.cata_id = product_catageroy.cata_id inner join product_color on
                        product.color_id = product_color.color_id";
        $run = mysqli_query($con, $sql);

        while ($f = mysqli_fetch_assoc($run)) {
          // echo $f['ptitle'];
          echo '
                  <div class="col-4">
                    <div class="el-wrapper">';
          echo "<div class='box-up'>";
          echo '<img class="img" src="productimg/' . $f['pthumbnail'] . '" alt="" width="100%" height="500px">';
          echo '<div class="img-info">';
          echo '<div class="info-inner">';
          echo '<span class="p-name">' . $f['ptitle'] . '</span>
                                    <span class="p-company">' . $f['cata_name'] . '</span>';

          if ($f['statuss'] == 1) {
            echo '<span class="outst"> Out Stock</span>';
          } else {
            echo '<span class="inoutst">In Stock</span>';
          }

          echo '</div>
                                <div class="a-size">Available color : <span class="size">' . $f['color_name'] . '</span></div>';
          echo '</div>
                        </div>
                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>
    
                            <a class="cart" href="#">
                                <span class="price">' . $f['Pprice'] . '</span>
                                <span class="add-to-cart">
                        <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    ';
          echo '</div>';
        }
        ?>
        
      </div>
    </div>
  </div>

  <div class="container-fluid">
          <img src="images/oneplusbanner.png" alt="" width="100%" height="100%">
        </div>

        <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">Home</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">NOKIA</a></li>
  	 				<li><a href="#">OPPO</a></li>
  	 				<li><a href="#">APPLE(iphone)</a></li>
  	 				<li><a href="#">SAMSUNG</a></li>
  	 				<li><a href="#">XIAOMI</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/aamirkhan004/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://github.com/amirkhan24mak"><i class="fab fa-github"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fas fa-envelope"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


  <!--- ignore the code below-->

  <?php include('style/js.php'); ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>