<?php
/**
 * Template Name: Stores
 *
 * @package Betheme
 * @author Muffin Group
 */

get_header();
?>

<div id="Content">
	<div class="content_wrapper clearfix">

		<!-- .sections_group -->
		<div class="sections_group">

			<div class="section">
				<div class="section_wrapper clearfix">

					<?php
						if( have_posts() ){
							the_post();
// 							get_template_part( 'content', 'page' );
						}
					?>
					<div class="column mcb-column one-third column_placeholder"><div class="placeholder">&nbsp;</div></div>
					<div class="column mcb-column one-third column_column  column-margin-">
						<div class="column_attr clearfix">
							<div class="select-city">
								<!-- <select>
									<?php
										$args = array('child_of' => 28, 'hide_empty' => 0, 'show_option_none' => 'ALL', 'id' => 'cities');
										// if( $categories = get_categories(array('child_of' => 28, 'hide_empty' => 0))){
										// 	echo '<option data-rel="category-all">ALL</option>';
										// 	foreach( $categories as $category ){
										// 		echo '<option data-rel="category-'. $category->slug .'">'. $category->name .'</option>';
										// 	}
										// }
									?>
								</select> -->
								<?php wp_dropdown_categories( $args ); ?>
								<script type="text/javascript">
									var dropdown = document.getElementById("cities");
									function onCatChange() {
										if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
											console.log('selected city: ', dropdown)
										}
									}
									dropdown.onchange = onCatChange;
								</script>
							</div>
						</div>
					</div>
					<div class="column mcb-column one-third column_placeholder"><div class="placeholder">&nbsp;</div></div>
				</div>
			</div>
			<div class="section">
				<div class="section_wrapper clearfix">
					<?php
						if ($posts = get_posts( array( 'category' => 28 ) )) {
							$output = '';
							foreach ($posts as $post) {
								$title = get_the_title($post);
								$output .= '<div class="column mcb-column one-third column_column  column-margin-">';
									$output .= '<div class="item">';
										$output .= '<div class="titlebox">';
											$output .= '<img class="col" src="https://www.koithe.com/cache/40/40/uploads-brands-59cf0873bc4e9.png" alt="KOI Thé">';
											$output .= '<h3 class="col fz-h6">'. $title .'</h3>';
										$output .= '</div>';
										$output .= '<p class="txt fz-default">'. get_post_meta(get_the_ID(), 'phone_no', true) .'</p>';
										$output .= '<p class="txt fz-default"><a href="'. esc_url( get_permalink() ) .'" target="_blank">'. get_post_meta(get_the_ID(), 'address', true) .'</a></p>';
										$output .= '<a href="'. esc_url( get_permalink() ) .'" target="_blank">More detail</a>';
									$output .= '</div>';
								$output .= '</div>';
							}
							echo $output;
						}
					?>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer();

// Omit Closing PHP Tags
