<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <p style="font-size: 40px;">DETTA ÄR EN CHAT</p>

	<?php
		get_template_part( 'post', 'title' );
		the_post_thumbnail();
		the_shortlink();
	?>
</article>
