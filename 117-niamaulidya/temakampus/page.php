<?php get_header(); ?>
<main>
<h1>Universitas Trunojoyo Madura</h1>
<h1>Nia Maulidya</h1>
<h1>220631100117</h1>
<h1>5F</h1>
<h1> Membuat Tema Kampus </h1>
<h1>Pemrograman CMS</h1>
</h1>
<div class="page-content">
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();the_content();
endwhile;
endif;
?>
</div>
</main>
<?php get_footer(); ?>