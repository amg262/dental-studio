<?php
/***********************************************
 * The main template file for the carzine theme
 ***********************************************/

/*

 * Template Name: Homepage

 */
get_header(); ?>
    <div id="carzine_main_content_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carzine_main_content_container">

						<?php if ( get_field( 'slider_shortcode', 'options' ) ) {
							$data = get_field( 'slider_shortcode', 'options'  );
							echo do_shortcode( $data );
						} ?>
						<?php //get_template_part('theme_includes/featured_post_area');?>
						<?php //get_template_part('theme_includes/latest_post_area');?>
                    </div>
                </div>

                <div class="col-md-12">
					<?php if ( have_rows( 'buckets', 'options'  ) ):

						$count = count( get_field( 'buckets', 'options'  ) );

						while ( have_rows( 'buckets', 'options'  ) ) : the_row();

							// Your loop code
							$title   = get_sub_field( 'title' );
							$image   = get_sub_field( 'image' );
							$content = get_sub_field( 'content' );
							$col     = 'col-md-4';

							if ( $count = 1 ) {
								$col = 'col-md-4';
							} else if ( $count = 2 ) {
								$col = 'col-md-6';
							} else if ( $count = 3 ) {
								$col = 'col-md-4';
							} else if ( $count = 4 ) {
								$col = 'col-md-3';
							}

							//$link    = get_sub_field( 'link' ); ?>


                            <div class="<?php _e( $col, 'dental-studio' ); ?>">
                                <h4>
									<?php echo $count;//_e( $content, 'dental-studio' ); ?>

                                </h4>
                                <p>
                                    <img src="<?php _e( $image['url'], 'dental-studio' ); ?>"
                                         alt="<?php _e( $image['alt'], 'dental-studio' ); ?>"
                                         width="128" height="128"/>

									<?php _e( $content, 'dental-studio' ); ?>
                                </p>
                            </div>

						<?php endwhile;

					endif; ?>
                </div>

                <div class="col-md-12">

                    <div id="carzine_main_content_container">

						<?php get_template_part( 'theme_includes/single_page_area' ); ?>
                    </div>

                </div>
                <div class="col-md-9">
                    <div id="carzine_main_content_container">
						<?php //get_template_part('theme_includes/featured_post_area');?>
						<?php //get_template_part( 'theme_includes/latest_post_area' ); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="carzine_sidebar_container">
						<?php //get_sidebar(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="carzine_sidebar_container">
					<?php //get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>