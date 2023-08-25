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
<?php

$pid = $_GET['id'];
$sql = "SELECT * from product where pid = $pid";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$pname = $row['ptitle'];
$pshortdecs = $row['pshortdes'];
$plongdecs = $row['plongdes'];
$pthumbnail = $row['pthumbnail'];
$color = $row['color_id'];
$Catagorey = $row['cata_id'];
$status = $row['statuss'];

?>

<body>
    <?php include('style/navbar.php'); ?>

    <h2 class="text-center" style="padding-top: 50px;">Add Products</h2>
    <div class="container" style="padding-left: 25%;">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label class="form-label">Product Title</label>
                        <input name="pname" type="text" placeholder="Enter the Product" class="form-control" <?php echo $pname ?>>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Product Short Describtion</label>
                        <input name="shortdecs" rows="3" type="text" placeholder="Product Short Describtion" class="form-control" <?php echo $pshortdecs ?>>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Product Long Describtion</label>
                        <textarea name="longdecs" rows="5" type="text" placeholder="Product Long Describtion" class="form-control" <?php echo $plongdecs ?>></textarea>
                    </div>
                    <div class="mb-3">

                        <label class="form-label">Product Image</label>
                        <input name="p_img" type="file" placeholder="Product IMAGE" class="form-control">

                    </div>
                    <img src="productimg/<?php echo $pthumbnail ?>" width="50px" alt="hidden">
                    <input type="hidden" name="oldimg" value="<?php echo $pthumbnail ?>">
                    <select name="color" class='form-control form-select'>
                        <?php
                        include('config.php');

                        $sql = "SELECT * FROM `product_color`;";
                        $result = mysqli_query($con, $sql) or die("Error Qurey");

                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['color_id'] == $color) {
                                $sel = "selected";
                            } else {
                                $sel = "";
                            }

                            echo "<option $sel value='$row[color_id]'>$row[color_name]</option>";
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
                            if ($row['cata_id'] == $Catagorey) {
                                $sel = "selected";
                            } else {
                                $sel = "";
                            }
                            echo "<option $sel value='$row[cata_id]'>$row[cata_name]</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <select name="status" class='form-control form-select'>
                        <?php
                        if ($status == 1) {
                            $sel ="selected";
                        } else {
                            $sel ="";
                        }
                        ?>
                        <option <?php echo $sel ?> value="1">In Stock</option>
                        <option <?php echo $sel ?> value="0">Out Stock</option>
                    </select>
                    <br>

                    <button name="update" type="submit" class="btn btn-outline-primary">Update</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
    <?php
    include('config.php');

    if (isset($_POST['update'])) {
        $pname = $_POST['pname'];
        $pshortdecs = $_POST['shortdecs'];
        $plongdecs = $_POST['longdecs'];
        $color = $_POST['color'];
        $Catagorey = $_POST['Catagorey'];
        $status = $_POST['status'];
        $oldimg = $_POST['oldimg'];

        if ($_FILES['p_img']['name']!= null) {

            // if ($_FILES('p_img')) {

                $name = $_FILES['p_img']['name'];
                $tempname = $_FILES['p_img']['tmp_name'];
                $type = $_FILES['p_img']['type'];

                if ($type == 'image/png' || 'image/jpeg' || 'image/jpg') {

                    $sql = "update product set ptitle = '$pname',pshortdes = '$pshortdecs',plongdes = '$plongdecs',pthumbnail = '$name',color_id = $color,cata_id = $Catagorey,statuss = $status where pid = $pid";
                    $result = mysqli_query($con, $sql) or die("Error Qurey");
                    if ($result) {
                        move_uploaded_file($tempname, 'productimg/' . $name);

                        if($oldimg ==""){}
                        else{
                            unlink('productimg/'.$pthumbnail);
                        }

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
            else{
                $sql = "update product set ptitle = '$pname',pshortdes = '$pshortdecs',plongdes = '$plongdecs',pthumbnail = '$oldimg',color_id = $color,cata_id = $Catagorey,statuss = $status where pid = $pid";
                $result = mysqli_query($con, $sql) or die("Error Qurey");
                if ($result) {

                    echo "<script>
            location.href = 'listproduct.php' ;
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