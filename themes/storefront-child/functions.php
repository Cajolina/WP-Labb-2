<?php

//Tar bort sidebar genom filter
remove_action('woocommerce_sidebar', 'remove_sidebar');

function remove_sidebar()
{
    return false;
}
add_filter('is_active_sidebar', 'remove_sidebar', 10, 2);
