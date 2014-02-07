<?php get_header(); ?>


        <div id="about">

            <div class="imagen about">
                <div class="texto">
                    <div class="container">
                        <span class="type">About</span>
                        <h1 class="desc">

						<?php if (qtrans_getLanguage() == 'en'): ?>
							DID is a design agency that produces services, communication and digital media with focus on politics and public issues.
						<?php else: ?>
							DID es una oficina de diseño de servicios, comunicación y medios digitales especializada en política y problemas públicos.
						<?php endif ?>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="content about">
                <div class="container">
                	<?php if (qtrans_getLanguage() == 'en'): ?>
                		<p>At DID we create strategies, research, products and services supported by an open design process. We use design as a multidimensional tool to create value for companies, institutions, social organizations and individuals to help them reach their development goals.</p>

	                    <p>We collaborate with our clients in a wide array of projects of diverse scale and scope. Furthermore our independent initiatives allow us to identify new business opportunities by exploring new markets and services. DID supports its action in the expertise of a professional network that over the past 10 years, has played a key role in the integration of design thinking in to social, economical and political activities in Chile.</p>

	                    <a href="mailto:info@did.is" class="contact" target="_blank">Contact us at info@did.is</a>

                	<?php else: ?>
                		<p>En DID creamos estrategias, investigación, productos y servicios basados en un proceso de diseño abierto. Utilizamos el diseño y la comunicación como herramientas multidimensionales de creación de valor para empresas, instituciones, organizaciones sociales e individuos.</p>

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
							<h1 class="desc">Contamos con un equipo de colaboradores de diversas disciplinas que nos permite abordar proyectos de diversa escala y alcance. Este equipo está liderado por 4 socios fundadores.</h1>

                    	<?php else: ?>
                    		<span class="type">Equipo</span>
							<h1 class="desc">Contamos con un equipo de colaboradores de diversas disciplinas que nos permite abordar proyectos de diversa escala y alcance. Este equipo está liderado por 4 socios fundadores.</h1>

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
			<li><a href="<?php bloginfo('wpurl'); ?>">="#"><?php echo (qtrans_getLanguage() == 'en') ? 'Projects' : 'Proyectos'; ?></a></li>
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