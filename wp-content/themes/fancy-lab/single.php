<?php
    get_header();
?>
     <div id="primary" class="content-area">
        <div id="main">
            <div class="container">
                <div class="row">
                    <?php
                        while(have_posts()) : the_post();
                            get_template_part( 'template-parts','single' );

                            //If comments are open or we have at least one comment, load up the comment template
                            if(comments_open() || get_comments_number()):
                                comments_template();
                            endif;
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
     </div>
<?php get_footer(); ?>