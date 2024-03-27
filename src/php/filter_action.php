<?php
// database connection
include('data_conn.php');

error_reporting(0);


$action = $_POST['action'];
$selected_category = $_POST['selected_category'];
$selected_manufacturer = $_POST['selected_manufacturer'];
$selected_cpu_brand = $_POST['selected_cpu_brand'];
$selected_ram_size = $_POST['selected_ram_size'];
$selected_storage_size = $_POST['selected_storage_size'];

$filter_query = "SELECT * FROM laptop WHERE laptop_id != ''";

if (!empty($selected_category)) {
    $category_query = "category IN ('" . implode("', '", $selected_category) . "')";
    $filter_query .= " AND " . $category_query;
}

if (!empty($selected_manufacturer)) {
    $manufacturer_query = "manufacturer IN ('" . implode("', '", $selected_manufacturer) . "')";
    $filter_query .= " AND " . $manufacturer_query;
}

if (!empty($selected_cpu_brand)) {
    $cpu_brand_query = "cpu_brand IN ('" . implode("', '", $selected_cpu_brand) . "')";
    $filter_query .= " AND " . $cpu_brand_query;
}

if (!empty($selected_ram_size)) {
    $ram_size_query = "ram_size IN ('" . implode("', '", $selected_ram_size) . "')";
    $filter_query .= " AND " . $ram_size_query;
}

if (!empty($selected_storage_size)) {
    $storage_size_query = "storage_size IN ('" . implode("', '", $selected_storage_size) . "')";
    $filter_query .= " AND " . $storage_size_query;
}

$result_filter = $conn->query($filter_query);

$output = '';

if ($result_filter->num_rows > 0) {
    while ($row_filter = $result_filter->fetch_assoc()) {
        $output .= '
        <!-- product card -->
        <div class="card" id="modal">
            <div class="card-body">
                <!-- product image -->
                <img src="' . $row_filter['image_url'] . '" class="card-image">
                <!-- product title -->
                <a class="card-title">' . $row_filter['manufacturer'] . ' ' . $row_filter['model_name'] . '</a>
                <!-- product specifications -->
                <div class="card-specs">
                    Specifications
                    <br>
                    Processor: ' . $row_filter['cpu_brand'] . ' ' . $row_filter['cpu_name'] . '
                    <br>
                    Graphics: ' . $row_filter['gpu_brand'] . ' ' . $row_filter['gpu_name'] . '
                    <br>
                    VRAM: ' . $row_filter['vram'] . ' MB
                    <br>
                    RAM: ' . $row_filter['ram_size'] . ' GB | ' . $row_filter['ram_speed'] . ' MHz
                    <br>
                    Storage: ' . $row_filter['storage_type'] . ' | ' . $row_filter['storage_size'] . ' GB
                    <br>
                    <!-- product price -->
                    <span class="card-price">$' . $row_filter['price'] . '</span>
                </div>
            </div>
        </div>';
    }
}

else {

    $output = 'No Matches';
}

// send the HTML output back to AJAX
$response = $output;
echo json_encode($response);