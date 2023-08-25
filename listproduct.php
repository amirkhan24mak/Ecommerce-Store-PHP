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


    
    <h2 class="text-center" style="padding-top: 50px;">Product List</h2>
    <div class="container" style="padding-left: 13%;">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Short Desc</th>
                            <th scope="col">Long Desc</th>
                            <th scope="col">Images</th>
                            <th scope="col">Color</th>
                            <th scope="col">Catagorey</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include('config.php');

                        $sql = "SELECT * from product inner join product_catageroy on
                        product.cata_id = product_catageroy.cata_id inner join product_color on
                        product.color_id = product_color.color_id";
                        $result = mysqli_query($con, $sql) or die('qurey expire');

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                                <tr>
                                    <td> <?php echo $row['pid']?> </td>
                                    <td> <?php echo $row['ptitle']?> </td>
                                    <td> <?php echo $row['pshortdes']?> </td>
                                    <td> <?php echo $row['plongdes']?> </td>
                                    <td> <img src="productimg/<?php echo $row['pthumbnail']?>" width="70px"></td>
                                    <td> <?php echo $row['color_name']?> </td>
                                    <td> <?php echo $row['cata_name']?> </td>
                                    <td> <?php echo $row['Pprice']?> </td>
                                    <td>
                                        <?php 
                                         if($row['statuss']==1){

                                            echo "<button class='btn btn-outline-danger'>Out Stock</button>";
                                        }
                                        else{
                                            echo" <button class='btn btn-outline-warning'>In Stock</button>";
                                        }
                                        ?>


                                    </td>

                                    <td>
                                        <a href="editproduct.php?id=<?php echo $row['pid'] ?>" class="btn btn-outline-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger" href="delectpro.php?id=' . $row['cata_id'] . '">Delete</a>
                                    </td>
                                </tr>
                        <?php
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
    <?php include('style/js.php'); ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>