<?php get_header(); ?>


<<<<<<< HEAD
        <div id="about">

            <div class="imagen about">
                <div class="texto">
                    <div class="container">
                        <span class="type">About</span>
                        <h1 class="desc">

						<?php if (qtrans_getLanguage() == 'en'): ?>
							<?php echo get_field('about_en', 6) ?>
						<?php else: ?>
							<?php echo get_field('about_es', 6) ?>
						<?php endif ?>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="content about">
                <div class="container">



                	<?php echo apply_filters('the_content', get_post_field('post_content', 6 )); ?>

	                <?php if (qtrans_getLanguage() == 'en'): ?>
=======
    <div id="about">

        <div id="intro">

            <div class="back">

                <?php if (wpmd_is_notdevice()): ?>

                    <video autoplay loop>
                        <source src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.webm" type="video/webm"></source>
                        <source src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.ogv" type="video/ogg"></source>
                        <source src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.mp4" type="video/mp4"></source>
                    </video>

                 <?php else: endif ?>

            </div>

            <div class="front">
                <div class="content">
                    <?php if (qtrans_getLanguage() == 'en'): ?>
                        <h1 class="desc">DID is a design agency that produces services, communication and digital media with focus on politics and public issues.</h1>

                    <?php else: ?>
                        <h1 class="desc">DID es una oficina de diseño de servicios, comunicación y medios digitales especializada en política y problemas públicos.</h1>

                    <?php endif ?>

                    <a href="#proyectos-cont" class="down scroll-to"></a>
                </div>
            </div>

        </div>

        <div class="content about">
            <div class="container">
            	<?php if (qtrans_getLanguage() == 'en'): ?>
            		<p>At DID we create strategies, research, products and services supported by an open design process. We use design as a multidimensional tool to create value for companies, institutions, social organizations and individuals to help them reach their development goals.</p>
>>>>>>> 1b3c9e7397b9b88978a550858f853d8889d67cc5

                    <p>We collaborate with our clients in a wide array of projects of diverse scale and scope. Furthermore our independent initiatives allow us to identify new business opportunities by exploring new markets and services. DID supports its action in the expertise of a professional network that over the past 10 years, has played a key role in the integration of design thinking in to social, economical and political activities in Chile.</p>

<<<<<<< HEAD
                	<?php else: ?>
=======
                    <a href="mailto:info@did.is" class="contact" target="_blank">Contact us at info@did.is</a>

            	<?php else: ?>
            		<p>En DID creamos estrategias, investigación, productos y servicios basados en un proceso de diseño abierto. Utilizamos el diseño y la comunicación como herramientas multidimensionales de creación de valor para empresas, instituciones, organizaciones sociales e individuos.</p>
>>>>>>> 1b3c9e7397b9b88978a550858f853d8889d67cc5

                    <p>Nuestras iniciativas y emprendimientos independientes nos permiten identificar oportunidades de desarrollo e innovación mediante la exploración de nuevos medios, mercados y servicios. DID apoya su acción en la experiencia de una red de profesionales que en los últimos 10 años, ha jugado un papel clave en la integración del diseño y la comunicación en actividades sociales, económicas y políticas en Chile.</p>

                    <a href="mailto:info@did.is" class="contact" target="_blank">Contáctanos en info@did.is</a>

            	<?php endif ?>

            </div>
        </div>


            <div class="imagen equipo" data-smooth-scrolling="off" data-top="background-position:center 0;" data-bottom="background-position:center -200px;">
                <div class="texto">
                    <div class="container">
                    	<?php if (qtrans_getLanguage() == 'en'): ?>
                    		<span class="type">Team</span>
							<h1 class="desc"><?php echo get_field('equipo_en', 6) ?></h1>

                    	<?php else: ?>
                    		<span class="type">Equipo</span>
							<h1 class="desc"><?php echo get_field('equipo_es', 6) ?></h1>

                		<?php endif ?>

                </div>
            </div>
        </div>

        <div class="content equipo">
            <div class="container">
                <ul class="miembros">

                    <?php
                    $args = array(
                        'post_type' => 'equipo',
                        'posts_per_page' => -1,
                        'update_post_term_cache' => false, // grabs terms, remove if terms required (category, tag...)
                        'update_post_meta_cache' => false, // grabs post meta, remove if post meta required
                        'no_found_rows' => true
                    );
                    $equipo = new WP_Query($args);

                    if($equipo->have_posts()) : while($equipo->have_posts()): $equipo->the_post(); ?>

                        <li class="cf">
                            <div class="left">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="right">
                                <h2><?php the_title(); ?>, <span class="cargo"><?php the_field('cargo') ?></span></h2>
                                <?php the_content(); ?>

                                <?php if ((get_field('linkedin')) || get_field('twitter')): ?>

                                    <div class="redes">
                                        <span><i class="fa fa-angle-right"></i> <?php echo (qtrans_getLanguage() == 'en') ? 'Follow at' : 'Seguir en:'; ?></span>
                                        <ul>
                                        	<?php if (get_field('linkedin')): ?>
                                        		<li><a href="<?php the_field('linkedin') ?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        	<?php elseif(get_field('twitter')): ?>
                                        		<li><a href="<?php the_field('twitter') ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        	<?php endif ?>

                                        </ul>
                                    </div>
                                <?php endif ?> <!- fin redes -->

                            </div>
                        </li>

                    <?php endwhile;
                    wp_reset_postdata();
                    endif; ?>



                </ul>
            </div>
        </div>


        <div class="footer">
            <div class="container">
                <div class="left">
                    <span class="contact">Contáctanos en: <a href="mailto:info@did.is"><i class="fa fa-angle-right"></i> info@did.is</a></span>
                    <span class="disc">DID 2014 | Todos los derechos resevados</span>
                </div>
                <div class="right">
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                <div class="cf"></div>
            </div>
        </div>

    </div>

    <menu id="main">
        <div class="left">
            <div class="main-nav">
                <ul>
                    <li><a href="<?php bloginfo('wpurl'); ?>" class="logo"></a></li>
                    <li class="current"><a><?php echo (qtrans_getLanguage() == 'en') ? 'About' : 'Acerca de'; ?></a></li>
                    <li><a href="<?php bloginfo('wpurl'); ?>"><?php echo (qtrans_getLanguage() == 'en') ? 'Projects' : 'Proyectos'; ?></a></li>
                </ul>
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

<?php get_footer(); ?>