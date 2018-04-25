<div>
	<div class="wrap flex">
		<aside class="flex20">
			<nav>
				<a href="javascript:void(0)" data-value="destaques" title="Destaques"><b>Destaques</b></a>
				<!-- <a href="javascript:void(0)" data-value="todos" title="Todos">Todos</a> -->
				<ul>
					<li><h3><a href="javascript:void(0)" data-value="todos"><b>Tipos</b></a></h3></li>
					<?php
					  $category_ids = get_all_category_ids(); 
					  $args = array('orderby' => 'slug','hide_empty' => FALSE,'parent' => 0);
					  $categories = get_categories( $args );
					  foreach ( $categories as $category ) {
					  	if (strpos($category->name, 'GNSS') !== false || strpos($category->name, 'gnss') !== false) {
						    // echo 'true';
						    echo '<li class="has-gnss"><a href="javascript:void(0)" title="'.$category->name.'" data-type="filtro_por_categoria" data-value="'.$category->slug.'">'.$category->name.'</a></li>';
						} else {
							echo '<li><a href="javascript:void(0)" title="'.$category->name.'" data-type="filtro_por_categoria" data-value="'.$category->slug.'">'.$category->name.'</a></li>';
						}
					  }
					?>
				</ul>
				<ul>
					<li><h3><a href="javascript:void(0)" data-value="marcas"><b>Marcas</b></a></h3></li>
					<?php 
						$args=array('public'   => true,'_builtin' => false);
						$output = 'names'; // or objects
						$operator = 'and';
						$taxonomies=get_taxonomies($args,$output,$operator); 
						if ($taxonomies) {
							foreach ($taxonomies  as $taxonomy ) {
							    $terms = get_terms($taxonomy, array('hide_empty' => false));
							    foreach ( $terms as $term) {
							    	echo "<li><a href='javascript:void(0)' title='".$term->name."' data-type='filtro_por_marca' data-value='".$term->slug."'>".$term->name."</a></li>";
							    }
							}
						}
					?>
				</ul>
			</nav>
		</aside>
		<section class="flex80">
			<ul id="breadcrumbs" class="b">
				<li>Produtos</li>
				<li>Destaques</li>
			</ul>
			<div id="filtro_por_categoria" class="filtro">
				<?php 
					$catargs = array('orderby'=> 'name','order'=> 'ASC'); 
					$categories = get_categories( $catargs );

					foreach ($categories as $category) {
					    $args = array ('post_type'=> 'produto','cat'=> $category->cat_ID,'posts_per_page'=> '-1','order'=> 'ASC','orderby'=> 'title');
					    $query = new WP_Query( $args );

					    if ( $query->have_posts() ) {
					    	if($query->have_posts()=="1"){
					    		echo '<h4 class="b '.$category->slug.'">'.$category->name.'</h4>';
					    		echo '<ul class="cards flex '.$category->slug.'">';
						        while ( $query->have_posts() ) {
						            $query->the_post();
						            $category = get_the_category();
						            $terms = get_the_terms( $post->ID, 'marca' ); 
								    foreach($terms as $term) {
								        echo '<li onclick="document.location='; 
								        echo "'".get_the_permalink()."';return false;";
								        echo '" class="flex flex33'; 
								        if(get_field('destaque')=="Sim"){ echo " destaque "; }
								        echo '">
								      	<div class="flex100 flex">
											<div class="flex100" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></div>
											<div class="flex60"><h3>'.get_the_title().'</h3></div>
											<div class="flex40">
												<p class="b">'.$category[0]->cat_name.'</p>
												<p class="b">'.$term->name.'</p>
											</div>
										</div>
								      	</li>';
								    }
						        }
						        echo '</ul>';
						    }
					    } 
					    wp_reset_postdata();
					}
				?>				
			</div>
			<div id="filtro_por_marca" class="filtro">
				<?php 
					$custom_terms = get_terms('marca');

					foreach($custom_terms as $custom_term) {
					    wp_reset_query();
					    $args = array(
					    	'posts_per_page'=> '-1',
					    	'post_type' => 'produto',
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'marca',
					                'field' => 'slug',
					                'terms' => $custom_term->slug,
					            ),
					        ),
					    );
					    $query = new WP_Query($args);
					    if($query->have_posts()) {
					    	if($query->have_posts()=="1"){
						        echo '<h4 class="b '.$custom_term->slug.'">'.$custom_term->name.'</h4>';
						        echo '<ul class="cards flex '.$custom_term->slug.'">';
						        while($query->have_posts()) : $query->the_post();
						        $terms = get_the_terms( $post->ID, 'marca' ); 
						        $category = get_the_category();
						        foreach($terms as $term) {
								        echo '<li onclick="document.location='; 
								        echo "'".get_the_permalink()."';return false;";
								        echo '" class="flex flex33">
								        <div class="flex100 flex">
								        		<div class="flex100" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></div>
								        		<div class="flex60"><h3>'.get_the_title().'</h3></div>
									        	<div class="flex40">
									        		<p class="b">'.$category[0]->cat_name.'</p>
									        		<p class="b">'.$term->name.'</p>
									        	</div>
									        </div>
							    		</li>';
							    }
						        endwhile;
						        echo '</ul>';
					        }
					    }
					}
				?>				
			</div>
			<div id="filtro_por_destaque" class="filtro">
				<?php 
					$catargs = array('orderby'=> 'name','order'=> 'ASC'); 
					$categories = get_categories( $catargs );

					echo "<h4 class='b'>Destaques</h4>";
					echo '<ul class="cards flex">';
					foreach ($categories as $category) {

					    $args = array ('post_type'=> 'produto','cat'=> $category->cat_ID,'posts_per_page'=> '-1','order'=> 'ASC','orderby'=> 'title','meta_key' => 'destaque','meta_value' => 'Sim');
					    $query = new WP_Query( $args );

					    if ( $query->have_posts() ) {
					    	if($query->have_posts()=="1"){
					    		
						        while ( $query->have_posts() ) {
						            $query->the_post();
						            $category = get_the_category();
						            $terms = get_the_terms( $post->ID, 'marca' ); 
								    foreach($terms as $term) {
								        echo '<li onclick="document.location='; 
								        echo "'".get_the_permalink()."';return false;";
								        echo '" class="flex flex33'; 
								        if(get_field('destaque')=="Sim"){ echo " destaque "; }
								        echo '">
								      	<div class="flex100 flex">
											<div class="flex100" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></div>
											<div class="flex60"><h3>'.get_the_title().'</h3></div>
											<div class="flex40">
												<p class="b">'.$category[0]->cat_name.'</p>
												<p class="b">'.$term->name.'</p>
											</div>
										</div>
								      	</li>';
								    }
						        }
						        
						    }
					    } 
					    wp_reset_postdata();
					}
					echo '</ul>';
				?>				
			</div>
		</section>
	</div>	
</div>