<?php

include "config/config.php";
$product_id = $_GET['id'];

if(isset($connect) && isset($product_id)) {
    $status = mysqli_query($connect, "DELETE FROM product WHERE `id` = {$product_id}");
    header("Location: index.php");
}