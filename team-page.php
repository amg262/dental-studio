<?php
/*
 * Template Name: Team
*/
get_header(); ?>
    <div id="carzine_main_content_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="breadcrumbs_and_title">
                        <h1><a title="<?php the_title_attribute(); ?>"
                               href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                        <?php carzine_the_breadcrumb(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div id="carzine_main_content_container">
                        <?php get_template_part('theme_includes/single_page_area'); ?>

                        <?php if (have_rows('members', 'options')):

                            $count = count(get_field('members', 'options'));

                            while (have_rows('members', 'options')) : the_row();

                                // Your loop code
                                $title = get_sub_field('name');
                                $image = get_sub_field('image');
                                $content = get_sub_field('bio');

                                ?>

                                <img src="<?php _e($image['url'], 'dental-studio'); ?>"
                                     alt="<?php _e($image['alt'], 'dental-studio'); ?>"
                                     class="" width="100" height="100"
                                />
                                <h1>
                                    <strong>
                                        <?php echo get_sub_field('title'); ?>
                                    </strong>
                                </h1>

                                <?php

                            endwhile;

                        endif;

                        //$link    = get_sub_field( 'link' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="carzine_sidebar_container">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>