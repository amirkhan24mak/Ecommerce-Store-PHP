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


<h2 class="text-center" style="padding-top: 50px;">Color List</h2>
    <div class="container" style="padding-left: 25%;">
        <div class="row">
            <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Catagroy ID</th>
                        <th scope="col">Catagroy Images</th>
                        <th scope="col"> Catagroy Name </th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

<?php 
include('config.php');

$sql = "SELECT * from product_catageroy";
$result = mysqli_query($con, $sql) or die('qurey expire');

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo'
         
         <tr>
         <td>'.$row['cata_id'].'</td>
         <td><img src="'.'images/'.$row['cata_img'].'" width="70px" alt="cate image was not found"></td>
         <td>'.$row['cata_name'].'</td>
         
         <td>
            <a class="btn btn-outline-primary" href="cata_edit.php?id='.$row['cata_id'].'">Edit</a>
         </td>
         <td>
            <a class="btn btn-outline-danger" href="cata_delete.php?id='.$row['cata_id'].'">Delete</a>
         </td>
      </tr>';

    }

} else {
    echo "<h2> Not Found</h2>";
}

?>


                </tbody>

            </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php include('style/js.php');?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>