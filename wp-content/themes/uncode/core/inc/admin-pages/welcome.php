<?php
/**
 * Admin View: Page - Status Report
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function uncode_let_to_num( $size ) {
  $l   = substr( $size, -1 );
  $ret = substr( $size, 0, -1 );
  switch ( strtoupper( $l ) ) {
    case 'P':
      $ret *= 1024;
    case 'T':
      $ret *= 1024;
    case 'G':
      $ret *= 1024;
    case 'M':
      $ret *= 1024;
    case 'K':
      $ret *= 1024;
  }
  return $ret;
}

?>

<div class="wrap uncode-wrap">

	<h1><?php echo esc_html__( "Welcome to ", "uncode" ) . '<span class="uncode-name">'.UNCODE_NAME.'</span>'; ?><span class="uncode-version"><?php echo UNCODE_VERSION; ?></span></h1>

	<div class="about-text">
		<?php printf(wp_kses(__( "%s is up and running! Check that all the requirements below are fulfilled and labeled in green.<br>Enjoy and free your imagination with %s!", "uncode" ), array( 'br' => '')), UNCODE_NAME, UNCODE_NAME); ?>
	</div>
	<h2 class="nav-tab-wrapper">
    <?php
			printf( '<a href="%s" class="nav-tab nav-tab-active">%s</a>', admin_url('admin.php?page=uncode-options'), esc_html__( "System Status", "uncode" ) );
			printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=one-click-demo' ), esc_html__( "Install Demo", "uncode" ) );
			printf( '<a href="%s" class="nav-tab">%s</a>', admin_url('admin.php?page=uncode-options'), esc_html__( "Theme Options", "uncode" ) );
			printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=ot-settings' ), esc_html__( "Option Tools", "uncode" ) );
			printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=uncodefont' ), esc_html__( "Install Fonts", "uncode" ) );
      printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=uncodefont-settings' ), esc_html__( "Font Sources", "uncode" ) );
      printf( '<a href="%s" class="nav-tab" target="_blank">%s</a>', '//www.undsgn.com/uncode/documentation/', esc_html__( "Documentation", "uncode" ) );
		?>
	</h2>
	<table class="widefat" cellspacing="0" id="status">
		<thead>
			<tr>
				<th colspan="3" data-export-label="WordPress Environment"><?php esc_html_e( 'WordPress Environment', 'uncode' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-export-label="Frontend stylesheet"><?php esc_html_e( 'Frontend stylesheet', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'Uncode is generating a stylesheet when the options are saved. The file must be writtable.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php
					global $wp_filesystem;
					if (empty($wp_filesystem)) {
					    require_once (ABSPATH . '/wp-admin/includes/file.php');
					    WP_Filesystem();
					}
					$access_type = get_filesystem_method();
					$front_css = get_template_directory() . '/library/css/style-custom.css';
					if ($access_type === 'direct') {
						if ( @fopen( $front_css, 'a' ) ) {
							echo '<mark class="yes">' . '&#10004; <code>' . $front_css .'</code></mark> ';
						} else {
							printf( '<mark class="error">' . '<i class="fa fa-cross"></i> - ' . wp_kses(__( 'To allow the correct style to work, make <code>%s</code> writable.', 'uncode' ), array( 'code' => '' )) . '</mark>', $front_css );
						}
					} else {
						printf( '<div style="color:#0073aa;">' . '&#10004; - ' . wp_kses(__( 'WordPress doesn\'t have direct access to this file <code>%s</code> due to a confict in the Uncode folder permission or your configuration of WordPress file access is not the direct method. The custom css will be output inline.', 'uncode' ), array( 'code' => '' )) . '</div>', $front_css  );
					}
				?></td>
			</tr>
			<tr>
				<td data-export-label="Font stylesheet"><?php esc_html_e( 'Backend stylesheet', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'Uncode is generating a stylesheet when the options are saved. The file must be writtable.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php
				$back_css = get_template_directory() . '/core/assets/css/admin-custom.css';
					if ($access_type === 'direct') {
						if ( @fopen( $back_css, 'a' ) ) {
							echo '<mark class="yes">' . '&#10004; <code>' . $back_css .'</code></mark> ';
						} else {
							printf( '<mark class="error">' . '<i class="fa fa-cross"></i> - ' . wp_kses(__( 'To allow the correct style to work, make <code>%s</code> writable.', 'uncode' ), array( 'code' => '' )) . '</mark>', $back_css );
						}
					} else {
						printf( '<div style="color:#0073aa;">' . '&#10004; - ' . wp_kses(__( 'WordPress doesn\'t have direct access to this file <code>%s</code> due to a confict in the Uncode folder permission or your configuration of WordPress file access is not the direct method. The custom css will be output inline.', 'uncode' ), array( 'code' => '' )) . '</div>', $back_css  );
					}
				?></td>
			</tr>
			<tr>
				<td data-export-label="WP Version"><?php esc_html_e( 'WP Version', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'The version of WordPress installed on your site.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php bloginfo('version'); ?></td>
			</tr>
			<tr>
				<td data-export-label="WP Multisite"><?php esc_html_e( 'WP Multisite', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'Whether or not you have WordPress Multisite enabled.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php if ( is_multisite() ) echo '&#10004;'; else echo '&ndash;'; ?></td>
			</tr>
			<tr>
				<td data-export-label="WP Memory Limit"><?php esc_html_e( 'WP Memory Limit', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'The maximum amount of memory (RAM) that your site can use at one time.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php
					$memory = uncode_let_to_num( WP_MEMORY_LIMIT );

					if ( $memory < 67108864 ) {
						echo '<mark class="error">' . sprintf( wp_kses(__( '%s - We recommend setting memory to at least 64MB. See: <a href="%s" target="_blank">Increasing memory allocated to PHP</a>', 'uncode' ), array( 'a' => array( 'href' => array(),'target' => array() ) ) ), size_format( $memory ), 'http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP' ) . '</mark>';
					} else {
						echo '<mark class="yes">' . size_format( $memory ) . '</mark>';
					}
				?></td>
			</tr>
			<tr>
				<td data-export-label="Server Memory Limit"><?php esc_html_e( 'Server Memory Limit', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'This is actually the real memory available for your installation despite the WP memory limit.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td class="real-memory">
					<span class="calculating"><?php esc_html_e( 'Calculating…', 'uncode' ); ?></span>
					<mark class="yes" style="display: none;">%d% MB</mark>
					<mark class="error" style="display: none;"><?php esc_html_e( 'You only have %d% MB available and it\'s not enough to run the system. If you have already increased the memory limit please check with your hosting provider for increase it (at least 64MB is required).','uncode' ); ?></mark>
				</td>
			</tr>
			<tr>
				<td data-export-label="WP Debug Mode"><?php esc_html_e( 'WP Debug Mode', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'Displays whether or not WordPress is in Debug Mode.', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php if ( defined('WP_DEBUG') && WP_DEBUG ) echo '<mark class="yes">' . '&#10004;' . '</mark>'; else echo '&ndash;'; ?></td>
			</tr>
			<tr>
				<td data-export-label="Language"><?php esc_html_e( 'Language', 'uncode' ); ?>:</td>
				<td class="help"><?php echo '<a href="#" class="help_tip" data-tip="' . esc_attr__( 'The current language used by WordPress. Default = English', 'uncode' ) . '">[?]</a>'; ?></td>
				<td><?php echo get_locale() ?></td>
			</tr>
		</tbody>
	</table>
</div>

<script type="text/javascript">

	jQuery( document ).ready( function ( $ ) {
		$( '.help_tip' ).tipTip({
			attribute: 'data-tip'
		});

		$( 'a.help_tip' ).click( function() {
			return false;
		});

		$.ajax({
			type : 'post',
			url: '<?php echo get_template_directory_uri(); ?>/core/inc/admin-pages/testmemory.php',
			success: function(response) {
				var get_memory_array = String(response).split('\n'),
					get_memory;
				$(get_memory_array).each(function(index, el) {
					var temp_memory = el.replace( /^\D+/g, '');
					if ('%'+temp_memory == el) get_memory = temp_memory;
				});
				var	memory_string;
				if (get_memory < 64) {
					memory_string = $('.real-memory .error');
				} else {
					memory_string = $('.real-memory .yes');
				}
				memory_string.text(memory_string.text().replace("%d%", get_memory));
				$('.calculating').hide();
				memory_string.show();
			},
			error: function(response) {
				var get_memory_array = String(response.responseText).split('\n'),
					get_memory;
				$(get_memory_array).each(function(index, el) {
					var temp_memory = el.replace( /^\D+/g, '');
					if ('%'+temp_memory == el) get_memory = temp_memory;
				});
				var	memory_string;
				if (get_memory < 64) {
					memory_string = $('.real-memory .error');
				} else {
					memory_string = $('.real-memory .yes');
				}
				memory_string.text(memory_string.text().replace("%d%", get_memory));
				$('.calculating').hide();
				memory_string.show();
			}
		});

	});

</script>