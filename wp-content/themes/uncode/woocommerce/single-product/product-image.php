<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

?>
<div class="woocommerce-images images">

	<?php
		if ( has_post_thumbnail() ) {
			$media_id = get_post_thumbnail_id();
			$image_title = esc_attr( get_the_title( $media_id ) );
			$image_attributes = uncode_get_media_info($media_id);
			$image_metavalues = unserialize($image_attributes->metadata);
			$image_resized = uncode_resize_image($image_attributes->guid, $image_attributes->path, $image_metavalues['width'], $image_metavalues['height'], 5, null, false);
			global $adaptive_images, $adaptive_images_async, $adaptive_images_async_blur;
			$media_class = '';
			$media_data = '';
			if ($adaptive_images === 'on' && $adaptive_images_async === 'on') {
				$media_class = ' class="adaptive-async'.(($adaptive_images_async_blur === 'on') ? ' async-blurred' : '').'"';
				$media_data = ' data-uniqueid="'.$media_id.'-'.big_rand().'" data-guid="'.$image_attributes->guid.'" data-path="'.$image_attributes->path.'" data-width="'.$image_metavalues['width'].'" data-height="'.$image_metavalues['height'].'" data-singlew="5" data-singleh="null" data-crop=""';
			}
			$image_link = $image_attributes->guid;
			$image = '<img'.$media_class.' src="'.$image_resized['url'].'" width="'.$image_resized['width'].'" height="'.$image_resized['height'].'" alt=""'.$media_data.' />';

			global $gallery_id;
			$gallery_id = big_rand();

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-options="thumbnail: \''.$image_resized['url'].'\'" data-lbox="ilightbox_gallery-' . $gallery_id . '">%s</a>', $image_link, $image_title, $image ), $post->ID );

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), esc_html__( 'Placeholder', 'woocommerce' ) ), $post->ID );

		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>
