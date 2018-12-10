<?php
/**
 * JavaScript file
 *
 * Main javascript file for plugin
 *
 * @category   Components
 * @package    WordPress
 * @subpackage LynGro
 */

?>

<?php
if ( ! isset( $lyngro_options['apikey'] ) || empty( $lyngro_options['apikey'] ) ) {
	return;
}
?>

<!-- START LynGro Include: Standard -->
<?php if ( ! empty( $lyngro_options['api_secret'] ) ) : ?>
<?php endif; ?>

<script data-cfasync="false">
	       (function (s, l, d, a) {
            var h = d.location.protocol, i = l + "-" + s, td = new Date(),
                dt = td.getFullYear() + '-' + (td.getMonth() + 1) + '-' + td.getDate();
            f = d.getElementsByTagName(s)[0],
                e = d.getElementById(i), u = "pixel.lyngro.com";
            if (e) return;
            e = d.createElement(s); e.id = i; e.async = true;
            e.src = h + "//" + u + "/" + l + "/lg.js?v=" + dt; e.setAttribute('data-domain', a);
            f.parentNode.insertBefore(e, f);
        })("script", "lyngro", document, "<?php echo esc_html( $lyngro_options['apikey'] ); ?>");

</script>

<!-- END LynGro Include: Standard -->
