<?php


namespace BigCommerce\Templates;


use BigCommerce\Customizer\Sections;
use BigCommerce\Post_Types\Product\Product;

class Product_Single extends Controller {
	const PRODUCT = 'product';

	const IMAGES      = 'images';
	const TITLE       = 'title';
	const PRICE       = 'price';
	const BRAND       = 'brand';
	const SKU         = 'sku';
	const RATING      = 'rating';
	const DESCRIPTION = 'description';
	const FORM        = 'form';
	const SPECS       = 'specs';
	const RELATED     = 'related';
	const REVIEWS     = 'reviews';
	const MESSAGES    = 'messages';

	protected $template = 'components/product-single.php';

	protected function parse_options( array $options ) {
		$defaults = [
			self::PRODUCT => null,
		];

		return wp_parse_args( $options, $defaults );
	}

	public function get_data() {
		/** @var Product $product */
		$product = $this->options[ self::PRODUCT ];

		return [
			self::PRODUCT     => $product,
			self::TITLE       => $this->get_title( $product ),
			self::IMAGES      => $this->get_images( $product ),
			self::PRICE       => $this->get_price( $product ),
			self::RATING      => $this->get_rating( $product ),
			self::SKU         => $product->sku(),
			self::BRAND       => $this->get_brand( $product ),
			self::DESCRIPTION => $this->get_description( $product ),
			self::FORM        => $this->get_form( $product ),
			self::SPECS       => $this->get_specs( $product ),
			self::RELATED     => $this->get_related( $product ),
			self::REVIEWS     => $this->get_reviews( $product ),
			self::MESSAGES    => $this->get_messages(),
		];
	}

	protected function get_title( Product $product ) {
		$component = new Product_Title( [
			Product_Title::PRODUCT       => $product,
			Product_Title::USE_PERMALINK => false,
		] );

		return $component->render();
	}

	protected function get_images( Product $product ) {
		$component = new Product_Gallery( [
			Product_Gallery::PRODUCT => $product,
		] );

		return $component->render();
	}

	protected function get_price( Product $product ) {
		$component = new Product_Price( [
			Product_Price::PRODUCT => $product,
		] );

		return $component->render();
	}

	protected function get_rating( Product $product ) {
		$component = new Product_Rating( [
			Product_Rating::PRODUCT => $product,
			Product_Rating::LINK    => get_the_permalink( $product->post_id() ) . '#bc-single-product__reviews',
		] );

		return $component->render();
	}

	protected function get_brand( Product $product ) {
		$component = new Product_Brand( [
			Product_Brand::PRODUCT => $product,
		] );

		return $component->render();
	}

	protected function get_description( Product $product ) {
		$component = new Product_Description( [
			Product_Description::PRODUCT => $product,
		] );

		return $component->render();
	}

	protected function get_form( Product $product ) {
		$component = new Product_Form( [
			Product_Form::PRODUCT => $product,
		] );

		return $component->render();
	}

	protected function get_specs( Product $product ) {
		$component = new Product_Specs( [
			Product_Specs::PRODUCT => $product,
		] );

		return $component->render();
	}

	protected function get_related( Product $product ) {
		$max_posts = absint( get_option( Sections\Product_Single::RELATED_COUNT, 4 ) );
		if ( $max_posts < 1 ) {
			return '';
		}

		$related_ids = $product->related_products( [
			'posts_per_page' => $max_posts,
		] );

		if ( empty( $related_ids ) ) {
			return '';
		}

		$related = array_map( function ( $post_id ) {
			$component = new Related_Product( [
				Related_Product::PRODUCT => new Product( $post_id ),
			] );

			return $component->render();
		}, $related_ids );

		$component = new Related_Products_Grid( [
			Related_Products_Grid::PRODUCTS => $related,
		] );

		return $component->render();
	}

	protected function get_reviews( Product $product ) {
		/**
		 * Filter whether to show product reviews for a product.
		 *
		 * @param bool $show    Whether to show reviews. Defaults to true (i.e., reviews are displayed)
		 * @param int  $post_id The ID of the product post
		 */
		if ( ! apply_filters( 'bigcommerce/product/reviews/show_reviews', true, $product->post_id() ) ) {
			return '';
		}

		$reviews = $product->get_reviews();

		$reviews = array_map( function ( $review ) use ( $product ) {
			$controller = new Review_Single( array_merge( [
				Review_Single::PRODUCT => $product,
			], $review ) );

			return $controller->render();
		}, $reviews );

		$controller = new Product_Reviews( [
			Product_Reviews::PRODUCT => $product,
			Product_Reviews::REVIEWS => $reviews,
		] );

		return $controller->render();
	}

	protected function get_messages() {
		return apply_filters( 'bigcommerce/forms/messages', '' );
	}

}