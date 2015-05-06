<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
	<?php query_posts('showposts=1'); $ids = array(); while ( have_posts() ) : the_post(); $ids[] = get_the_ID(); // start loop one to show just the first post ?>
    <article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'large-feed'); ?></a>
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
    <p class="post-date"><?php get_durkees_date(); ?></p>
    <p class="post-categories"><?php the_category(', '); ?></p>
    <p class="post-tags"><?php the_tags('','',''); ?></p>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'medium'); ?></a>
    <p class="post-excerpt"><?php echo substr(get_the_excerpt(), 0,150); // get page or posting written excerpt with a character count ?>... </p>
    <p class="post-link"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More</a></p>    
    </article>
    <?php endwhile; wp_reset_query(); // end loop one ?>
	<?php query_posts(array('post__not_in' => $ids)); while ( have_posts() ) : the_post(); // start loop to show second post and on ?>
    <article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?></a>
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
    <p class="post-date"><?php get_durkees_date(); ?></p>
    <p class="post-categories"><?php the_category(', ') ?></p>
    <p class="post-tags"><?php the_tags('','',''); ?></p>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'medium'); ?></a>
    <p class="post-excerpt"><?php echo substr(get_the_excerpt(), 0,150); // get page or posting written excerpt with a character count ?>... </p>
    <p class="post-link"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More</a></p>    
    </article>
    <?php endwhile; wp_reset_query(); // end the loop ?>    
    <?php /*echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="10" pause="true"]');*/ ?>
</div>
<!-- End Content -->
    
<?php get_footer(); ?>