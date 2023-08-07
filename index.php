<head>
    <title>CURD</title>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'/>
</head>

<?php
include "config/config.php";

if(isset($_POST['submit'])) {
    $product_name = $_POST["product-name"];
    $description =  $_POST["description"];
    $price =  $_POST["price"];

    $query = "INSERT INTO `product`(`name`, `description`, `price`) VALUES ('$product_name','$description','$price')";

    if(isset($connect)) {
        $result = $connect->query($query);
        $connect->close();
    }
    header("Location: index.php");
}
?>

<div class="form">
    <h1>Product details</h1>
    <form action="#" method="POST">
        <div class="content">
            <div class="inputs">
                <label>Product name :
                    <input name="product-name" type="text">
                </label>
            </div>
            <div class="inputs">
                <label>Description :
                    <input name="description" type="text">
                </label>
            </div>
            <div class="inputs">
                <label>Price :
                    <input name="price" type="number">
                </label>
            </div>
        </div>
        <br>
        <input type="submit" name="submit">
    </form>
</div>
