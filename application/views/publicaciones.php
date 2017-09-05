<div class="container">
	<h5>PUBLICACIONES</h5>
	<div class="divider"></div>
  <span class="error"><?php echo validation_errors(); ?></span>
  <form action="<?= base_url();?>odap/publicar" method="post">
    <div class="row">
      <div class="col s12 m12">
        <div class="col s12 m6">
          <div class="input-field">
            <input placeholder="Ejemplo: MICROBILOGÍA" name="titulo" type="text" value="<?php echo set_value('titulo'); ?>">
            <label for="titulo">Título</label>
          </div>
        </div>
        <div class="col s12 m12">
          <div class="input-field">
            <input placeholder="Ejemplo: ACTUALIZACIÓN DE LABORATORIO CLÍNICO." type="text" name="descripcion" data-length="600" value="<?php echo set_value('descripcion'); ?>">
            <label for="descripcion">Descripción</label>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="input-field">
            <input placeholder="40" name="horas" type="text" value="<?php echo set_value('horas'); ?>">
            <label for="horas">Horas</label>
          </div>
        </div>
         <div class="col s12 m4">
         <label for="fecha">Fecha de capacitacion</label>
            <input type="text" class="datepicker" name="fecha" placeholder="10 Agosto de 2017" value="<?php echo set_value('fecha');?>">
        </div>
        <div class="col s12">
           <p class="center-align">
              <button class="waves-effect waves-orange btn orange accent-2 black-text" type="submit"><i class="material-icons right">send</i>enviar</button>
            </p>
        </div>
      </div>
    </div>
    <div class="row">

    </div>
    </form>
  </div>
