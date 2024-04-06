<?php
include('data_conn.php');
error_reporting(0);

if(isset($_POST["action"]))
{
    if($_POST["page_name"] == 'laptop')
    {
        $sql = "SELECT * FROM laptop WHERE 1"; // Base query to fetch all data

        
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

        if(isset($_POST["gpu_brand"]))
        {
            $gpu_brand_filter = implode("','", $_POST["gpu_brand"]);
            $sql .= " AND gpu_brand IN('".$gpu_brand_filter."')";
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
                
                echo'<div class="card" id="modal">'.
                    '<a href="details.php?id='.$row["laptop_id"].'" class="card-link">'. 
                    '<div class="card-body">'.
                    '<img src="'.$row["display_image"].'" class="card-image">'.
                    '<a class="card-title">'.$row["manufacturer"].' '.$row["model_name"].'</a><br>'.
                    '<div class="card-specs">'.
                    'Specifications'.
                    '<br>'.
                    'Processor: '.$row["cpu_brand"].' '.$row["cpu_series"].' '.$row["cpu_name"].'<br>'.
                    'Graphics: '.$row["gpu_brand"].' '.$row["gpu_series"].'<br>'.
                    'VRAM: '.$row["vram"].' MB<br>'.
                    'RAM: '.$row["ram_size"].' GB | '.$row["ram_speed"].' MHz<br>'.
                    'Storage: '.$row["storage_type"].' | '.$row["storage_size"].' GB<br>'.
                    '</div>'.
                    '<a class="card-text">₹ '.$row["price"].'</a>'.
                    '<form action="cart.php" method="POST">'.
                    '<input type="hidden" name="product_id" value="'.$row["laptop_id"].'">'.
                    '<input type="hidden" name="product_name" value="'.$row["manufacturer"].' '.$row["model_name"].'">'.
                    '<input type="hidden" name="price" value="'.$row["price"].'">'.
                    '<input type="hidden" name="display_image" value="'.$row["display_image"].'">'.
                    '<input type="hidden" name="quantity" value="1">'.
                    '<input type="hidden" name="desc" value="'.$row["cpu_brand"].' '.$row["cpu_series"].' '.$row["cpu_name"]. '<br>'. $row["gpu_brand"].' '.$row["gpu_series"].'<br>'. $row["ram_size"].' GB | '.$row["ram_speed"].' MHz<br>'.'">'.
                    '<input type="submit" name="add_to_cart" value="Add To Cart" class="item-submit">'.
                    '</form>'.
                    '<br>'.
                    '</div>'.
                    '</div>';
            }
        }

    }
    if($_POST["page_name"] == 'PC')
    {
        $sql = "SELECT * FROM pc WHERE 1";

        
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

        if(isset($_POST["gpu_brand"]))
        {
            $gpu_brand_filter = implode("','", $_POST["gpu_brand"]);
            $sql .= " AND gpu_brand IN('".$gpu_brand_filter."')";
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
                
                echo'<div class="card" id="modal">'.
                    '<a href="details.php?id='.$row["pc_id"].'" class="card-link">'. 
                    '<div class="card-body">'.
                    '<img src="'.$row["images"].'" class="card-image">'.
                    '<a class="card-title">'.$row["manufacturer"].' '.$row["model_name"].'</a><br>'.
                    '<div class="card-specs">'.
                    'Specifications'.
                    '<br>'.
                    'Processor: '.$row["cpu_brand"].' '.$row["cpu_series"].' '.$row["cpu_name"].'<br>'.
                    'Graphics: '.$row["gpu_brand"].' '.$row["gpu_series"].'<br>'.
                    'VRAM: '.$row["vram"].' MB<br>'.
                    'RAM: '.$row["ram_size"].' GB | '.$row["ram_speed"].' MHz<br>'.
                    'Storage: '.$row["storage_type"].' | '.$row["storage_size"].' GB<br>'.
                    '</div>'.
                    '<a class="card-text">Rs '.$row["price"].'</a>'.
                    '<form action="cart.php" method="POST">'.
                    '<input type="hidden" name="product_id" value="'.$row["pc_id"].'">'.
                    '<input type="hidden" name="product_name" value="'.$row["manufacturer"].' '.$row["model_name"].'">'.
                    '<input type="hidden" name="price" value="'.$row["price"].'">'.
                    '<input type="hidden" name="display_image" value="'.$row["images"].'">'.
                    '<input type="hidden" name="quantity" value="1">'.
                    '<input type="hidden" name="desc" value="'.$row["cpu_brand"].' '.$row["cpu_series"].' '.$row["cpu_name"]. '<br>'. $row["gpu_brand"].' '.$row["gpu_series"].'<br>'. $row["ram_size"].' GB | '.$row["ram_speed"].' MHz<br>'.'">'.
                    '<input type="submit" name="add_to_cart" value="Add To Cart" class="item-submit">'.
                    '</form>'.
                    '<br>'.
                    '</div>'.
                    '</div>';
            }
        }

    }
    
}
else
    {
        echo '<div style = "font-family: Poppins; font-size: 2.6vh; font-style: normal; font-weight: 600; color:#ff8400; padding: 2.0vw; margin-left: 2.0vw;" >No Matches Found</div>';
    }