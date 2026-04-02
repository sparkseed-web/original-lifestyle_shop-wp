<?php get_header(); ?>

<h1>u</h1>

<div class="product-list">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="product-item">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
            </a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>