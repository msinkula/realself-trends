<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">

    <h1>Search Results:</h1>
    <?php if (have_posts()) : ?>
    <p>Here's what we found for you...</p>
    <?php while (have_posts()) : the_post(); ?>
    <article class="post-excerpt" id="post-excerpt-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?></a>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-excerpt"><?php echo substr(get_the_excerpt(), 0,150); // get page or posting written excerpt with a character count ?>... </p>
    <p class="post-link"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More</a></p>
    </article>
    <?php endwhile; ?>
    <p>Still not satified? Try a different search?</p>
    <?php else : ?>
    <p>No posts found. Try a different search?</p>
    <?php endif; ?> 
    
</div>
<!-- End Content -->

<!-- Begin Search -->
<div id="search-modal">
<div id="search-modal-box">
<?php get_search_form(); ?>
</div>
</div>
<!-- End Search -->

<?php get_footer(); ?>