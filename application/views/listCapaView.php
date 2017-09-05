  <div class="container">
  	<div class="row">
  		<div class="col s12 m12 l12 xl12">
  			<div class="section">
  				<?php 
  				$msj = $this->session->flashdata('del_reg');
  				if ($msj) { ?>
  				<center><span class="green-text" style="font-size: 18px;"> <?php echo (mb_strtoupper($msj,'UTF-8')); ?></span></center>
  				<?php } ?>
  				<?php 
  				$msj = $this->session->flashdata('act_reg');
  				if ($msj) { ?>
  				<center><span class="green-text" style="font-size: 18px;"> <?php echo (mb_strtoupper($msj,'UTF-8')); ?></span></center>
  				<?php } ?>
  			</div>	
  			<table class="bordered responsive-table">
  				<thead>
  					<tr>
  						<th><i class="material-icons left">edit</i>Título</th>
  						<th><i class="material-icons left">timer</i>Duración</th>
  						<th><i class="material-icons left">today</i>Fecha de Cap.</th>
  						<th><i class="material-icons left">build</i>Acciones</th>

  					</tr>
  				</thead>
  				<tbody>
  					<?php if($listCapa)
  					foreach ($listCapa as $row) {?>
  					<tr>
  						<td><?php echo $row->titulo_cap; ?></td>
  						<td><?php echo $row->horas_cap; ?> hr(s)</td>
  						<td><?php echo $row->fecha_cap; ?></td>
  						<td>
	  						<a href="<?php echo base_url('odap/editar/').$row->id_cap; ?>"><i class="material-icons center">edit</i>Editar</a>&nbsp;
	  						<a href="#deletMdl" class="red-text"><i class="material-icons center red-text">delete_forever</i>Eliminar</a>
  						</td>
  					</tr>
  						<!-- Modal Structure -->
  						<div id="deletMdl" class="modal">
  							<div class="modal-content">
  								<h4>Desea eliminar este registro?</h4>
  								<p></p>
  							</div>
  							<div class="modal-footer">
  								<a href="<?php echo base_url('odap/delete/').$row->id_cap;?>" class="modal-action waves-effect waves-green btn-flat">SI</a>
  								<a class="modal-action modal-close waves-effect waves-green btn-flat">NO</a>
  							</div>
  						</div>
  						<!-- End Modal Structure -->

  						<?php }else{
  							echo "<center><div class='card-panel red lighten-3'>
  							<span style='font-size: 17px !important; font-weight: normal;'>No existen registros en esta sección.</span>
  						</div></center>
  						";
  					}

  					?>
  				</tbody>                  
  			</table>
  		</div>
  	</div>	
  </div>
