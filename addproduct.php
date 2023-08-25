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

    <h2 class="text-center" style="padding-top: 50px;">Add Products</h2>
    <div class="container"class='' style="padding-left: 25%;">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label class="form-label">Product Title</label>
                        <input name="pname" type="text" placeholder="Enter the Product" class="form-control">
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Product Short Describtion</label>
                        <input name="shortdecs" rows="3" type="text" placeholder="Product Short Describtion" class="form-control">
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Product Long Describtion</label>
                        <textarea name="longdecs" rows="5" type="text" placeholder="Product Long Describtion" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Pirce</label>
                        <input name="price" type="text" placeholder="Price" class="form-control">

                    </div>
                    <div class="mb-3">

                        <label class="form-label">Product Image</label>
                        <input name="p_img" type="file" placeholder="Product IMAGE" class="form-control">

                    </div>
                    <select name="color" class='form-control form-select'>
                        <?php
                        include('config.php');

                        $sql = "SELECT * FROM `product_color`;";
                        $result = mysqli_query($con, $sql) or die("Error Qurey");

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<option value='$row[color_id]'>$row[color_name]</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <select name="Catagorey" class='form-control form-select'>
                        <?php
                        include('config.php');

                        $sql = "SELECT * FROM `product_catageroy`;";
                        $result = mysqli_query($con, $sql) or die("Error Qurey");

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<option value='$row[cata_id]'>$row[cata_name]</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <select name="statuss" class='form-control form-select'>
                        <option value="0">In Stock</option>
                        <option value="1">Out Stock</option>
                    </select>
                    <br>

                    <button name="addcata" type="submit" class="btn btn-outline-primary">Add Product</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
    <?php
    include('config.php');

    if (isset($_POST['addcata'])) {
        $pname = $_POST['pname'];
        $pshortdecs = $_POST['shortdecs'];
        $plongdecs = $_POST['longdecs'];
        $color = $_POST['color'];
        $Catagorey = $_POST['Catagorey'];
        $status = $_POST['statuss'];
        $price = $_POST['price'];

        $name = $_FILES['p_img']['name'];

        $tempname = $_FILES['p_img']['tmp_name'];

        $type = $_FILES['p_img']['type'];

        if ($type == 'image/png' || 'image/jpeg' || 'image/jpg') {

            $sql = "INSERT INTO product (ptitle,pshortdes,plongdes,pthumbnail,color_id,cata_id,statuss,Pprice)
            VALUES('$pname','$pshortdecs','$plongdecs','$name',$color,$Catagorey,'$status','$price');";
            $result = mysqli_query($con, $sql);
            if ($result) {
                move_uploaded_file($tempname, 'productimg/' . $name);
                echo "<script>
                location.href = 'listproduct.php' ;
                </script>";
            } else {
                echo "<script>
                location.hreff='addproduct.php';
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