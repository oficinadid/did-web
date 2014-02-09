<?php get_header(); ?>

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

                		<h1 class="desc">DID is a design agency that produces services, communication and digital media with focus on politics and public issues.</h1>

					<a class="lang" href="http://oficinadid.cl/es/">Ir al sitio en Español</a>

                	<?php else: ?>
                		<h1 class="desc">DID es una oficina de diseño de servicios, comunicación y medios digitales especializada en política y problemas públicos.</h1>

					<a class="lang" href="http://oficinadid.cl">Go to English version</a>

                	<?php endif ?>

                    <a href="#proyectos-cont" class="down scroll-to"></a>
                </div>
            </div>

        </div>

    <?php endif ?>

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
                            <li class="current menu-proyectos"><a href="#"><?php echo (qtrans_getLanguage() == 'en') ? 'Projects' : 'Proyectos'; ?> <i class="fa fa-angle-down"></i></a></li>
			    <li class="menu-about"><a href="<?php bloginfo('wpurl'); ?>/about/">About</a></li>
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

	                            <?php foreach ($listaProyectos as $proyecto): ?>
	                            	<div class="item">
	                                    <h2 class="title"><?php echo get_the_title($proyecto->ID); ?><span class="year"> <?php echo get_field('anos', $proyecto->ID) ?></span></h2>

	                                    <?php $links = get_field('links', $proyecto->ID) ?>

	                                    <?php foreach ($links as $link): ?>
	                                    	<span class="site"><i class="fa fa-angle-right"></i> <a href="<?php echo $link['url'] ?>" target="_blank"><?php echo $link['url'] ?></a></span>
	                                    <?php endforeach ?>


	                                    <?php echo apply_filters('the_content', $proyecto->post_content); ?>

	                                </div>

	                            <?php endforeach ?>

                            </div>



                        </div>

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