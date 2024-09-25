<?php get_header(); ?>
<main>
<section class="hero">
<h1>Selamat datang di Universitas Trunojoyo Madura</h1>
<p>Universitas Trunojoyo Madura (UTM) adalah sebuah perguruan tinggi negeri yang terletak di Kabupaten Bangkalan, Pulau Madura, Provinsi Jawa Timur, Indonesia. UTM didirikan pada tahun 2001, dengan visi menjadi universitas unggul di bidang pengembangan ilmu pengetahuan, teknologi, dan seni yang berbasis kearifan lokal.</p>
</section>
<section class="news">
<h2>Berita Terbaru</h2>
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
?>
<article>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p><?php the_excerpt(); ?></p>
</article>
<?php
endwhile;
endif;
?>
</section>
</main>
<?php get_footer(); ?>