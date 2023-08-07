<?php
if(isset($connect)) {
    $query = mysqli_query($connect, "SELECT * FROM `product`");
    if(!empty($query)) {
        ?>
        <div class="display-table">
            <table class="table">
                <thead>
                <tr>
                    <th>Product name</th>
                    <th>Product description</th>
                    <th>Product price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        <td><?php echo $data['price']; ?></td>
                        <td> <a class="update" href="update.php?id=<?php echo $data['id'] ?>" >Edit</a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
?>
