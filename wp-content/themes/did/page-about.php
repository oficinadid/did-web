<?php get_header(); ?>


        <div id="about">
            
            <div class="imagen about">
                <div class="texto">
                    <div class="container">
                        <span class="type">About</span>
                        <h1 class="desc">DID es una oficina de diseño de servicios, comunicación y medios digitales especializada en política y problemas públicos.</h1>
                    </div>
                </div>
            </div>

            <div class="content about">
                <div class="container">
                    <p>En DID creamos estrategias, investigación, productos y servicios basados en un proceso de diseño abierto. Utilizamos el diseño y la comunicación como herramientas multidimensionales de creación de valor para empresas, instituciones, organizaciones sociales e individuos.</p>

                    <p>Nuestras iniciativas y emprendimientos independientes nos permiten identificar oportunidades de desarrollo e innovación mediante la exploración de nuevos medios, mercados y servicios. DID apoya su acción en la experiencia de una red de profesionales que en los últimos 10 años, ha jugado un papel clave en la integración del diseño y la comunicación en actividades sociales, económicas y políticas en Chile.</p>
                    
                    <a href="mailto:info@did.is" class="contact" target="_blank">Contáctanos en info@did.is</a>
                </div>
            </div>

            <div class="imagen equipo">
                <div class="texto">
                    <div class="container">
                        <span class="type">Equipo</span>
                        <h1 class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum convallis risus porttitor tempus. Nullam pretium urna quamtriscoac.</h1>
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
                                    <div class="redes">
                                        <span><i class="fa fa-angle-right"></i> Seguir en:</span>
                                        <ul>
                                            <li><a href="<?php the_field('linkedin') ?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="<?php the_field('twitter') ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
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
                        <li><a href="<?php bloginfo('wpurl'); ?>/proyectos">Proyectos</a></li>
                        <li class="current"><a>About</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="share">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </menu>
<?php get_footer(); ?>