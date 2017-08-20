<div class="container">
	<div class="row" >
		<h5>FORMULARIO DE INSCRIPCIÓN</h5>
		<div class="divider"></div><br>
		<span class="error"><?php echo validation_errors(); ?></span>
		<form method="POST" action="<?php echo base_url();?>odap/insertar_inscripcion" id="formInscripcion" name="formInscripcion">
			<div class="row">
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">contacts</i>
					<input type="text" name="identificacion" value="<?php echo set_value('identificacion'); ?>">
					<label for="identificacion">N° de identificación <span style="color: red;">*</span></label>			
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">perm_identity</i>
					<input type="text" name="nombres" value="<?php echo set_value('nombres'); ?>">
					<label for="nombres">Nombres <span style="color: red;">*</span></label>

				</div>

				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">person_pin</i>
					<input type="text" name="apellidos" value="<?php echo set_value('apellidos'); ?>">
					<label for="apellidos">Apellidos <span style="color: red;">*</span></label>					
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">email</i>
					<input type="email" name="email" value="<?php echo set_value('email'); ?>">
					<label for="email">Email <span style="color: red;">*</span></label>				
				</div>
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">email</i>
					<input type="email" name="conf_email" value="<?php echo set_value('conf_email'); ?>">
					<label for="conf_email">Confirmar Email <span style="color: red;">*</span></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">phone</i>
					<input type="tel" name="telefono" value="<?php echo set_value('telefono'); ?>">
					<label for="telefono">Teléfono fijo</label>

				</div>
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">phonelink_ring</i>
					<input type="tel" name="celular" value="<?php echo set_value('celular'); ?>">
					<label for="celular">Celular <span style="color: red;">*</span></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">library_books</i>
					<input type="text" name="profesion" value="<?php echo set_value('profesion'); ?>">
					<label for="profesion">Profesión <span style="color: red;">*</span></label>
				</div>
				<div class=" input-field col s12 m6 l4 xl6">
					<i class="material-icons prefix">info_outline</i>
					<select name="encuesta">
						<option value="" disabled selected >Me enteré de este programa a través de</option>
						<option value="Facebook" <?php echo  set_select('encuesta', 'FACEBOOK'); ?>>Facebook</option>
						<option value="Llamada" <?php echo  set_select('encuesta', 'LLAMADA'); ?>>Llamada</option>
						<option value="Otro" <?php echo  set_select('encuesta', 'OTRO'); ?>>Otro</option>
						<option value="PaginaWeb" <?php echo  set_select('encuesta', 'PAGINAWEB'); ?>>Pagina Web</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l4 xl6" >
					<i class="material-icons prefix">credit_card</i>
					<input type="text" name="codigo_banc" value="<?php echo set_value('codigo_banc'); ?>">
					<label for="codigo_banc">Código</label>
				</div>

				<div class="input-field col s12 m6 l4 xl6">
					<input type="checkbox" name="terminos" id="terminos" value="SI" />
					<label for="terminos" style="pointer-events: auto !important;">Acepto los términos y condiciones <span style="color: red;">*</span></label>
				</div>
			</div>			
			<p class="center-align">
				<button class="waves-effect waves-orange btn orange accent-2 black-text" type="submit"><i class="material-icons right">send</i>enviar</button>
			</p>

		</form>
	</div>
</div>