<div id="carzine_footer_area">    <div class="container">        <div class="row">            <div class="col-md-12">                <div id="carzine_footer_container">                    <div id="carzine_footer_sidebar">                        <div class="row">                            <div class="col-md-12">								<?php if ( have_rows( 'footer_widgets' ) ):									$count = count( get_field( 'footer_widgets' ) );									while ( have_rows( 'footer_widgets' ) ) : the_row();										// Your loop code										$title   = get_sub_field( 'title' );										$content = get_sub_field( 'content' );										$col     = 'col-md-4';										if ( $count = 1 ) {											$col = 'col-md-4';										} else if ( $count = 2 ) {											$col = 'col-md-6';										} else if ( $count = 3 ) {											$col = 'col-md-4';										} else if ( $count = 4 ) {											$col = 'col-md-3';										}										//$link    = get_sub_field( 'link' ); ?>                                        <div class="<?php _e( $col, 'dental-studio' ); ?>">                                            <h4>												<?php echo $count;//_e( $content, 'dental-studio' ); ?>                                            </h4>                                            <p>												<?php _e( $content, 'dental-studio' ); ?>                                            </p>                                        </div>									<?php endwhile;								endif; ?>                            </div>                        </div>                    </div>                </div>            </div>        </div>        <div class="row">            <div class="col-md-12 text-center small">				<?php if ( carzine_option( 'copyright_text', OPTIONS_PREFIX . 'general', '' ) ): ?>					<?php echo wp_kses_post( carzine_option( 'copyright_text', OPTIONS_PREFIX . 'general', '' ) ); ?>				<?php else: ?>                    <p>                        <a class="text-center"                           href="<?php echo esc_url( __( 'http://www.takimithemes.com', 'carzine' ) ); ?>">							<?php printf( __( 'Carzine ', 'carzine' ) ); ?></a> Theme, Powered by WordPress and                        sponsored by <a href="<?php echo esc_url( 'https://www.sdm.gr' ); ?>"                                        target="_blank"><?php echo esc_html__( 'SDM - Digital Marketing Agency', 'carzine' ); ?></a>                    </p>				<?php endif; ?>            </div>        </div>    </div></div></div><?phpwp_footer();?></body></html>