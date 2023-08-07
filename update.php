<head>
    <title>CURD</title>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css' />
</head>

<?php

include "config/config.php";
$product_id = $_GET['id'];

if(isset($connect) && isset($product_id)) {
    $value = mysqli_query($connect, "SELECT * FROM `product` WHERE `id`={$product_id}");
    if(!empty($value)) {
        $data = mysqli_fetch_assoc($value);
    }
}

if(isset($_POST['update'])) {
    $product_name = $_POST["product-name"];
    $description =  $_POST["description"];
    $price =  $_POST["price"];

    $query = "UPDATE `product` SET `name` = '{$product_name}', `description` = '{$description}', `price` = '{$price}' WHERE `product`.`id` = {$product_id};";

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
                    <input name="product-name" type="text" value="<?php echo $data['name'] ?>">
                </label>
            </div>
            <div class="inputs">
                <label>Description :
                    <input name="description" type="text" value="<?php echo $data['description'] ?>">
                </label>
            </div>
            <div class="inputs">
                <label>Price :
                    <input name="price" type="number" value="<?php echo $data['price'] ?>">
                </label>
            </div>
        </div>
        <br>
        <input type="submit" name="update">
    </form>
</div>
