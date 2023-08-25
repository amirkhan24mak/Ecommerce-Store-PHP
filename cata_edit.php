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
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `product_catageroy` where cata_id = $id";
    $run_query = mysqli_query($con, $sql);
    $fetch_data = mysqli_fetch_assoc($run_query);

    ?>
    <?php include('style/navbar.php') ?>

    <div class="container my-5 w-50 border  p-3">



        <h1 class="text-center">Update Catagory</h1>



        <img src="<?php echo 'images/' . $fetch_data['cata_img'] ?>" class="rounded-circle my-3 ms-4" alt="working" width="50px">


        <form action="" method="POST" enctype="multipart/form-data">
            <label class="form-label">Update name</label>
            <input name="update" type="text" placeholder="Update the Catagery" value="<?php echo "$fetch_data[cata_name]" ?>" class="form-control">
            <input name="hide" type="hidden" value="<?php echo $fetch_data['cata_img']  ?>">
            <div class="mt-3">
                <label class="form-label">Change Thumbnail</label>
                <input name="imgs" type="file" class="form-control">
            </div>
            <button type="submit" name="edit" class="my-2 btn btn-outline-primary d-block m-auto">Update Catageory</button>
        </form>


    </div>

    <?php
    if (isset($_POST['edit'])) {
        $updated = $_POST['update'];
        $old = $_POST['hide'];
        if (isset($_FILES['imgs'])) {
            $cat_img = $_FILES['imgs']['name'];
            $cat_tmp = $_FILES['imgs']['tmp_name'];
            $cat_tpye = $_FILES['imgs']['type'];
            $update = "UPDATE product_catageroy set cata_name = '$updated' ,cata_img = '$cat_img' where cata_id = $id ; ";
            $update_result = mysqli_query($con, $update);
            if ($update_result) {
                move_uploaded_file($cat_tmp, 'images/' . $cat_img);
                unlink('images/' . $old);
                echo "<script>
    alert('Data is Updated Successfully');
    location.href= 'listcatageroy.php';
    
    </script>";
            } else {

                $update = "UPDATE product_catageroy set cata_name = '$updated' ,cata_img = '$old' where cata_id = $id ; ";
                $update_result = mysqli_query($con, $update);
                if ($update_result) {
                    echo "<script>
                    location.href= 'listcatageroy.php';
            </script>";
                }
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