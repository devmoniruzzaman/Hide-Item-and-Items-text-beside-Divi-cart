
add_filter('ngettext_with_context', 'change_woocommerce_item_text', 20, 6);

function change_woocommerce_item_text($translation, $single, $plural, $number, $context, $domain) {
    if ($domain == 'Divi' && ($translation == '%1$s Item' || $translation == '%1$s Items')) {
        return '%1$s';
    }
    return $translation;
}
