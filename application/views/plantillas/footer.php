</main>
<footer class="page-footer  blue-grey lighten-5">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6 xl6">
				<h5>ODAP</h5>
				<p class="black-text">Organización para el desarrollo y actualización de profesionales.</p>
				<p class="blue-text"><i class="material-icons prefix orange-text">email</i> odapsas@gmail.com</p>	
			</div>
			<div class="col s12 m6 l6 xl6">
				<h5>REDES SOCIALES</h5>
				<a href="https://www.facebook.com/odapsas/" target="_blank" class="blue darken-3 waves-effect waves-light btn social facebook">
					<i class="fa fa-facebook"></i> FACEBOOK</a>
					<br><br>
					<a href="https://www.instagram.com/odapsas/" target="_blank" class="indigo lighten-2 waves-effect waves-light btn social instagram">
						<i class="fa fa-instagram"></i> INSTAGRAM</a>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container black-text">
					© 2017 Copyright - Desarrollado por <b>Timbalab</b>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/js/materialize.js"></script>
		<script src="https://use.fontawesome.com/295276088e.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".button-collapse").sideNav();
				$('.slider').slider();
				$('select').material_select();
				$('.materialboxed').materialbox();
				$('.modal').modal();
				$('.carousel.carousel-slider').carousel({fullWidth: true}); //Utilizado por la galería
				//Función siguiente
				 $('#nextButton').click(function() {
				 	$('.carousel').carousel('next');
				 });
				 //Función Anterior
				 $('#beforeButton').click(function() {
				 	$('.carousel').carousel('prev');
				 });
				$('.carousel').carousel({
					padding: 200    
				});
				autoplay()   
				function autoplay() {
					$('.carousel').carousel('next');
					setTimeout(autoplay, 5500);
				}
				

				$('.datepicker').pickadate({
					monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
					monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
					weekdaysFull: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
					weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
					showMonthsShort: undefined,
					showWeekdaysFull: undefined,
				    selectMonths: true, // Creates a dropdown to control month
				    selectYears: 15, // Creates a dropdown of 15 years to control year,
				    today: 'Hoy',
				    clear: 'Limpiar',
				    close: 'Ok',
				    closeOnSelect: false, // Close upon selecting a date,

				    min: 1,
				    max: 670,


				});
			});

		</script>
	</body>
	</html>