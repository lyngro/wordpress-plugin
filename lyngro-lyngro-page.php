<?php
/**
 * Lyngro Page file
 *
 * This creates a page with lyngro meta data and tracking
 *
 * @category   Components
 * @package    WordPress
 * @subpackage LynGro
 */

?>

<!-- BEGIN wp-lyngro Plugin Version <?php echo esc_html( Lyngro::VERSION ); ?> -->
<meta name="wp-lyngro_version" id="wp-lyngro_version" content="<?php echo esc_attr( Lyngro::VERSION ); ?>"/>
<?php if ( ! empty( $lyngro_page ) && isset( $lyngro_page['headline'] ) ) : ?>
<?php
if ( 'json_ld' === $lyngro_options['meta_type'] ) {
?>
	<script type="application/ld+json">
	<?php echo wp_json_encode( $lyngro_page ); ?>

	</script>

	<?php
} else {
		$post_type = 'NewsArticle' === $lyngro_page['@type'] ? 'post' : 'sectionpage';
	?>
		<meta name="lyngro-title" content="<?php echo esc_attr( $lyngro_page['headline'] ); ?>"/>
		<meta name="lyngro-link" content="<?php echo esc_attr( $lyngro_page['url'] ); ?>"/>
		<meta name="lyngro-type" content="<?php echo esc_attr( $post_type ); ?>"/>
		<meta name="lyngro-image-url" content="<?php echo esc_attr( $lyngro_page['thumbnailUrl'] ); ?>"/>
		<meta name="lyngro-pub-date" content="<?php echo esc_attr( $lyngro_page['datePublished'] ); ?>"/>
		<meta name="lyngro-section" content="<?php echo esc_attr( $lyngro_page['articleSection'] ); ?>"/>
	<?php
	foreach ( $lyngro_page['author'] as $author ) {
	?>
	<meta name="lyngro-author" content="<?php echo esc_attr( $author['name'] ); ?>"/>
		<?php
	}
	?>
<meta name="lyngro-tags" content="<?php echo esc_attr( implode( ',', $lyngro_page['keywords'] ) ); ?>"/>

	<?php

}
if ( isset( $lyngro_page['custom_metadata'] ) ) :
	?>
		<meta name="lyngro-metadata" content="<?php echo esc_attr( $lyngro_page['custom_metadata'] ); ?>"/>
	<?php endif; ?>
<?php else : ?>
	<!-- lyngroPage is not defined / has no attributes.  What kind of page are you loading? -->
<?php endif; ?>
<!-- END wp-lyngro Plugin Version <?php echo esc_html( Lyngro::VERSION ); ?> -->
<?php
