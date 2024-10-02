<?php get_header(); ?>
<main>
    <section class="hero">
        <h1>Selamat Datang di Universitas Trunojoyo Madura</h1>
        <p>Informasi Terbaru, Agenda, dan Berita.</p>
    </section>
    <section class="news">
        <h2>Berita Terbaru</h2>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
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