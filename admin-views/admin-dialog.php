<?php
/**
 * Admin UI Dialog Template.
 *
 * @package BigCommerce Admin
 *
 * @var string $query_builder_sidebar
 */

?>

<script data-js="bc-shortcode-ui" type="text/template">
	<section class="bc-shortcode-ui" data-js="bc-shortcode-ui-container">

		<?php echo $query_builder_sidebar; ?>

		<div class="bc-shortcode-ui__products-wrapper">

			<section class="bc-shortcode-ui__products" data-js="bc-shortcode-ui-products">
				<div class="bc-shortcode-ui__search">
					<form action="<?php echo esc_url( home_url() ); ?>" method="get" enctype="multipart/form-data" data-js="bc-shortcode-ui-search" class="bc-shortcode-ui__searchform">
						<label for="bcqb-input" class="screen-reader-text"><?php esc_html_e( 'Search for products', 'bigcommerce' ); ?></label>
						<input id="bcqb-input" type="text" placeholder="<?php esc_attr_e( 'Product ID, Name, SKU', 'bigcommerce' ); ?>" class="bc-shortcode-ui__search-input" data-js="bcqb-input">
						<button type="button" class="bc-shortcode-ui-search__submit-button" data-js="bcqb-submit"><?php esc_html_e( 'Search', 'bigcommerce' ); ?></button>
						<button type="button" class="bc-shortcode-ui-search__clear-search" data-js="bcqb-clear"><?php esc_html_e( '(Clear Search)', 'bigcommerce' ); ?> </button>
					</form>
				</div>

				<div class="bc-shortcode-ui__product-grid" data-js="bc-shortcode-ui-query-results"></div>

				<div class="bc-shortcode-ui__product-query-dimmer"></div>

				<div class="bc-shortcode-ui__product-query-loader"></div>
			</section>

			<aside class="bc-shortcode-ui__selected-products" data-js="bc-shortcode-ui-selected-products" role="complementary">
				<h4 class="bc-shortcode-ui__selected-products-title"><?php _ex( 'Products:', 'header for selected products sidebar', 'bigcommerce' ); ?></h4>
				<ul class="bc-shortcode-ui__products-list" data-js="bc-shortcode-ui-product-list"></ul>
			</aside>

			<section class="bc-shortcode-ui__actions">
				<button class="button button-primary button-large" data-js="bc-shortcode-ui-embed-button">
					<?php esc_html_e( 'Embed Product(s)', 'bigcommerce' ); ?>
				</button>
			</section>
		</div>

	</section>
</script>
