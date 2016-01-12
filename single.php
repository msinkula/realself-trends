<?php get_header(); ?>

<!-- Begin Content -->
<div id="content" class="post-single">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?> 
    
    <!-- Begin Post Article --> 
    <article id="post-single-<?php the_ID(); ?>" class="post-single">
    
        <!-- Begin Post Meta -->
        <div id="post-meta">
            <h1 class="post-headline"><?php the_title(); // get the page or posting title ?></h1>
            <p class="post-date">Posted by <?php the_author_posts_link(); ?> on <?php get_durkees_date(); ?></p>
            <p class="post-categories"><a href="#"><?php the_category(', ') ?></a></p>
            <p class="post-tags"><?php the_tags('','',''); ?></p>
        </div>
        <!-- End Post Meta -->
        
        <!-- Begin Post Featured Image -->
        
        
        <?php if (get_post_meta($post->ID, 'featured_image', TRUE) == 'extra-large' ) : ?>
            <div id="post-image-extra-large">
                <?php echo get_the_post_thumbnail($page->ID, 'extra-large'); ?>
                <p class="wp-caption-text"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
            </div>
        <?php elseif (get_post_meta($post->ID, 'featured_image', TRUE) == 'none' ) : ?>
            <?php echo '<!-- No Featured Image -->' ?>
        <?php else : ?>
            <div id="post-image-large">
                <?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
                <p class="wp-caption-text"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
            </div>
        <?php endif; ?>
        <!-- End Post Image -->
        
        <!-- Begin Post Content -->
        <div id="post-content">
            <?php the_content(''); // get page or posting written content ?>
        </div>
        <!-- End Post Content -->
    
    </article>
    <!-- End Post Article -->

	<!-- Begin Meta Box -->
	<div id="meta-box">
    
        <!-- Begin Author  -->
        <div id="author-box">
            <p class="author-meta">Posted by <?php the_author_posts_link(); ?></p>
            <p class="post-date"><?php get_durkees_date(); ?></p>
            <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
            <p class="author-description"><?php echo get_the_author_meta('description'); ?></p>
        </div>
        <!-- End Author  -->
        
        <!-- Begin Tags -->
        <div id="tag-box">
            <p class="tag-meta">Tagged With</p> 
            <p class="post-tags"><?php the_tags('','',''); ?></p>
        </div>
        <!-- End Tags -->
    
    </div>
    <!-- End Meta Box -->
    
    <!-- Begin Comments  -->
    <div id="comments-section">
    <?php comments_template(); ?>
    </div>
    <!-- End Comments  -->
    
<?php endwhile; endif; // end the loop ?>

</div>
<!-- End Content -->

<!-- Begin Single Post Navigation -->
<?php $prev_post = get_previous_post(); if (!empty( $prev_post )): ?>
<div id="post-navigation">
    <div id="post-navigation-items">
    <p class="post-navigation-caption">Read Next Article</p>   
    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' ); ?></a>
    <h1><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></h1>
    <p class="post-excerpt"><?php echo substr($prev_post->post_excerpt, 0,150); ?> ...</p>
    <p class="post-link"><a href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="bookmark" title="Permanent Link to <?php echo $prev_post->post_title; ?>">Read More</a></p>
    </div>    
</div>
<?php endif; ?>
<!-- End Single Post Navigation -->
    
<?php get_footer(); ?>