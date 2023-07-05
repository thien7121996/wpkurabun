<?php
/**
 * Pagination layout.
 *
 * @package BBase_Code
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'bbase_code_pagination' ) ) {

	function bbase_code_pagination( $args = array(), $class = 'pagination' ) {

		if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( 'Trước', 'tbang_text' ),
				'next_text'          => __( 'Tiếp', 'tbang_text' ),
				'screen_reader_text' => __( 'Posts navigation', 'tbang_text' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
			)
		);

		$links = paginate_links( $args );

		?>

		<nav aria-label="<?php echo $args['screen_reader_text']; ?>">

			<ul class="tb-pagination">

				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="tb-page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
						<?php echo $link; ?>
					</li>
					<?php
				}
				?>

			</ul>

		</nav>

		<?php
	}
}

?>
