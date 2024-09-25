<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <!-- Menampilkan judul artikel -->
            <h1><?php the_title(); ?></h1>

            <!-- Menampilkan konten artikel -->
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <!-- Pesan jika tidak ada postingan -->
        <p>Konten tidak ditemukan.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
