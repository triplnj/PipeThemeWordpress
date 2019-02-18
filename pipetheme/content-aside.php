<h3>ASIDE POST: <?php the_title(); ?></h3>
		
		<small>Posted on: <?php the_time( 'F j, Y' ); ?> at <?php the_time( 'g:i a' ); 

	 
	 if(the_category() ):

	 		the_category();
	 
	 endif;

	 	 ?></small>
		<p><?php the_content(); ?></p>
		 <hr>