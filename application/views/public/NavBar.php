<header>
    <div class="row">
        <div class="col s6 ">
            <img class="responsive-img" src="<?php echo base_url() ?>public/header/ministerioJusticia.png" alt="">
        </div>
        <div class="col s6 ">
            <img class="responsive-img img-conalpedis" src="<?php echo base_url() ?>public/header/CONALPEDIS.png" alt="">
        </div>
    </div>
    <div>
        <nav>
            <div class="nav-wrapper ">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="<?php echo site_url('Inicio'); ?>">Inicio</a> </li>
                    <li><a class="dropdown-trigger " href="#!" data-target="institucion">Institución<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="<?php echo site_url('Gestion') ?>">Gestión</a></li>
                    <li><a class="dropdown-trigger t" href="#!" data-target="transparencia">Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="<?php echo site_url('marco-legal') ?>">Marco Legal</a></li>
                    <li><a href="<?php echo site_url('prensa') ?>">Prensa</a></li>
                    <li><a class="dropdown-trigger " href="#!" data-target="contacto">Contacto<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger " href="#!" data-target="estadistica">Repositorio de Datos<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>


        <!-- Dropdown Institución-->
        <ul id="institucion" class="dropdown-content blue darken-4  ">
            <li><a href="<?php echo site_url('mision-vision'); ?>">Misión y Visión</a></li>
            <li><a href="<?php echo site_url('funcion-institucion'); ?>">Funcion de la Institución</a></li>
            <li><a href="<?php echo site_url('atribuciones-institucionales'); ?>">Atribuciones Institucionales</a></li>
            <li><a href="<?php echo site_url('estructura-organizacional'); ?>">Estructura Organizacional</a></li>
            <li><a href="<?php echo site_url('organigrama-institucional'); ?>">Organigrama Institucional</a></li>
            <li><a href="<?php echo site_url('marco-normativo'); ?>">Marco Normativo Existente de la Institución</a></li>
            <li><a href="<?php echo site_url('trayectoria-mae'); ?>">Trayectoria de la MAE</a></li>

        </ul>


        
    </div>

</header>