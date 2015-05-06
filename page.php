<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article id="page-<?php the_ID(); ?>" class="page">
    <h1><?php the_title(); // get the page or posting title ?></h1>
    <?php the_content(''); // get page or posting written content ?>
    </article>
    <?php endwhile; endif; // end the loop ?>
    
</div>
<!-- End Content -->

<?php get_footer(); ?>