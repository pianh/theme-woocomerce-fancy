<?php
get_header();
?>
    <div class="content-area">
        <main>
            <section class="lab-blog">
                <div class="container">
                    <div class="row">
                        <?php
                            the_archive_title( '<h1 class="article-title">', '</h1>' );

                            if(have_posts()):
                            while(have_posts()) : the_post();
                                get_template_part( 'template-parts/content', 'archive' );
                            endwhile;
                            the_posts_pagination( array(
                                'prev_text' => 'Previous',
                                'next_text' => 'Next',
                            ) );
                            else:
                                ?>
                                <p>Nothing to display</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php
get_footer()
?>