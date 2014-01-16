<?php get_header(); ?>

    <?php if (wpmd_is_notdevice()): ?>

        <div id="intro">

            <div class="back">
                <video src="<?php bloginfo('template_url'); ?>/video/HardDriveH264.mp4" autoplay loop></video>

            </div>

            <div class="front">
                <div class="content">
                    <h1 class="desc">DID es una oficina de diseño de servicios, comunicación y medios digitales especializada en política y problemas públicos.</h1>
                    <a href="#proyectos-cont" class="down scroll-to"></a>
                </div>
            </div>

        </div>

    <?php endif ?>

        <div id="proyectos-cont">

            <div id="proyectos" data-looper="go" data-interval="false" class="looper slide">

                <div class="slides looper-inner">
                    <ul class="item mb">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/mb/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="Campaña digital Michelle Bachelet">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mb/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mb/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mb/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mb/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>
                                    <?php endif ?>

                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/mb/ipad-l-2048x1342.jpg" alt="Campaña digital Michelle Bachelet">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>

                    </ul>
                    <ul class="item sc">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/sc/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="Sentidos Comunes">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/sc/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/sc/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/sc/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/sc/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/sc/ipad-l-2048x1342.jpg" alt="Sentidos Comunes">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>

                        </li>
                    </ul>
                    <ul class="item mafi">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/mafi/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="MAFI">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mafi/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mafi/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mafi/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/mafi/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/mafi/ipad-l-2048x1342.jpg" alt="MAFI">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>

                    </ul>
                    <ul class="item re">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/re/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="Reforma Educacional">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/re/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/re/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/re/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/re/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/re/ipad-l-2048x1342.jpg" alt="Reforma Educacional">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>
                    </ul>
                    <ul class="item fe">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/fe/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="FaceEnergy">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/fe/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/fe/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/fe/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/fe/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/fe/ipad-l-2048x1342.jpg" alt="FaceEnergy">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>
                    </ul>
                    <ul class="item populus">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/populus/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="Populus">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/populus/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/populus/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/populus/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/populus/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/populus/ipad-l-2048x1342.jpg" alt="Populus">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>
                    </ul>
                    <ul class="item cancha">
                       <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/cancha/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="Cancha">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/cancha/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/cancha/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/cancha/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/cancha/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/cancha/ipad-l-2048x1342.jpg" alt="Cancha">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>
                    </ul>
                    <ul class="item reconstruye">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/reconstruye/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="Reconstruye">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/reconstruye/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/reconstruye/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/reconstruye/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/reconstruye/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/reconstruye/ipad-l-2048x1342.jpg" alt="Reconstruye">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>
                    </ul>
                    <ul class="item ieut-eure">
                        <?php if (wpmd_is_notdevice()): ?>
                            <li style="background-image:url(<?php bloginfo('template_url'); ?>/img/ieut-eure/ipad-l-2048x1342.jpg);"></li>
                        <?php else: ?>
                            <li>
                                 <span data-picture data-alt="IEUT - EURE">
                                    <?php if (wpmd_is_phone()): ?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/ieut-eure/iphone5-p-640x920.jpg" data-media="(min-width: 320px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/ieut-eure/iphone5-l-1136x640.jpg" data-media="(min-width: 480px)"></span>

                                    <?php elseif (wpmd_is_tablet()):?>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/ieut-eure/ipad-p-1536x1854.jpg" data-media="(min-width: 760px)"></span>
                                        <span data-src="<?php bloginfo('template_url'); ?>/img/ieut-eure/ipad-l-2048x1342.jpg" data-media="(min-width: 960px)"></span>

                                    <?php endif ?>


                                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                                    <noscript>
                                        <img src="<?php bloginfo('template_url'); ?>/img/ieut-eure/ipad-l-2048x1342.jpg" alt="IEUT - EURE">
                                    </noscript>
                                </span>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>

            </div>

            <menu id="main">
                <div class="left">
                    <div class="main-nav">
                        <ul>
                            <li class="menu-home"><a href="<?php bloginfo('wpurl'); ?>" class="logo"></a></li>
                            <li class="current menu-proyectos"><a href="#">Proyectos <i class="fa fa-angle-down"></i></a></li>
                            <li class="menu-about"><a href="<?php bloginfo('wpurl'); ?>/about">About</a></li>
                            
                        </ul>
                    </div>
                    <div class="cf"></div>
                    <div class="sub-nav collapsed">
                        <ul class="proyects">
                            <li><a href="#proyectos" data-looper="to" data-args="1">Michelle Bachelet</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="2">Sentidos Comunes</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="3">Mafi TV</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="4">Reforma Educacional</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="5">Face Energy</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="6">Populus</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="7">Cancha Chile</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="8">Reconstruye</a></li>
                            <li><a href="#proyectos" data-looper="to" data-args="9">IEUT / EURE</a></li>
                        </ul>
                        <div class="proyect-desc looper xfade">
                            <div id="desc-looper" class="looper-inner">
                                <div class="item">
                                    <h2 class="title">Michelle Bachelet<span class="year"> 2013</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://michellebachelet.cl" target="_blank">http://michellebachelet.cl</a></span>
                                    <p class="desc">Colaboramos con la candidatura presidencial de Michelle Bachelet diseñando su campaña digital tanto para las elecciones primarias como para la presidencial. El trabajo consistió en el diseño de la estrategia de comunicación específica de internet, la plataforma web y la producción de contenido audiovisual y fotográfico.</p>
                                </div>

                                <div class="item">
                                    <h2 class="title">Sentidos Comunes<span class="year"> 2011-2013</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://sentidoscomunes.cl" target="_blank">http://sentidoscomunes.cl</a></span>
                                    <p class="desc">Sentidos Comunes es una revista digital de cultura y política, que busca ser un espacio para renovar los discursos y discutir las ideas que están marcando el inicio del nuevo ciclo político de Chile. Sentidos Comunes es un emprendimiento conjunto del equipo DID y otros colaboradores.</p>
                                </div>

                                <div class="item">
                                    <h2 class="title">Mafi.tv  <span class="year"> 2012</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://mafi.tv" target="_blank">http://mafi.tv</a></span>
                                    <p class="desc">MAFI es una plataforma web compuesta por micro-documentales acerca del Chile actual. Nuestro trabajo consistió en crear una interfaz dinámica, basada en la multiplicidad de formas de navegación posibles que permite la combinación de distintas temáticas, ubicaciones geográficas, fechas de realización y autorías involucradas en las piezas audiovisuales.  </p>
                                </div>

                                <div class="item">
                                    <h2 class="title">ReformaEducacional.cl  <span class="year"> 2011</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://reformaeducacional.cl" target="_blank">http://reformaeducacional.cl</a></span>
                                    <p class="desc">Desarrollamos una campaña para crear conciencia sobre el problema educacional chileno y para ayudar a movilizar a los estudiantes. Nuestro enfoque fue construir una nueva identidad para los estudiantes movilizados de la CONFECH y diseñar elementos de protesta de código abierto.</p>
                                </div>

                                <div class="item">
                                    <h2 class="title">FaceEnergy  <span class="year"> 2012-2013</span></h2>

                                    <p class="desc">FaceEnergy es un emprendimiento que pretende ser una plataforma online para entender, administrar y controlar remotamente el consumo energético del hogar. Su meta es ser la primera red social de la energía y los objetos. FaceEnergy es un emprendimiento conjunto entre DID y otros colaboradores.  </p>
                                </div>

                                <div class="item">
                                    <h2 class="title">Populus<span class="year"> 2013</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://populus.cl" target="_blank">http://populus.cl</a></span>
                                    <p class="desc">Populus es un emprendimiento cuyo objetivo es ser en una red social que conecte a ciudadanos con políticos a través de proveer un sistema de votación sobre los proyectos de ley que se discuten en el Congreso. Nuestro trabajo fue el diseño conceptual de las interacciones e interfaces de su primer prototipo.</p>
                                </div>

                                <div class="item">
                                    <h2 class="title">Cancha Chile  <span class="year"> 2013</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://canchachile.cl" target="_blank">http://canchachile.cl</a></span>
                                    <p class="desc">Desarrollamos la versión digital del catálogo del Pabellón de Chile para la XII Bienal de Arquitectura de Venecia.</p>
                                </div>

                                <div class="item">
                                    <h2 class="title">Reconstruye<span class="year"> 2010-2012</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://www.reconstruye.org/" target="_blank">http://www.reconstruye.org</a></span>
                                    <p class="desc">Ayudar a mejorar la calidad de vida de las personas a través del diseño es uno de nuestros principales objetivos. Después del terremoto de Chile en 2010, trabajamos junto a una amplia red de profesionales en la ONG Reconstruye, una organización sin fines de lucro orientada a la promoción y propuesta de proyectos que colaboren con un proceso justo, equitativo e inclusivo de reconstrucción.  </p>
                                </div>

                                <div class="item">
                                    <h2 class="title">IEUT / EURE  <span class="year"> 2010-2011</span></h2>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://ieut.cl" target="_blank">http://ieut.cl</a></span>
                                    <span class="site"><i class="fa fa-angle-right"></i> <a href="http://eure.cl" target="_blank">http://eure.cl</a></span>
                                    <p class="desc">Para el Instituto de Estudios Urbanos y Territoriales de la Pontificia Universidad Católica de Chile desarrollamos la versión digital de Revista Eure, que acoge 40 años de publicaciones académicas; y la plataforma web del instituto.</p>
                                </div>
                            </div>



                        </div>

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