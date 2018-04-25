<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
<head>
  <title><?php wp_title(); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />

  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="HandheldFriendly" content="true" />

  <!-- SEO -->

  <meta name="audience" content="all" />
  <meta name="keywords" content="" />

  <meta name="author" content="Wesley Andrade" />
  <meta name="copyright" content="" />
  <meta name="resource-type" content="Document" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="index, follow, ALL" />
  <meta name="GOOGLEBOT" content="index, follow" />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="2 Days" />
  <meta name="language" content="pt-br" />

  <?php wp_meta(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/default.css?v='.rand(5, 15); ?>" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url')."?v=".rand(5, 15); ?>"> 

  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>
  <script defer src="http://flexslider.woothemes.com/js/jquery.flexslider.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js?v=<?php echo rand(5, 15); ?>" type="text/javascript"></script> 

  <script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=493767340741485";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <style type="text/css">
    @font-face {
        font-family: 'GalanoGrotesqueSemiBold';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/GalanoGrotesqueSemiBold.eot');
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/GalanoGrotesqueSemiBold.eot') format('embedded-opentype'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/GalanoGrotesqueSemiBold.woff2') format('woff2'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/GalanoGrotesqueSemiBold.woff') format('woff'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/GalanoGrotesqueSemiBold.ttf') format('truetype'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/GalanoGrotesqueSemiBold.svg#GalanoGrotesqueSemiBold') format('svg');
    }
    @font-face {
        font-family: 'GalanoGrotesqueLight';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/galano_grotesque_light-webfont.eot');
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/galano_grotesque_light-webfont.eot') format('embedded-opentype'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/galano_grotesque_light-webfont.woff2') format('woff2'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/galano_grotesque_light-webfont.woff') format('woff'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/galano_grotesque_light-webfont.ttf') format('truetype'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/galano_grotesque_light-webfont.svg#galano_grotesque_light-webfont') format('svg');
    }
    @font-face {
      font-family: 'flexslider-icon';
      src:  url('<?php echo get_template_directory_uri(); ?>/fonts/flexslider-icon.eot');
      src:  url('<?php echo get_template_directory_uri(); ?>/fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), 
            url('<?php echo get_template_directory_uri(); ?>/fonts/flexslider-icon.woff') format('woff'), 
            url('<?php echo get_template_directory_uri(); ?>/fonts/flexslider-icon.ttf') format('truetype'), 
            url('<?php echo get_template_directory_uri(); ?>/fonts/flexslider-icon.svg#flexslider-icon') format('svg');
      font-weight: normal;
      font-style: normal;
    }
  </style>
  <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-75824792-1', 'auto');
  	ga('send', 'pageview');

  </script>
  <?php wp_head(); ?>
</head>
<body 
  <?php
    global $post;
    if (is_front_page()) {
      echo 'class="pg-home"';
    } else if(is_single()){
      echo 'class="pg-interna pg-single page_id_'.$post->ID.'"';
    } else {
      echo 'class="pg-interna page_id_'.$post->ID.'"';
    }
  ?>
>
  <div id="wrap">
    <div id="newsletter">
      <div class="flex">
        <div class="flex100">
          <div class="wrap flex">
            <div class="flex100">
              <?php echo do_shortcode('[contact-form-7 id="123" title="Newsletter"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header>
      <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'menu_class' => 'b', 'menu_id' => 'menuMobile' ) ); ?>
      <div class="wrap">
        <div class="flex">
          <div class="flex60">
            <?php if ( get_theme_mod( 'logo' ) ) : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            <?php else : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
          </div>
          <div class="flex40">
            <nav>
              <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header','menu_class' => 'flex' ) ); ?>
            </nav>
          </div>
        </div>
      </div>
    </header>