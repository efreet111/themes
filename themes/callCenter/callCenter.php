<!DOCTYPE html>
<html lang="en">

	<?php 
	$vPath = "../";
	include "$vPath"."header.php"; 
	?>

  <body class="dashboard-panel">
  
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">

			<?php include "$vPath"."horizontal_navbar.php"; ?>

		</div>
	</nav>
		
	<div class="container-fluid">
		<div class="row">
	  
			<div class="col-sm-3 col-md-2 sidebar">
			
				<?php include "vertical_navbar.php"; ?>
				
				
				<div class="row">
					<div class="col-md-12">
						<a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
						<a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
						<a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
					</div>
				</div>
				
			</div>
		
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
			  <!-- contenido -->

				 
				<!-- Barra de estado (paso) -->	  
				<?php include "status_navbar.php"; ?>
				<!-- Barra de estado (paso) -->
				
				
				<div class="well graficas">

						<div class="col-xs-12">
						
						
			<?php   
								
				
				function main()
				{


					$VactorC=1;

			 
				}
			 
				$VectorCC = main();
									
			?>

							<div class="tab-content">
								<div class="tab-pane active" id="paciente_container"><?php include "datoPaciente.php"; ?></div>
								<div class="tab-pane" id="servicio_container"><?php include "motivoPaciente.php"; ?></div>
								<div class="tab-pane" id="calendar_container"><?php include "especialidadExamen.php"; ?></div>
								<div class="tab-pane" id="seguro_container"><?php include "enfermeria4_Antecedenteslaborales.php"; ?></div>
								<div class="tab-pane" id="confirm_container"><?php include "datoPaciente.php"; ?></div>
							</div>
							
							<div class="col-xs-12 text-center">
							
								<div id="tab" class="btn-group" data-toggle="buttons" >
									<a href="#paciente_container" class="btn btn-default active" data-toggle="tab">
										<input type="radio">1</a>
									<a href="#servicio_container" class="btn btn-default" data-toggle="tab">
										<input type="radio">2</a>
									<a href="#calendar_container" class="btn btn-default" data-toggle="tab">
										<input type="radio">3</a>
									<a href="#seguro_container" class="btn btn-default" data-toggle="tab">
										<input type="radio">4</a>	
									<a href="#confirm_container" class="btn btn-default" data-toggle="tab">
										<input type="radio">5</a>
								</div>
								
							</div>
							
						</div>

					</div>
						
				</div>
			</div>

          <!-- contenido -->
		</div>
    </div>

	<?php include "$vPath"."footer.php"; ?>

  </body>
</html>