<?php get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="single-post">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span>By <?php the_author(); ?></span>
                    <span>on <?php the_date(); ?></span>
                </div>
                <div class="post-content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
