<div class="container">
	<h5>CAPACITACIONES</h5>
	<div class="divider"></div>
  <?php 
        $msj = $this->session->flashdata('publi_exitosa');
        if ($msj) { ?>

        <center><span class="green-text" style="font-size: 22px;"> <?php echo (mb_strtoupper($msj,'UTF-8')); ?></span></center>

  <?php } ?>
  <div class="row">
    <div class="col s12 m12 l12 xl12">
      <?php
            if ($lista_capacitaciones) { 
               foreach ($lista_capacitaciones as $row) {?>
                  <ul class="collection with-header">
                  <li class="collection-header blue-grey darken-4">
                  <h6><?php echo (mb_strtoupper($row->titulo_cap,'UTF-8')); ?>
                  <span class="right hide-on-med-and-down" style="font-size: 13px;"> Creado el</span><br>
                  <span class="right hide-on-med-and-down" style="font-size: 13px; color: #fff">
                  <?php echo $row->fecha_creacion; ?>
                  </span>
                  </h6>
                  </li>
                  <li class="collection-item grey lighten-3"><?php echo $row->descripcion_cap; ?></li>
                  <li class="collection-item"><b>Duración: </b><span style="font-size: 13px;"><?php echo $row->horas_cap; ?> horas</span></li>
                  <li class="collection-item"><b>Fecha de capacitación: </b><span style="font-size: 13px;"><?php echo $row->fecha_cap; ?></span></li>
                  <i class="material-icons small">info_outline</i><a href="<?php echo base_url();?>Odap/contacto">Mas información</a>
                </ul>
            <?php } }
            else{
              echo "<div class='card-panel red lighten-3'>
                      <span style='font-size: 17px !important; font-weight: normal;'>No existen registros de capacitaciones.</span>
                    </div>";
            }

       ?>
    </div>
  </div>
</div>