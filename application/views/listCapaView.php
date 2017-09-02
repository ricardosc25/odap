  <div class="row">
    <div class="col s12 m12 l12 xl12">
     <table class="bordered responsive-table">
        <thead>
          <tr>
              <th>Título</th>
              <th>Descripción</th>
              <th>Horas</th>
              <th>Fecha de Cap.</th>
              <th>Estado</th>
              <th>Acciones</th>
          </tr>
        </thead>
           <tbody>
          <?php if($listCapa)
          		foreach ($listCapa as $row) {?>
          			<tr>
          			<td style="width: 10px;"><?php echo $row->titulo_cap; ?></td>
          			<td style="width: 400px;"><?php echo $row->descripcion_cap; ?></td>
          			<td><?php echo $row->horas_cap; ?></td>
          			<td><?php echo $row->fecha_cap; ?></td>
          			<td><?php echo $row->estado_cap; ?></td>
          			<td><a href="#" class="btn">Editar</a>&nbsp;<a href="#" class="btn red lighten-1">Eliminar</a></td>
          			</tr>
          			
          		<?php }

           ?>
           </tbody>                  
      </table>
    </div>
  </div>	