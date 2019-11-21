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
                    <li><a class="dropdown-trigger" href="#!" data-target="institucion">Institución<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="<?php echo site_url('Gestion') ?>">Gestión</a></li>
                    <li><a class="dropdown-trigger t" href="#!" data-target="transparencia">Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="<?php echo site_url('Marco-Legal') ?>">Marco Legal</a></li>
                    <li><a href="http://prensa.conalpedis.gob.bo">Prensa</a></li>
                    <li><a class="dropdown-trigger " href="#!" data-target="contacto">Contacto<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="http://multimedia.conalpedis.gob.bo">Multimedia</a> </li>
                    <li><a class="dropdown-trigger " href="#!" data-target="discuentos">DISCUENTOS<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?php echo site_url('Inicio'); ?>">Inicio</a> </li>
            <li><a class="dropdown-trigger" href="#!" data-target="institucion">Institución<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('Gestion') ?>">Gestión</a></li>
            <li><a class="dropdown-trigger t" href="#!" data-target="transparencia">Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('Marco-Legal') ?>">Marco Legal</a></li>
            <li><a href="http://prensa.conalpedis.gob.bo">Prensa</a></li>
            <li><a class="dropdown-trigger " href="#!" data-target="contacto">Contacto<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="http://multimedia.conalpedis.gob.bo">Multimedia</a> </li>
            <li><a class="dropdown-trigger " href="#!" data-target="discuentos">DISCUENTOS<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>


        <!-- Dropdown Institución-->
        <ul id="institucion" class="dropdown-content blue darken-4  ">
            <li><a href="<?php echo site_url('Mision-Vision'); ?>">Misión y Visión</a></li>
            <li><a href="<?php echo site_url('Funcion-Institucion'); ?>">Funcion de la Institución</a></li>
            <li><a href="<?php echo site_url('Atribuciones-Institucionales'); ?>">Atribuciones Institucionales</a></li>
            <li><a href="<?php echo site_url('Estructura-Organizacional'); ?>">Estructura Organizacional</a></li>
            <li><a href="<?php echo site_url('Marco-Normativo'); ?>">Marco Normativo Existente de la Institución</a></li>
            <li><a href="<?php echo site_url('Trayectoria-MAE'); ?>">Trayectoria de la MAE</a></li>

        </ul>

        <ul id="transparencia" class="dropdown-content blue darken-4">
            <li><a href="<?php echo site_url('Recursos-Humanos') ?>">Recursos Humanos</a></li>
            <li><a href="<?php echo site_url('Planificacion') ?>"">Planificación</a></li>
            <li><a href=" <?php echo base_url() ?>public/transparencia/goe.pdf" target="_blank">Plan de Gobierno Electrónico</a></li>
            <li><a href="<?php echo site_url('Informacion-Financiera') ?>">Información Financiera</a></li>
            <li><a target="_blank" href="<?php echo base_url() ?>public/transparencia/viajes-mae.pdf">Viajes de la MAE</a></li>
            <li><a href="#!">Contrataciones</a></li>
            <li><a target="_blank" href="<?php echo base_url() ?>public/transparencia/INFORME-AUDITORIA.pdf">Auditoria Interna</a></li>
            <li><a href="<?php echo site_url('Reglamentos-Internos') ?>">Reglamentos Internos</a></li>

        </ul>
        <ul id="contacto" class="dropdown-content blue darken-4  ">
            <li><a href="<?php echo site_url('Direccion') ?>">Dirección</a></li>
            <!---	<li><a href="<?php echo site_url('formulario-de-contacto') ?>">Formulario de Contacto</a></li>--->



        </ul>
        <ul id="discuentos" class="dropdown-content blue darken-4  ">
            <li><a href="<?php echo site_url('Afiche-Cuenta-Cuentos') ?>">Afiche</a></li>
            <li><a target="_blank" href="<?php echo base_url() ?>public/discuentos/convocatoria.PDF">Convocatoria </a></li>





        </ul>



    </div>

</header>