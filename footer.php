		  	<footer>
		    	<div class="wrap flex">
					<div class="flex100 flex">
						<div class="flex30">
				            <?php if ( get_theme_mod( 'logo' ) ) : ?>
				              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				            <?php else : ?>
				              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
				            <?php endif; ?>
						</div>
						<div class="flex40"><?php echo "<p>".get_theme_mod( 'endereco_textbox' )."</p>"; ?></div>
						<div class="flex30 c"><a href="javascript:void(0)" class="b r btn btn_default" title="Assine nossa newsletter">Assine nossa newsletter</a></div>
					</div>
		    	</div>
		  	</footer>
		</div>
        <div id="fb-root"></div>
        <?php wp_footer(); ?> 
    </body>
</html>