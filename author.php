<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">

    <div id="author-box">
    <?php echo get_avatar(get_the_author_meta('ID'), 128); ?>
    <p class="author-meta"><?php the_author_posts_link(); ?></p>
    <p class="author-description"><?php echo get_the_author_meta('description'); ?></p>
    </div>
    
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
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
    <?php endwhile; endif; // end the loop ?>
    <?php /*echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="10" pause="true"]');*/ ?>
    
</div>
<!-- End Content -->
    
<?php get_footer(); ?>