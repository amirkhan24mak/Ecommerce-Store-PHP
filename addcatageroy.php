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

    <?php include('style/css.php'); ?>
    <title>Store</title>
</head>

<body>
<?php include('style/navbar.php'); ?>

    <h2 class="text-center" style="padding-top: 50px;">Add Catageroy</h2>
    <div class="container" style="padding-left: 25%;">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label class="form-label">Add Category</label>
                        <input name="name" type="text" placeholder="Enter the Category" class="form-control">
                    </div>
                    <div class="mb-3">

                        <label class="form-label"> Category img</label>
                        <input name="cate_img" type="file" placeholder="Enter the Category_img" class="form-control">

                    </div>

                    <button name="addcata" type="submit" class="btn btn-outline-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include('config.php');

    if (isset($_POST['addcata'])) {
        $cate = $_POST['name'];
        $cate_img = $_FILES['cate_img']['name'];

        $cate_temp = $_FILES['cate_img']['tmp_name'];

        $cate_type = $_FILES['cate_img']['type'];

        if ($cate_type == 'image/png' || 'image/jpeg' || 'image/jpg') {

            $sql = "INSERT INTO product_catageroy (cata_id,cata_name,cata_img)VALUES(null,'$cate','$cate_img');";
            $result = mysqli_query($con, $sql);
            if ($result) {
                move_uploaded_file($cate_temp, 'images/' . $cate_img);
                echo "<script>
  location.href = 'listcatageroy.php' ;
  </script>";
            } else {
                echo "<script>
  location.hreff='addcatageroy.php';
  </script>";
            }
        }
    }



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