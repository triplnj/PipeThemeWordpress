<article id="post-<?php the_ID(); ?>" class="">

<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time( 'F j, Y' ); ?> at <?php the_time( 'g:i a' );
?></small>

<p><?php the_content(); ?></p>

</article>
