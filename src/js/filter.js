$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.laptop-item').html('');
        var action = 'fetch_data';
        var category = get_filter('category');
        var manufacturer = get_filter('manufacturer');
        var cpu_brand = get_filter('cpu_brand');
        var ram_size = get_filter('ram_size');
        var storage_size = get_filter('storage_size');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, category:category, manufacturer:manufacturer, cpu_brand:cpu_brand, ram_size:ram_size, storage_size:storage_size},
            success:function(data){
                $('.laptop-item').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

});
