<section id="blog" class="b">
	<div class="wrap">
		<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$query = new WP_Query( array( 'post_type' => array('post', 'eventos'), 'posts_per_page' => 1, 'offset' => $offset, 'order' => 'ASC'));
			if($query->have_posts()=="1"){
				while ( $query->have_posts() ) : $query->the_post();
				$do_not_duplicate = $post->ID;
				echo '<div onclick="window.open('; 
						echo "'".get_the_permalink()."', '_top')";
					echo '" id="noticia_destaque" class="flex" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');">
						<div class="flex100">
							<h1 class="b">'.get_the_title().'';
							if(get_post_type($post)=="eventos"){
								echo '<span class="tag">Evento</span>';
							} else {
								echo '<span class="tag tag-news">Notícias</span>';
							}
							echo '</h1>
							<h2 class="b">Postado em '.get_the_date().'</h2>
							<p class="b">'.substr(get_the_content(), 0, 280).'</p>
						</div>
					</div>
					';
				endwhile; 
				wp_reset_query();  
			}
		?>
		<div id="blog_footer" class="flex">
			<div id="noticias" class="flex60">
				<div>
					<h3 class="b">Notícias</h3>
					<div class="noticias">
					  <ul class="slides">
						<?php 
							$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						  	$custom_args = array(
						      'post_type' => 'post',
						      'paged' => $paged, 
						      'order' => 'ASC',
						      'post__not_in' => array($do_not_duplicate)
						    );
						    $custom_query = new WP_Query( $custom_args );
						    if($custom_query->have_posts()=="1"){
							    if ( $custom_query->have_posts() ) :
								    while ( $custom_query->have_posts() ) : $custom_query->the_post();
									echo '<li onclick="window.open('; 
										echo "'".get_the_permalink()."', '_top'";
										echo ')">
											<div class="b" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></div>
											<h3 class="b">'.get_the_title().'</h3>
											<p class="b">'.substr(get_the_content(), 0, 120).'</p>
										</li>
									';
									endwhile;
								    wp_reset_postdata();
							    endif;
							}
						?>	
					  </ul>
					</div>
				</div>
			</div>
			<div id="eventos" class="flex40">
				<div>
					<h3 class="b">Próximos Eventos</h3>
					<ul class="b">
					<?php 
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$query = new WP_Query( array( 'post_type' => 'eventos', 'posts_per_page' => 3, 'offset' => $offset, 'order' => 'ASC'));
						if($query->have_posts()=="1"){
							while ( $query->have_posts() ) : $query->the_post();
									$data = get_field('data', false, false);
									$data = new DateTime($data);
									echo '<li onclick="window.open('; 
										echo "'".get_the_permalink()."', '_top'";
										echo ')">
										<h3 class="b">'.get_the_title().'</h3>
										<p class="b">';
						                  if(get_field('horario')){
						                    echo '<span class="horario">'.get_field('horario').'</span> - ';
						                  }
						                  if(get_field('data')){
						                    echo date_i18n("d/m/Y", strtotime(get_field('data')));
						                  }
						                  if(get_field('local')){
						                    echo '<span class="local"> '.get_field('local').'</span>';
						                  }
										echo '</p>
										<p><a href="'.get_the_permalink().'">Saiba Mais ></a></p>
									</li>';
							endwhile; 
							wp_reset_query();  
						}
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>