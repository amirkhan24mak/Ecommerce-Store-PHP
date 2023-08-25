<?php
include ('config.php');
$id = $_GET['id'];
$sql = "DELETE from product where pid = $id";
$query = mysqli_query($con,$sql);
echo "<script>
            location.href= 'listcolor.php';
            </script>";

?>