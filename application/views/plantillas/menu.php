  <div class="row">
    <div class="col s4 hide-on-med-and-down m2 l2">
      <img width="162px" src="<?php echo base_url();?>images/LogoOdap.png"> <!-- img barra de nav escritorio -->
    </div>
    <nav class="blue-grey lighten-5">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-large-only hide-on-med-and-up"><img width="162px" src="<?php echo base_url();?>images/LogoOdap.png"></a><!-- img barra de nav tablet y moviles -->
        <a href="#" data-activates="mobile-demo" class="button-collapse orange-text"><i class="material-icons">menu</i></a>
          <!-- MENÚ MÓVIL -->
          <ul class="side-nav blue-grey lighten-5" id="mobile-demo">
            <li><a href="<?php echo base_url();?>odap/index">Inicio</a></li>
            <li><a href="<?php echo base_url();?>odap/nosotros">Nosotros</a></li>
            <li><a href="<?php echo base_url();?>odap/capacitaciones">Capacitaciones</a></li>
            <li><a href="<?php echo base_url();?>odap/galeria">Galería</a></li>
            <li><a href="<?php echo base_url();?>odap/inscripcion">Inscripciones</a></li>
            <li><a href="<?php echo base_url();?>odap/contacto">Contacto</a></li>
            <?php if($this->session->userdata('login')) {?>
              <li><a href="<?php echo base_url();?>odap/publicaciones"><i class="material-icons black-text left">visibility</i>Nueva publicación</a></li>
              <li><a href="<?php echo base_url();?>login/logout"><i class="material-icons black-text left">lock_outline</i>Cerrar sesión</a></li>
            <?php }else{ ?> 
              <li><a href="<?php echo base_url();?>login/"><i class="material-icons black-text left">lock_open</i>Login</a></li>
            <?php } ?>
          </ul>
          <!-- MENÚ MÓVIL -->

          <!-- MENÚ ESCRITORIO -->
        <ul id="nav-mobile" class="center hide-on-med-and-down">
          <li><a href="<?php echo base_url();?>odap/index">Inicio</a></li>
          <li><a href="<?php echo base_url();?>odap/nosotros">Nosotros</a></li>
          <li><a href="<?php echo base_url();?>odap/capacitaciones">Capacitaciones</a></li>
          <li><a href="<?php echo base_url();?>odap/galeria">Galería</a></li>
          <li><a href="<?php echo base_url();?>odap/inscripcion">Inscripciones</a></li>
          <li><a href="<?php echo base_url();?>odap/contacto">Contacto</a></li>     

        <?php 
          if($this->session->userdata('login')) 
        {?>     
          <li class="right"><a href="<?php echo base_url();?>login/logout"><i class="material-icons black-text left">lock_outline</i>Cerrar sesión</a></li>
          <li class="right"><a href="<?php echo base_url();?>odap/publicaciones"><i class="material-icons black-text left">visibility</i>Nueva publicación</a></li>
        <?php }else{ ?> 
         <li class="right"><a href="<?php echo base_url();?>login/"><i class="material-icons black-text left">lock_open</i>Login</a></li>
       </ul>
       <!-- MENÚ ESCRITORIO -->
       <?php } ?>
    </div>
  </nav>
</div>
</div>
</div>
</div>