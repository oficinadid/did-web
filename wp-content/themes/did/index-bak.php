<?php get_header(); ?>

<<<<<<< HEAD
    <?php if (wpmd_is_notdevice()): ?>

        <div id="intro">

            <div class="back">

		<video autoplay loop>
			<source src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.webm" type="video/webm"></source>
			<source src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.ogv" type="video/ogg"></source>
			<source src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.mp4" type="video/mp4"></source>
		</video>

            </div>
		<?php $listaProyectos = get_posts( array('post_type' => 'proyecto', 'posts_per_page' => -1, 'no_found_rows' => true, 'orderby' => 'menu_order', 'order' => 'ASC')); ?>

            <div class="front">
                <div class="content">
                	<?php if (qtrans_getLanguage() == 'en'): ?>

                		<h1 class="desc"><?php echo get_field('tagline_en', 37); ?></h1>

					<a class="lang" href="http://oficinadid.cl/es/">Ir al sitio en Español</a>

                	<?php else: ?>
                		<h1 class="desc"><?php echo get_field('tagline_es', 37); ?></h1>

					<a class="lang" href="http://oficinadid.cl">Go to English version</a>

                	<?php endif ?>

                    <a href="#proyectos-cont" class="down scroll-to"></a>
                </div>
            </div>

        </div>

    <?php endif ?>

=======
>>>>>>> 1b3c9e7397b9b88978a550858f853d8889d67cc5
        <div id="proyectos-cont">

            <div id="proyectos" data-looper="go" data-interval="false" class="looper slide">

                <div class="slides looper-inner">
                	<?php foreach ($listaProyectos as $proyecto): ?>
                		<ul class="item <?php echo $proyecto->post_name ?>">

	                        <?php if (wpmd_is_notdevice()): ?>
	                        	<?php
	                        		$ipad_l   = get_field('ipad_landscape', $proyecto->ID);
	                        		$ipad_p   = get_field('ipad_portrait', $proyecto->ID);
	                        		$iphone_l = get_field('iphone_landscape', $proyecto->ID);
	                        		$iphone_p = get_field('iphone_portrait', $proyecto->ID);
	                        	?>
	                            <li style="background-image:url(<?php echo wp_get_attachment_url($ipad_l) ?>);"></li>
	                        <?php else: ?>
	                            <li>
	                                 <span data-picture>
	                                    <?php if (wpmd_is_phone()): ?>
	                                        <span data-src="<?php echo wp_get_attachment_url($iphone_p) ?>" data-media="(min-width: 320px)"></span>
	                                        <span data-src="<?php echo wp_get_attachment_url($iphone_l) ?>" data-media="(min-width: 480px)"></span>

	                                    <?php elseif (wpmd_is_tablet()):?>
	                                        <span data-src="<?php echo wp_get_attachment_url($ipad_p) ?>" data-media="(min-width: 760px)"></span>
	                                        <span data-src="<?php echo wp_get_attachment_url($ipad_l) ?>" data-media="(min-width: 960px)"></span>
	                                    <?php endif ?>

	                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
	                                    <noscript>
	                                        <img src="<?php echo wp_get_attachment_url($ipad_l) ?>">
	                                    </noscript>
	                                </span>
	                            </li>
	                        <?php endif ?>

	                    </ul>

                	<?php endforeach ?>

                </div>

            </div>

            <menu id="main">
                <div class="left">
                    <div class="main-nav">
                        <ul>
                            <li class="menu-home"><a href="<?php bloginfo('wpurl'); ?>" class="logo"></a></li>
                            <li class="menu-about current"><a href="<?php bloginfo('wpurl'); ?>/about/"><?php echo (qtrans_getLanguage() == 'en') ? 'About' : 'Acerca de'; ?></a></li>
                            <li class="current menu-proyectos"><a href="#"><?php echo (qtrans_getLanguage() == 'en') ? 'Projects' : 'Proyectos'; ?> <i class="fa fa-angle-down"></i></a></li>
                        </ul>
                    </div>
                    <div class="cf"></div>
                    <div class="sub-nav collapsed">
                        <ul class="proyects">
                       	<?php $i=0; foreach ($listaProyectos as $proyecto): $i++; ?>
                       		<li><a href="#proyectos" data-looper="to" data-args="<?php echo $i; ?>"><?php echo apply_filters( 'the_content', $proyecto->post_title );  ?></a></li>
                       	<?php endforeach ?>

                        </ul>
                        <div class="proyect-desc looper xfade">
                            <div id="desc-looper" class="looper-inner">
<<<<<<< HEAD
=======
                                <div class="item">
                                    <h2 class="title">Michelle Bachelet</h2>
                                    <span class="year">2013</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://michellebachelet.cl" target="_blank">http://michellebachelet.cl</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">We collaborate with the presidential candidacy of Michelle Bachelet by designing her digital campaign for both the primary and the presidencial. Our job was to design the communication strategy for the internet, the web platform and the production of audiovisual and photographic content. </p>

                                    <?php else: ?>
                                    	<p class="desc">Colaboramos con la candidatura presidencial de Michelle Bachelet diseñando su campaña digital tanto para las elecciones primarias como para la presidencial. El trabajo consistió en el diseño de la estrategia de comunicación específica de internet, la plataforma web y la producción de contenido audiovisual y fotográfico.</p>

                                    <?php endif ?>

                                </div>

                                <div class="item">
                                    <h2 class="title">Sentidos Comunes</h2>
                                    <span class="year">2011-2013</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://sentidoscomunes.cl" target="_blank">http://sentidoscomunes.cl</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">Sentidos Comunes is a digital magazine about politics and culture. Our goal is to help renovate the discourses and debates upon the ideas that are shaping the new political cycle of Chile. Sentidos Comunes is a joint startup between the DID team and other partners.</p>

                                    <?php else: ?>
                                    	<p class="desc">Sentidos Comunes es una revista digital de cultura y política, que busca ser un espacio para renovar los discursos y discutir las ideas que están marcando el inicio del nuevo ciclo político de Chile. Sentidos Comunes es un emprendimiento conjunto del equipo DID y otros colaboradores.</p>

                                    <?php endif ?>

                                </div>

                                <div class="item">
                                    <h2 class="title">Mafi.tv  </h2>
                                    <span class="year">2012</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://mafi.tv" target="_blank">http://mafi.tv</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">MAFI is a web based platform of micro-documentaries about the current state of Chile. Our job was to create a dynamic interface based on the multiple navigation options that the combination of topics, locations, dates and authors of the films allows.</p>

                                    <?php else: ?>
                                    	<p class="desc">MAFI es una plataforma web compuesta por micro-documentales acerca del Chile actual. Nuestro trabajo consistió en crear una interfaz dinámica, basada en la multiplicidad de formas de navegación posibles que permite la combinación de distintas temáticas, ubicaciones geográficas, fechas de realización y autorías involucradas en las piezas audiovisuales.  </p>

                                    <?php endif ?>

                                </div>

                                <div class="item">
				    				<h2 class="title">Reforma Educacional  </h2>
                                    <span class="year">2011</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://reformaeducacional.cl" target="_blank">http://reformaeducacional.cl</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">We developed a campaign to build awareness of the Chilean educational crisis and to help mobilizing students towards public demonstrations. Our approach was to built a new identity for students demonstrators of the CONFECH, and to design open source participatory tools. </p>

                                    <?php else: ?>
                                    	<p class="desc">Desarrollamos una campaña para crear conciencia sobre el problema educacional chileno y para ayudar a movilizar a los estudiantes. Nuestro enfoque fue construir una nueva identidad para los estudiantes movilizados de la CONFECH y diseñar elementos de protesta de código abierto.</p>

                                    <?php endif ?>

                                </div>

                                <div class="item">
                                    <h2 class="title">FaceEnergy  </h2>
                                    <span class="year">2012-2013</span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">FaceEnergy is a startup that wants to be an online platform to understand, manage and remotely control the energy consumption of the home. Their goal is to be the first social network of energy and things. FaceEnergy is a joint startup between DID and other partners.  </p>

                                    <?php else: ?>
                                    	<p class="desc">FaceEnergy es un emprendimiento que pretende ser una plataforma online para entender, administrar y controlar remotamente el consumo energético del hogar. Su meta es ser la primera red social de la energía y los objetos. FaceEnergy es un emprendimiento conjunto entre DID y otros colaboradores.  </p>

                                    <?php endif ?>


                                </div>

                                <div class="item">
                                    <h2 class="title">Populus</h2>
                                    <span class="year">2013</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://populus.cl" target="_blank">http://populus.cl</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">Populus is a startup that wants to be a social network that connects citizens with their politicians by allowing them to vote for the law projects that are going through Congress. Our job was to conceptually design the interactions and interfaces of their first prototype. </p>

                                    <?php else: ?>
                                    	<p class="desc">Populus es un emprendimiento cuyo objetivo es ser en una red social que conecte a ciudadanos con políticos a través de proveer un sistema de votación sobre los proyectos de ley que se discuten en el Congreso. Nuestro trabajo fue el diseño conceptual de las interacciones e interfaces de su primer prototipo.</p>

                                    <?php endif ?>

                                </div>

                                <div class="item">
                                    <h2 class="title">Cancha Chile  </h2>
                                    <span class="year">2013</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://canchachile.cl" target="_blank">http://canchachile.cl</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	 <p class="desc">We developed the digital version of the catalog of the Chilean Pavillion for the XII Venice Architecture Biennial. </p>

                                    <?php else: ?>
                                    	 <p class="desc">Desarrollamos la versión digital del catálogo del Pabellón de Chile para la XII Bienal de Arquitectura de Venecia.</p>

                                    <?php endif ?>

                                </div>

                                <div class="item">
                                    <h2 class="title">Reconstruye</h2>
                                    <span class="year">2010-2012</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://www.reconstruye.org/" target="_blank">http://www.reconstruye.org</a></span>

                                    <?php if (qtrans_getLanguage() == 'en'): ?>
                                    	<p class="desc">To help improve people's quality of life by design is one of our main goals. After the 2010 earthquake in Chile, we worked with a wide net of professionals in the RECONSTRUYE NGO, a non-profit organization oriented towards the promotion and proposal of projects to collaborate with a just, equitable and inclusive process of reconstruction. </p>
>>>>>>> 1b3c9e7397b9b88978a550858f853d8889d67cc5

	                            <?php foreach ($listaProyectos as $proyecto): ?>
	                            	<div class="item">
	                                    <h2 class="title"><?php echo get_the_title($proyecto->ID); ?><span class="year"> <?php echo get_field('anos', $proyecto->ID) ?></span></h2>

	                                    <?php $links = get_field('links', $proyecto->ID) ?>

	                                    <?php foreach ($links as $link): ?>
	                                    	<span class="site"><i class="fa fa-angle-right"></i> <a href="<?php echo $link['url'] ?>" target="_blank"><?php echo $link['url'] ?></a></span>
	                                    <?php endforeach ?>

<<<<<<< HEAD
=======
                                <div class="item">
                                    <h2 class="title">IEUT / EURE  </h2>
                                    <span class="year">2010-2011</span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://ieut.cl" target="_blank">http://ieut.cl</a></span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://eure.cl" target="_blank">http://eure.cl</a></span>
>>>>>>> 1b3c9e7397b9b88978a550858f853d8889d67cc5

	                                    <?php echo apply_filters('the_content', $proyecto->post_content); ?>

	                                </div>

	                            <?php endforeach ?>

                            </div>



                        </div>

                    </div>
                </div>
                <div class="right">
                    <div class="share">
                        <ul class="social">
            			    <li><a href="https://www.facebook.com/oficinadid" class="facebook"><i class="fa fa-facebook"></i></a></li>
            			    <li><a href="https://twitter.com/oficinadid" class="twitter"><i class="fa fa-twitter"></i></a></li>
            			    <li><a href="http://instagram.com/oficinadid" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul class="lang">
                            <li><a href="#" class="esp current">Esp</a></li>
                            <li><a href="#" class="eng">Eng</a></li>
                        </ul>
                    </div>
                </div>
            </menu>

            <menu id="proyect-navi">
                <div class="left">
                    <a data-looper="prev" href="#proyectos" class="navi-prev">
                        <i class="fa fa-angle-left"></i>
                        <span>Sentidos Comunes</span>
                    </a>
                </div>
                <div class="right">
                    <a data-looper="next" href="#proyectos" class="navi-next">
                        <span>Reforma Educacional</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </menu>

        </div>

<?php get_footer(); ?>