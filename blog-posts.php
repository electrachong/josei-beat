<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<h2 id="post-<?php the_ID(); ?>">
<a href="./blog/p=<?php the_ID(); ?>">
<?php the_title(); ?></a></h2>
<p><small><?php the_time('F jS, Y') ?> by <strong><?php the_author() ?></strong> </small></p>

<div class="entry">
<?php the_excerpt(); ?>
<p><a href="./blog/p=<?php the_ID(); ?>">Read More</a></p>
</div>

<p class="postmetadata">
Posted in <?php the_category(', ') ?> 
<strong>|</strong>
<?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
    <a href="./blog/p=<?php the_ID(); ?>"> Comment »</a></p>

<!--
<?php trackback_rdf(); ?>
-->

<?php endwhile; ?>

<?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">
<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

 <?php endif; ?>