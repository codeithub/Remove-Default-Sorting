add_action( 'wp', 'codeithub_remove_default_sorting_storefront' );
  
function codeithub_remove_default_sorting_storefront() {
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}
