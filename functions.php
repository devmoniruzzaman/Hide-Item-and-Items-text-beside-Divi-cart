
add_filter('ngettext_with_context', 'change_woocommerce_item_text', 20, 6);

function change_woocommerce_item_text($translation, $single, $plural, $number, $context, $domain) {
    if ($domain == 'Divi' && ($translation == '%1$s Item' || $translation == '%1$s Items')) {
        return '%1$s';
    }
    return $translation;
}



// Hide number of Theme Builder cart items if cart is empty
add_action( 'wp_footer', function() {
    if ( WC()->cart->is_empty() ) {
        echo '<style type="text/css">.et_pb_menu__cart-count { display: none; }</style>';
    }
});
