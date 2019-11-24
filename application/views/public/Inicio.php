<div class="row ">

    <main class="col m10 s12 ">
        <div class="row">
            <div class="col s12   animated  bounceInDown ">

                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/6.jpeg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/7.jpeg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/8.jpeg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/9.jpeg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/1.jpg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/2.jpg">
                            <div class="caption left-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/3.jpg">
                            <div class="caption right-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/4.jpg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                        <li>
                            <img class="responsive-img" src="<?php echo base_url() ?>public/carusel/5.jpg">
                            <div class="caption center-align">
                                <h3></h3>
                                <h5 class="light grey-text text-lighten-3"></h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col s12 animated  bounceInDown delay-1s">
                <h3 class="center-align">Noticias Recientes</h3>
                <div class="row">

                    <div class="col s12">

                        <div class="row">
                            <?php foreach ($colecciones as $coleccion) { ?>
                                <div class="col s12 m12 ">
                                    <a href="http://prensa.localhost/Noticia/<?php echo $coleccion['id_noticia'] ?>">
                                        <div class="card " style="background:url(http://prensa.localhost/uploads/noticias/<?php echo $coleccion['nombre_imagen'] ?>);background-position:center">
                                            <div class="card-content ">
                                                <span class="card-title center-align"><?php echo $coleccion['titulo'] ?></span>
                                                <p class="center-align"><?php echo $coleccion['fecha'] ?></p>

                                            </div>

                                        </div>
                                    </a>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>