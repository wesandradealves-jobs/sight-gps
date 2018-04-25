<?php 
	echo '
		<section id="webdoor" class="b"><div class="wrap"><h1 class="b">'.get_the_title().'</h1>'.get_the_content().'</div></section>
		<style type="text/css">
			#webdoor::after{
				background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');
			}
		</style>
	';
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$offset = 0;
	$args = array('post_type' => 'parceiro', 'posts_per_page'=>5, 'offset' => $offset, 'order' => 'ASC');
	$query = new WP_Query($args);
	if($query->have_posts()=="1"){
		echo '
			<section id="parceiros" class="b">
				<div class="wrap">
					<ul class="b">';
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
		echo '
					</ul>
				</div>
			</section>';
	}
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$offset = 0;
	$args = array('post_type' => 'servico', 'posts_per_page'=>3, 'offset' => $offset, 'order' => 'ASC');
	$query = new WP_Query($args);
	if($query->have_posts()=="1"){
		echo '<section id="servicos" class="b">
				<div class="wrap">
					<ul class="b flex">';
						while($query -> have_posts()) : $query -> the_post();
						echo '
							<li class="flex33">
								<img class="b" src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'"/>
								<h3 class="b">'.get_the_title().'</h3>
								<p class="b">'.get_the_content().'</p>
							</li>
						';
		endwhile; 
		wp_reset_query();
		echo '
					</ul>
				</div>
			</section>';
	}
?>
