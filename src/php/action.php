<?php

    include('data_conn.php');

    if(isset($_POST["action"]))
    {
    $sql = "SELECT * FROM laptop WHERE laptop_id != ''";

    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
    $query .= "
    AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
    ";
    }
    if(isset($_POST["category"]))
    {
    $category_filter = implode("','", $_POST["category"]);
    $sql .= "AND category IN('".$category_filter."')";
    }
    if(isset($_POST["manufacturer"]))
    {
    $manufacturer_filter = implode("','", $_POST["manufacturer"]);
    $sql .= "AND manufacturer IN('".$manufacturer_filter."')";
    }
    if(isset($_POST["cpu_brand"]))
    {
    $cpu_brand_filter = implode("','", $_POST["cpu_brand"]);
    $sql .= "AND cpu_brand IN('".$cpu_brand_filter."')";
    }
    if(isset($_POST["ram_size"]))
    {
    $ram_size_filter = implode("','", $_POST["ram_size"]);
    $sql .= "AND ram_size IN('".$ram_size_filter."')";
    }
    if(isset($_POST["storage_size"]))
    {
    $storage_size_filter = implode("','", $_POST["storage_size"]);
    $sql .= "AND storage_size IN('".$storage_size_filter."')";
    }

    $statement = $connect->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if($total_row > 0)
    {
    foreach($result as $row)
    {
    $output .= '
    <div class="card">
            <div class="card-body">
                <img src = "' . $row["images"] . '" class="card-image"></img>
                    <a class="card-title">'. $row["manufacturer"]  . '  ' . $row["model_name"] .'</a>
                    <a class="card-text">Rs' .$row["price"]. '</a>
                    <form action="customer_login.php"  method="POST">
                        <input type="submit" value="Add To Cart" class="item-submit">
                    </form>
                    <br>
                </div>
            </div>';
    }
    }
    else
    {
    $output = '<h3>No Data Found</h3>';
    }
    echo $output;
    }

?>
