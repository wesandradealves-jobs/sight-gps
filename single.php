<?php get_header(); ?>
<main>
  <?php 
    switch (get_post_type($post)) {
      case 'produto':
        echo '
        <div id="breadcrumbs" class="b">
          <div class="wrap">
            <ul class="b">
              <li><a href="'.site_url().'"/produtos" title="Produtos">Produtos</a></li>
        ';
        $terms = get_the_terms( $post->ID , 'marca' );
        $category = get_the_category();
        if ( have_posts () ) : while (have_posts()):the_post();
        $category = get_the_category();
            foreach ( $terms as $term ) {
              echo '<li>'.$term->name.'</li>';
            }
            echo '<li>'.$category[0]->cat_name.'</li>';
            echo '<li>'.get_the_title().'</li>
            </ul>
          </div>
        </div>
        ';
        echo '
          <section id="webdoor" class="b">
            <div class="wrap">
              <div class="flex">
                <div class="flex50 flex">
                  <div class="flex100">
                    <h1 class="b">'.get_the_title().'</h1>
                    <p class="b">'.get_the_content().'</p>';
                    if(get_field('catalogo')){
                      echo '<a title="Catálogo" href="'.get_field('catalogo').'" class="btn btn_default">Catálogo</a>';
                    } 
                    if(get_field('manual')){
                      echo '<a title="Manual" href="'.get_field('manual').'" class="btn btn_default">Manual</a>';
                    }
                    echo '
                  </div>
                </div>
                <div class="flex50">';
                  if(get_field('segunda_imagem')=="Sim"){
                    echo '<img src="'.get_field('segunda_imagem').'" alt="'.get_the_title().'"/>';
                  } else {
                    echo get_the_post_thumbnail( $child_post->ID, 'post-thumbnail');
                  }
                echo '</div>
              </div>
            </div>
          </section>
        ';
        endwhile;
        endif;
        echo '
          <section id="vitrines" class="flex">';
                $childargs = array('post_type' => 'vitrine','order' => 'ASC');
                $child_posts = get_posts($childargs);
                $child_posts = types_child_posts("vitrine");
                foreach ($child_posts as $child_post) {
                  echo '
                    <div class="flex100">
                      <div class="wrap flex">
                        <div class="flex50">'.get_the_post_thumbnail( $child_post->ID, 'post-thumbnail').'</div>
                        <div class="flex50">
                          <h1 class="b">'.get_the_title($child_post -> ID).'</h1>
                          <p class="b">'.get_the_content($child_post -> ID).'</p>
                        </div>
                      </div>
                    </div>
                  ';
                }
                echo '
          </section>
        ';
        break;
      case 'post':
        echo '
          <div id="breadcrumbs" class="b light-theme">
            <div class="wrap">
              <ul class="b">
                <li><a href="'.site_url().'/blog" title="Blog">Blog</a></li>
                <li>'.get_post_type($post).'</li>
                <li>'.get_the_title().'</li>
              </ul>
            </div>
          </div>
          <section id="post">
            <div class="wrap">';
            if(get_post_thumbnail_id($post->ID)){
              if(get_field('tem_imagem_interna')=="Sim"){
                echo '
                <div class="b thumb" style="background-image:url('; 
                  if(get_field('imagem_secundaria')){
                    echo get_field('imagem_secundaria');
                  } else {
                    echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                  }
                  echo ');">
                <!-- --></div>';
              }
              echo '
              <div class="b">
                <h1 class="b">'.get_the_title().' <span class="tag tag-news">Notícias</span></h1>
                <h2 class="b">Postado em '.get_the_date().'</h2>
                <p class="b">'.get_the_content().'</p>
              </div>';
            } else {
              echo '
              <div class="b">
                <h1 class="b">'.get_the_title().' <span class="tag tag-news">Notícias</span></h1>
                <h2 class="b">Postado em '.get_the_date().'</h2>
                <p class="b">'.get_the_content().'</p>
              </div>';
            }
            echo '</div>
          </section>
        ';
      break;
      case 'eventos':
        echo '
          <div id="breadcrumbs" class="b light-theme">
            <div class="wrap">
              <ul class="b">
                <li><a href="'.site_url().'/blog" title="Blog">Blog</a></li>
                <li>'.get_post_type($post).'</li>
                <li>'.get_the_title().'</li>
              </ul>
            </div>
          </div>
          <section id="post">
            <div class="wrap">';
              if(get_post_thumbnail_id($post->ID)){
                if(get_field('tem_imagem_interna')=="Sim"){
                  echo '
                  <div class="b thumb" style="background-image:url('; 
                    if(get_field('imagem_secundaria')){
                      echo get_field('imagem_secundaria');
                    } else {
                      echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    }
                    echo ');">
                  <!-- --></div>';
                }
                echo '
                <div class="b">
                  <h1 class="b c"><span class="b l">'.get_the_title().' <span class="tag">Evento</span></span> <span class="b r">'; 
                  if(get_field('horario')){
                    echo '<span class="horario">'.get_field('horario').'</span> - ';
                  }
                  if(get_field('data')){
                    echo date_i18n("d/m/Y", strtotime(get_field('data')));
                  }
                  if(get_field('local')){
                    echo ' <span class="local">'.get_field('local').'</span>';
                  }
                  echo '</span></h1>
                  <h2 class="b">Postado em '.get_the_date().'</h2>
                  <p class="b">'.get_the_content().'<br/><br/><a title="Quero me inscrever" href="http://'.get_field('url_do_formulario').'">Quero me inscrever ></a></p>
                </div>';
              } else {
                echo '
                <div class="b">
                  <h1 class="b c"><span class="b l">'.get_the_title().' <span class="tag">Evento</span></span> <span class="b r">'; 
                  if(get_field('horario')){
                    echo '<span class="horario">'.get_field('horario').'</span> - ';
                  }
                  if(get_field('data')){
                    echo date_i18n("d/m/Y", strtotime(get_field('data')));
                  }
                  if(get_field('local')){
                    echo ' <span class="local">'.get_field('local').'</span>';
                  }
                  echo '</span></h1>
                  <h2 class="b">Postado em '.get_the_date().'</h2>
                  <p class="b">'.get_the_content().'<br/><br/><a title="Quero me inscrever" href="http://'.get_field('url_do_formulario').'">Quero me inscrever ></a></p>
                </div>';
              }
              echo '
            </div>
          </section>
        ';
      break;
      case 'destaque':
        echo "<img src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID),full)."' class='b' />";
      break;
      default:
        # code...
        break;
    }
  ?>
</main>
<?php get_footer(); ?>

