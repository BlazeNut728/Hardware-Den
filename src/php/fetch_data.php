<?php
include('data_conn.php'); // Include your database connection file
error_reporting(0);

if(isset($_POST["action"]))
{
    $sql = "SELECT * FROM laptop WHERE 1"; // Base query to fetch all data

    // Check if any filter is selected
    if(isset($_POST["category"]))
    {
        $category_filter = implode("','", $_POST["category"]);
        $sql .= " AND category IN('".$category_filter."')";
    }

    if(isset($_POST["manufacturer"]))
    {
        $manufacturer_filter = implode("','", $_POST["manufacturer"]);
        $sql .= " AND manufacturer IN('".$manufacturer_filter."')";
    }

    if(isset($_POST["cpu_brand"]))
    {
        $cpu_brand_filter = implode("','", $_POST["cpu_brand"]);
        $sql .= " AND cpu_brand IN('".$cpu_brand_filter."')";
    }

    if(isset($_POST["ram_size"]))
    {
        $ram_size_filter = implode("','", $_POST["ram_size"]);
        $sql .= " AND ram_size IN('".$ram_size_filter."')";
    }

    if(isset($_POST["storage_size"]))
    {
        $storage_size_filter = implode("','", $_POST["storage_size"]);
        $sql .= " AND storage_size IN('".$storage_size_filter."')";
    }

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            // Output data, you can structure this as needed
            echo '<div class="laptop">'.
                 '<h2>'.$row["name"].'</h2>'.
                 '<p>Category: '.$row["category"].'</p>'.
                 '<p>Manufacturer: '.$row["manufacturer"].'</p>'.
                 '<p>CPU Brand: '.$row["cpu_brand"].'</p>'.
                 '<p>RAM Size: '.$row["ram_size"].' GB</p>'.
                 '<p>Storage Size: '.$row["storage_size"].' GB</p>'.
                 '</div>';
        }
    }
    else
    {
        echo '<div>No data found</div>';
    }
}