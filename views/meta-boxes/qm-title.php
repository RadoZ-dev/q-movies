<?php
global $post;
$qmTitleMeta = get_post_meta( $post->ID, 'movie_title', true );
?>

<input type="text" name="movie_title" value="<?php echo esc_attr( $qmTitleMeta ) ?>">