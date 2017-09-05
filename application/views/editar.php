 <div class="container">
  <div class="row">
      <h4>Actualización de datos</h4>
      <?php 
        $msj = $this->session->flashdata('actu_exitosa');
        if ($msj) { ?>

        <center>
        <div class='card-panel green lighten-3'>
            <span style='font-size: 17px !important; font-weight: normal;'><?php echo (mb_strtoupper($msj,'UTF-8')); ?></span>
        </div>
        </center>

  <?php } ?>
      <span class="error"><?php echo validation_errors(); ?></span>
      <?php if($datos){
        foreach ($datos as $value) {?>
      
  <form action="<?= base_url('odap/update/').$value->id_cap;?>" method="post" id="formUpdate">
    <div class="row">
      <div class="col s12 m12">
        <div class="col s12 m6">
          <div class="input-field">
            <input name="titulo" id="titulo" class="modificacion" type="text" value="<?php echo $value->titulo_cap ?>">
            <label for="titulo">Título</label>
          </div>
        </div>
        <div class="col s12 m12">
          <div class="input-field">
            <input type="text" class="modificacion" name="descripcion" data-length="600" value="<?php echo $value->descripcion_cap ?>">
            <label for="descripcion">Descripción</label>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="input-field">
            <input name="horas" class="modificacion" type="text" value="<?php echo $value->horas_cap ?>">
            <label for="horas">Horas</label>
          </div>
        </div>
         <div class="col s12 m4">
         <label for="fecha">Fecha de capacitacion</label>
            <input type="text" class="datepicker modificacion" name="fecha" value="<?php echo $value->fecha_cap ?>">
        </div>
        <div class="col s12">
           <p class="center-align">
              <button class="waves-effect waves-orange btn orange accent-2 black-text" type="submit" id="submit"><i class="material-icons right">send</i>Actualizar</button>
            </p>
        </div>
      </div>
    </div>
    <div class="row">

    </div>
    </form>

      <?php }} 
        ?>
</div>

</div>	