<?php
/**
 *  The template for displaying all movies posts.
 */

get_header();

while ( have_posts() ) :
	the_post();

    $movieTitle = get_post_meta( get_the_ID(), 'movie_title', true );
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
            <h1>
                <?php echo $movieTitle; ?>
            </h1>
        </header>

        <div class="entry-content">
            <?php
                the_content();
            ?>
        </div>
    </article>

<?php        
endwhile;

get_footer();
