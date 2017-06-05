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
                <div class="col-md-12">
                    <div id="carzine_main_content_container">
                        <?php get_template_part('theme_includes/team_page_area'); ?>
                    </div>
                </div>

            <div class="col-md-3">
                <div id="carzine_sidebar_container">
                    <?php //get_sidebar(); ?>
                    <?php //get_sidebar(); ?>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>