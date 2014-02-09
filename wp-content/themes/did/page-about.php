<?php get_header(); ?>


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

	                    <a href="mailto:info@did.is" class="contact" target="_blank">Contact us at info@did.is</a>

                	<?php else: ?>

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

        </div>

        <menu id="main">
            <div class="left">
                <div class="main-nav">
                    <ul>
                        <li><a href="<?php bloginfo('wpurl'); ?>" class="logo"></a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>/#proyectos"><?php echo (qtrans_getLanguage() == 'en') ? 'Projects' : 'Proyectos'; ?></a></li>
                        <li class="current"><a>About</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="share">
                    <ul>
			<li><a href="https://www.facebook.com/oficinadid" class="facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/oficinadid" class="twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="http://instagram.com/oficinadid" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </menu>
<?php get_footer(); ?>