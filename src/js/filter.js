$(document).ready(function(){

    filter_data();
    console.log("Current page name:", pageName);

    function filter_data()
    {
        $('.laptop-item').html('<div style="text-align:center;"><img src="https://media.discordapp.net/attachments/1196163965110202440/1222860404804554762/Loading-bar.gif?ex=6617c080&is=66054b80&hm=43b803345d4c746895d2a04e08921d207ad51c0510579764f1777f9da13fbaf2&=" alt="Loading..." /></div>');
        var action = 'fetch_data';
        var category = get_filter('category');
        var manufacturer = get_filter('manufacturer');
        var cpu_brand = get_filter('cpu_brand');
        var gpu_brand = get_filter('gpu_brand');
        var ram_size = get_filter('ram_size');
        var storage_size = get_filter('storage_size');
        var page_name = pageName;

        $.ajax({
            url:"fetch_data.php?page_name=" + page_name,
            method:"POST",
            data:{action:action, category:category, manufacturer:manufacturer, cpu_brand:cpu_brand, gpu_brand:gpu_brand, ram_size:ram_size, storage_size:storage_size, page_name: page_name},
            success:function(data){
                $('.item').html(data);
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
