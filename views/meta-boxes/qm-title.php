<?php
global $post;
$qmTitleMeta = get_post_meta( $post->ID, 'qm-title', true );
?>

<input type="text" name="qm-title" value="<?php echo esc_attr( $qmTitleMeta ) ?>">