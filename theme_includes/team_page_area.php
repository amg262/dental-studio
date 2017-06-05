<?php
/***WordPress Loop that brings the single Page***/
?>
<div class="carzine_single_post_container">
    <?php while (have_posts()):the_post(); ?>
        <div id="<?php the_ID(); ?>" class="carzine_single_post <?php post_class(); ?>">
            <div class="carzine_single_post_image">
                <?php if (has_post_thumbnail()):the_post_thumbnail('featured_post_image', array('class' => 'img-responsive'));
                endif;
                ?>
            </div>
            <div class="carzine_single_post_title">

                <div class="carzine_single_post_content">
                    <?php
                    // the_content();


                    ?>
                    <div>
                        <?php if (have_rows('members', 'options')):

                            $count = count(get_field('members', 'options'));

                            while (have_rows('members', 'options')) : the_row();

                                // Your loop code
                                $title = get_sub_field('name');
                                $image = get_sub_field('image');
                                $content = get_sub_field('bio');

                                ?>


                        <div style="margin:10px;display: inline-block">
                                    <img src="<?php _e($image['url'], 'dental-studio'); ?>"
                                         alt="<?php _e($image['alt'], 'dental-studio'); ?>"
                                         class="" width="256" height="256"
                                         style="float:left;margin:0 30px 30px;"
                                    />
                            <div style="display:inline; margin:20px;">

                                        <h2 style="color:#06a2d6;display: inline;">
                                            <?php echo get_sub_field('name'); ?>
                                        </h2>
                                            <?php echo get_sub_field('bio'); ?>


                            </div>
                                </div>
                                <?php

                            endwhile;

                        endif; ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div><!--.single_post ends here-->
    <?php endwhile; ?>
    <div class="carzine_post_pagination">
        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'carzine') . '</span>', 'after' => '</div>')); ?>
    </div>

    <div class="clear"></div>
    <!--Comments-->
    <?php if (comments_open()): ?>
        <div id="carzine_comments_section">
            <?php comments_template('', true); ?>
        </div>
    <?php endif; ?>
</div>