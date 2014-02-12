<?php get_header(); ?>


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
                    	<h1 class="desc"><?php echo get_field('about_en', 6) ?></h1>

					<?php else: ?>
						<h1 class="desc"><?php echo get_field('about_es', 6) ?></h1>
					<?php endif ?>

                    <a href="#about-cont" class="down scroll-to"></a>
                </div>
            </div>

        </div>

        <div id="about-cont" class="content about">
            <div class="container">
            	<?php echo apply_filters('the_content', get_post_field('post_content', 6 )); ?>

            	<?php if (qtrans_getLanguage() == 'en'): ?>

                    <a href="mailto:info@did.is" class="contact" target="_blank">Contact us at info@did.is</a>

                <?php else: ?>

                    <a href="mailto:info@did.is" class="contact" target="_blank">Contáctanos en info@did.is</a>

            	<?php endif ?>

            </div>
        </div>


            <div class="imagen equipo" data-smooth-scrolling="off" data-top="background-position:center -150;" data-bottom="background-position:center -300px;">
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
                                <h2><?php the_title(); ?>,
                                <span class="cargo">
                                	<?php if (qtrans_getLanguage() == 'en'): ?>
                                		<?php the_field('cargo_en') ?>
                                	<?php else: ?>
                                		<?php the_field('cargo_es') ?>
                                	<?php endif ?>

                                </span></h2>
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
                    <div class="fb-like" data-href="https://www.facebook.com/oficinadid" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
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
                    <?php if (qtrans_getLanguage() == 'en'): ?>
                    	<li><a href="http://oficinadid.cl/en/projects/">Projects</a></li>
                    <?php else: ?>
                    	<li><a href="http://oficinadid.cl/es/proyectos/">Proyectos</a></li>
                    <?php endif ?>

                </ul>
            </div>
        </div>
        <div class="right">
            <div class="share">
                <ul class="social">
        			<li><a href="https://www.facebook.com/oficinadid" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
        			<li><a href="https://twitter.com/oficinadid" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
        			<li><a href="http://instagram.com/oficinadid" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <ul class="lang">
                    <li><a href="http://oficinadid.cl/es/" class="esp <?php echo (qtrans_getLanguage() == 'en') ? '' : 'current'; ?>">Esp</a></li>
                    <li><a href="http://oficinadid.cl/en/" class="eng <?php echo (qtrans_getLanguage() == 'en') ? 'current' : ''; ?>">Eng</a></li>
                </ul>
            </div>
        </div>
    </menu>

<?php get_footer(); ?>