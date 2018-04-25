<?php echo '<section id="webdoor" class="b" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></section>'; ?>

<section id="vitrines" class="flex">
	<div id="como-funciona" class="flex100">
		<div class="wrap flex">
			<div class="flex50">
				<h1 class="b">Como o atlas<br/>funciona</h1>
				<p class="b">O sistema Atlas com correção via satélites banda-L usa técnicas modernas e software inovadores desenvolvidos em conjunto com um hardware de última geração. Isso torna o serviço surpreendente por sua precisão e qualidade das coordenadas fornecidas por meio de métodos diferenciais. Sua performance e precisão de 10cm superam alguns sistemas que já existem no mercado.</p>
			</div>
			<div class="flex50">
				<img src="<?php echo site_url()."/wp-content/uploads/2016/03/como-funciona.png"; ?>" alt="Como o atlas Funciona" />
			</div>	
		</div> 
	</div>
	<div class="flex100">
		<div class="wrap flex">
			<div class="flex50">
				<img src="<?php echo site_url()."/wp-content/uploads/2016/03/rede2.png"; ?>" alt="Como o atlas Funciona" />
			</div>	
			<div class="flex50">
				<img src="<?php echo site_url()."/wp-content/uploads/2016/03/rede.png"; ?>" alt="Como o atlas Funciona" />
			</div>	
		</div> 
	</div>
	<div class="flex100">
		<div class="wrap flex">
			<div class="flex100">
				<img src="<?php echo site_url()."/wp-content/uploads/2016/03/grafico.png"; ?>" alt="Como o atlas Funciona" />
			</div>	
			<div class="flex100 flex">
				<div class="flex50">
					<img src="<?php echo site_url()."/wp-content/uploads/2016/03/ate-20.png"; ?>" alt="Como o atlas Funciona" />
				</div>	
				<div class="flex50">
					<p class="b">A compatibilidade com os sinais GPS, GLONASS, BeiDou e GALILEU (quando estiver disponível) aumenta a constelação de satélites e permite que o tempo de convergência seja menor que 20 minutos para atingir uma precisão de 10 centímetros.</p>
				</div>					
			</div>
		</div> 
	</div>
	<div id="entre-em-contato" class="flex100">
		<div class="wrap flex">
			<div class="flex50">
				<div class="flex">
					<div class="flex100 flex">
						<div class="flex30"><img src="<?php echo site_url()."/wp-content/uploads/2016/03/email.png"; ?>" alt="Por e-mail" /></div>
						<div class="flex70">
							<p class="b"><strong class="b">Por email:</strong><?php echo "<p>".get_theme_mod( 'email_textbox' )."</p>"; ?></p>
						</div>
					</div>
					<div class="flex100 flex">
						<div class="flex30"><img src="<?php echo site_url()."/wp-content/uploads/2016/03/telefone.png"; ?>" alt="Por telefone" /></div>
						<div class="flex70">
							<p class="b"><strong class="b">Por telefone:</strong><?php echo "<p>".get_theme_mod( 'telefone_textbox' )."</p>"; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="flex50">
				<h1 class="b">Entre em contato<br/>e faça uma visita</h1>
			</div>		
		</div> 
	</div>
</section>