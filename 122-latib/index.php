```php
<?php get_header(); ?>
<div class="content-area">
<main>
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
get_template_part( 'template-parts/content', get_post_format() );
endwhile;
endif;
?>
</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>