<section id="webdoor" class="flexslider">
  <ul class="slides">
	<?php 
		$args = array('post_type' => 'webdoor', 'order' => 'ASC');
		$query = new WP_Query($args);
		if($query->have_posts()=="1"){
			while($query -> have_posts()) : $query -> the_post();
				echo "<li>";
				if(get_field('tera_url')=="Sim"){
					echo '<a class="b" href="http://'.get_field('url').'" title="'.get_the_title().'" target="_blank"><img class="b" src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'"/></a>';
				} else {
					echo '<img class="b" src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'"/>';
				}
				echo "</li>";
			endwhile; 
			wp_reset_query();
		}
	?>
  </ul>
</section>
<section id="destaques" class="b">
	<div class="wrap">
		<ul class="flex">
			<?php 
			// DESTAQUES
			// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			// $query = new WP_Query( array( 'post_type' => array('post', 'eventos'), 'posts_per_page' => 3, 'offset' => $offset, 'order' => 'ASC', 'meta_key' => 'destaque', 'meta_value' => 'Sim'));
			// if($query->have_posts()=="1"){
			// 	while ( $query->have_posts() ) : $query->the_post();
			// 	echo '<li onclick="window.open('; 
			// 			echo "'".get_the_permalink()."', '_top')";
			// 		echo '" class="flex33">
			// 			<div class="b">
			// 				<h2 class="b">'; 
			// 				switch (get_post_type($post->ID)) {
			// 					case 'post':
			// 						echo "Blog";
			// 						break;
			// 					default:
			// 						echo "Eventos";
			// 						break;
			// 				}
			// 				echo '</h2>';
			// 				if(wp_get_attachment_url(get_post_thumbnail_id($post->ID))){
			// 					echo '<div class="b thumb" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"></div>';
			// 				}
			// 				if(get_the_content()){
			// 					echo '<h1 class="b">'.get_the_title().'</h1>
			// 					<p class="b">'; 
			// 					if(get_field('teaser')){
			// 						echo get_field('teaser');
			// 					} else {
			// 						echo substr(get_the_content(), 0, 140);
			// 					}
			// 					echo '</p>';
			// 				} else {
			// 					echo '<p class="b">'.get_the_title().'</p>';
			// 				}
			// 				echo '
			// 			</div>
			// 		</li>
			// 		';
			// 	endwhile; 
			// 	wp_reset_query();  
			// }	
	            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	            $offset = 0;
	            $args = array('post_type' => 'destaque', 'posts_per_page'=>3, 'offset' => $offset, 'order' => 'ASC');
	            $query = new WP_Query($args);

				if($query->have_posts()=="1"){
					while($query -> have_posts()) : $query -> the_post();
						if(get_field('tera_url')=="Sim"){
				        	echo '<li class="flex33" onclick="window.open';
				        	echo "('http://".get_field('url')."', '_blank')";
				        	echo '"><div class="b">';
						} else {
				        	echo '<li class="flex33" onclick="window.open';
				        	echo "('".get_the_permalink()."', '_top')";
				        	echo '"><div class="b">';
						}
						if(get_field('somente_imagem')=="Sim"){
							echo '<h2 class="b">'.get_field('subtitulo').'</h2>';
							echo '<img class="b" src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'"/>';
						} else {
							echo '<h2 class="b">'.get_field('subtitulo').'</h2>';
							echo '<img class="b" src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'"/>';
							echo '<h1 class="b">'.get_the_title().'</h1><p class="b">'.get_the_content().'</p>';
						}
						echo "</div></li>";
					endwhile; 
					wp_reset_query();
				}
			?>			
		</ul>
	</div>
</section>
