<?php
get_header();
?>
    <div class="content-area">
        <main>
            <section class="lab-blog">
                <div class="container">
                    <div class="row">
                        <?php
                            if(have_posts()):
                            while(have_posts()) : the_post();
                                ?>
                                <article style="padding: 0">
                                    <h1><?php the_title() ?></h1>
                                    <p><?php the_content(); ?></p>
                                </article>
                                <?php
                            endwhile;
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