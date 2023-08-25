<?php 
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" type = "images/png" href = "images/Untitled-1.png">
    <?php include('style/css.php');
    include('config.php'); ?>
    <title>Store</title>
</head>

<body>

    <?php include('style/navbar.php') ?>
    <h2 class="text-center" style="padding-top: 50px;">Add Color</h2>
    <div class="container" style="padding-left: 25%;">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Color Name</label>
                        <input type="text" class="form-control" name="colorname">
                    </div>
                    <button type="submit" class="btn btn-primary" name="insert">Insert</button>

                </form>
            </div>
        </div>
    </div>


<?php
include('config.php');
if (isset($_POST['insert'])) {
    $color = $_POST['colorname'];


    $sql = "INSERT INTO `product_color`(`color_name`) VALUES ('$color')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<script>
            location.href= 'listcolor.php';
            </script>";
    }



    
};
?>

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