$(document).ready(function () {
    $(".common_selector").click(function () {
        filter_products();
    });

    function filter_products() {
        var category = $(".category:checked").map(function () {
            return $(this).val();
        }).get();

        var manufacturer = $(".manufacturer:checked").map(function () {
            return $(this).val();
        }).get();

        var cpu_brand = $(".cpu_brand:checked").map(function () {
            return $(this).val();
        }).get();

        var ram_size = $(".ram_size:checked").map(function () {
            return $(this).val();
        }).get();

        var storage_size = $(".storage_size:checked").map(function () {
            return $(this).val();
        }).get();

        var action = "filter";
        $.ajax({
            url: "filter_action.php",
            method: "POST",
            data: {
                action: action,
                category: category,
                manufacturer: manufacturer,
                cpu_brand: cpu_brand,
                ram_size: ram_size,
                storage_size: storage_size
            },
            success: function (response) {
                $("#result").html(response);
            }
        });
    }
});