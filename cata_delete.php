<?php
include('config.php');

$id = $_GET['id'];
$sql = "DELETE from product_catageroy where cata_id = $id";
$run = mysqli_query($con,$sql);
if($run){
    echo"<script>
    location.href= 'listcatageroy.php';
    </script>";
    }

?>