<?php get_header(); ?>

<main>

    <!-- Section Hero -->
    <section class="hero">
        <h1>Selamat datang di Universitas Gadjah Mada</h1>
        <p>Informasi terbaru, agenda, dan berita.</p>
    </section>

    <!-- Section Berita Terbaru -->
    <section class="news">
        <h2>Berita Terbaru</h2>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
            
            <!-- Pagination (opsional jika diperlukan) -->
            <div class="pagination">
                <?php
                    the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_text' => __( 'Sebelumnya', 'textdomain' ),
                        'next_text' => __( 'Berikutnya', 'textdomain' ),
                    ) );
                ?>
            </div>

        <?php else : ?>
            <p>Belum ada berita terbaru.</p>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
