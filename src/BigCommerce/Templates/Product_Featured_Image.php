<?php


namespace BigCommerce\Templates;


use BigCommerce\Assets\Theme\Image_Sizes;
use BigCommerce\Container\Assets;
use BigCommerce\Customizer\Sections;
use BigCommerce\Post_Types\Product\Product;

class Product_Featured_Image extends Controller {
	const PRODUCT       = 'product';
	const ATTACHMENT_ID = 'attachment_id';
	const IMAGE         = 'image';
	const SIZE          = 'size';

	protected $template = 'components/product-featured-image.php';

	protected function parse_options( array $options ) {
		$defaults = [
			self::PRODUCT       => null,
			self::ATTACHMENT_ID => 0,
			/**
			 * Filter the image size used for product featured images
			 *
			 * @param string $size The image size to use
			 */
			self::SIZE          => apply_filters( 'bigcommerce/template/featured_image/size', Image_Sizes::BC_MEDIUM ),
		];

		return wp_parse_args( $options, $defaults );
	}

	public function get_data() {
		/** @var Product $product */
		$product = $this->options[ self::PRODUCT ];

		$attachment_id = $this->get_attachment_id( $product );

		return [
			self::PRODUCT       => $product,
			self::ATTACHMENT_ID => $attachment_id,
			self::IMAGE         => $this->get_image( $attachment_id ),
		];
	}

	protected function get_attachment_id( Product $product ) {
		if ( ! empty( $this->options[ self::ATTACHMENT_ID ] ) ) {
			return absint( $this->options[ self::ATTACHMENT_ID ] );
		}
		$featured_image = get_post_thumbnail_id( $product->post_id() );
		if ( ! empty( $featured_image ) ) {
			return absint( $featured_image );
		}
		$default = get_option( Sections\Product_Single::DEFAULT_IMAGE, 0 );
		if ( ! empty( $default ) ) {
			return absint( $default );
		}

		return 0;
	}

	protected function get_image( $attachment_id ) {
		if ( $attachment_id ) {
			return wp_get_attachment_image( $attachment_id, $this->options[ self::SIZE ] );
		}

		$component = new Fallback_Image( [] );

		return $component->render();
	}

}