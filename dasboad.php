<?php
session_start();
if(!isset($_SESSION['username'])){
   header('location: login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" type = "images/png" href = "images/Untitled-1.png">
    <?php include('style/css.php'); ?>
    <title>Store</title>
</head>

<body>
    <?php include('style/navbar.php') ?>

    <div class="container mt-5" >
        <div class="row">
            <div class="col-md-3" style="background-color:#873e23; color :white;padding-top:30px;padding-bottom:30px; padding-left:30px; margin-right: 10px;">
                <h3>Total Products</h3>
                <?php
                include('config.php');
                $sql = "SELECT COUNT(*) as count from product";
                $result = mysqli_query($con, $sql);
                $data = mysqli_fetch_assoc($result);
                echo "<h4>$data[count]</h4>"
                ?>
            </div>
            <div class="col-md-3" style="background-color:#873e23; color :white;padding-top:30px;padding-bottom:30px; padding-left:30px; margin-right: 10px;">
                <h3>Total Products</h3>
                <?php
                include('config.php');
                $sql = "SELECT COUNT(*) as count from product_catageroy";
                $result = mysqli_query($con, $sql);
                $data = mysqli_fetch_assoc($result);
                echo "<h4>$data[count]</h4>"
                ?>
            </div>
            <div class="col-md-3" style="background-color:#873e23; color :white;padding-top:30px;padding-bottom:30px; padding-left:30px;">
                <h3>Outstock Products</h3>
                <?php
                include('config.php');
                $sql = "SELECT COUNT(*) as count from product where statuss = 1";
                $result = mysqli_query($con, $sql);
                $data = mysqli_fetch_assoc($result);
                echo "<h4>$data[count]</h4>"
                ?>
            </div><div class="col-md-3" style="background-color:#873e23; color :white;padding-top:30px;padding-bottom:30px; padding-left:30px; margin-top:10px">
                <h3>Instock Products</h3>
                <?php
                include('config.php');
                $sql = "SELECT COUNT(*) as count from product where statuss = 0";
                $result = mysqli_query($con, $sql);
                $data = mysqli_fetch_assoc($result);
                echo "<h4>$data[count]</h4>"
                ?>
            </div>
        </div>
    </div>

    <?php include('config.php') ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php include('style/js.php'); ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>