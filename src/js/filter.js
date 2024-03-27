$(document).ready(function(){

    $(".common_selector").click(function(){
        var action = 'data';

        var category = get_filter_text('category');
        var manufacturer = get_filter_text('manufacturer');
        var cpu_brand = get_filter_text('cpu_brand');
        var ram_size = get_filter_text('ram_size');
        var storage_size = get_filter_text('storage_size');

        $.ajax({

            url: 'action.php',
            method: 'POST',
            data: {action: action, category: category, manufacturer: manufacturer, cpu_brand: cpu_brand, ram_size: ram_size, storage_size: storage_size},
            success: function(data) {
                $('#result').html(response);
            }
        });

    });

    function get_filter_text(text_id) {
        var filterData = [];
        $('#' + text_id + ':checked').each(function() {

            filterData.push($('#' + this.value).val());
        });

        return filterData;
    }
});