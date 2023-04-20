<?php

//Tar bort sidebar genom filter

remove_action('woocommerce_sidebar', 'remove_sidebar');
add_filter('is_active_sidebar', 'remove_sidebar', 10, 2);
function remove_sidebar()
{
    return false;
}



//Tar bort “Visa resultat” texten bredvid rutan för Standardsortering. Detta görs både uppe på sidan och nere på sidan.  

function my_remove_product_result_count()
{

    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);
}

add_action('after_setup_theme', 'my_remove_product_result_count', 99);

//Tar bort rutan för Standardsortering nere på sidan

function my_remove_catalog_ordering()
{

    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
}

add_action('after_setup_theme', 'my_remove_catalog_ordering', 99);



function free_shipping()
{
    echo '<div class="shipping-info">' . "Fri frakt över 299kr" . '</div>';
}
add_action('storefront_before_content', 'free_shipping');
