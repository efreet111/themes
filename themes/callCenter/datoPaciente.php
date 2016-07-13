
<div class="container-fluid">
<!--
	<div class="row">
			<div class="col-md-12">
									
				<div class="col-xs-1 text-right">

					 				
				</div>
				<div class="col-xs-3 text-right">
					<div>
						<select name="selMyList" onchange="showHide(this)" class="active btn btn-info dropdown-toggle">
							<option value="1">Documento Identidad</option>
							<option value="2">Nombres</option>
							<option value="3">Fecha Nac.</option>
						 </select>
					</div>
				</div>
				
				<style type="text/css">

				#div1,#div2,#div3 {
				display: none
				}
				 
				</style>
				<script type="text/javascript">
					function showHide(elem) {
						//if(elem.selectedIndex != 0) {
							 //hide the divs
							 for(var i=0; i < divsO.length; i++) {
								 divsO[i].style.display = 'none';
							}
							//unhide the selected div
							document.getElementById('div'+elem.value).style.display = 'block';
						//}
					}
					 
					window.onload=function() {
						//get the divs to show/hide
						divsO = document.getElementById("frmMyform").getElementsByTagName('div');
						document.getElementById('div1').style.display = 'block';
					}
				</script> 
				
				<div id="frmMyform">
				 
					 <div id="div1" class="col-xs-4 text-center" data-toggle="buttons">
						<table style="width:100%">
							<tr>
								<td style="width:30%">
									<select id="sel1" class="active btn btn-info dropdown-toggle">
										<option value="V">V - </option>
										<option value="E">E - </option>
										<option value="J">J - </option>
										<option value="G">G - </option>
									</select>
								</td>
								<td style="width:70%">
									<input type="number" name="number" class="form-control input-sm">
								</td>
							</tr>
						</table>
					</div>
					<div id="div2" class="col-xs-4 text-center">
						<table style="width:100%">
							<tr>
								<td>
									<input type="number" name="number" class="form-control input-sm">
								</td>
							</tr>
						</table>
					</div>
					<div id="div3" class="col-xs-4 text-center">
						<table style="width:100%">
							<tr>
								<td>
									<input type="date" name="fechaNac" id="fechaNac" class="form-control input-sm">
								</td>
							</tr>
						</table>
					</div>
				 
				</div>
				
				<div class="col-xs-3 text-left">
					  <a class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
				</div>
				<div class="col-xs-1 text-right">
				</div>
					
			</div>
		
	</div>
	-->
	
	<div class="row">
		<div class="col-md-8">
		
			<!-- Inicio Registro de Paciente  -->

					<!-- Inicio Datos Basicos del Paciente  -->
					<?php include "datosBasicoPaciente.php";?>
					<!-- Fin Datos Basicos  -->
					
					<!-- Inicio Datos Representante del Paciente  -->
					<?php include "datosRepresentantePaciente.php";?>
					<!-- Fin Datos Representante  -->
					
					<!-- Inicio Datos Laborables del Paciente  -->
					<?php include "datosAntecedentesLaboralesPaciente.php";?>
					<!-- Fin Datos Laborables del Paciente  -->
					
					<!-- Inicio Datos Motivo del Paciente  -->
					<?php include "datosMotivocitaPaciente.php";?>
					<!-- Fin Datos Motivo del Paciente  -->

					<!-- Inicio Datos Seguro del Paciente  -->
					<?php include "datosSeguroPaciente.php";?>
					<!-- Fin Datos Basicos  -->

					<!-- Inicio Datos Antropometricos del Paciente  -->
					<?php include "datosAntropometricosPaciente.php";?>
					<!-- Fin Datos Antropometricos  -->

					<!-- Inicio Datos Status del Paciente  -->
					<?php include "datosStatusPaciente.php";?>
					<!-- Fin Datos Status del Paciente -->
			
			<!-- Fin Registro de Paciente  -->
			

			
			<!-- Registro de Cita de Paciente  -->
			
					<!-- Inicio Registro de Cita de Paciente  - Especialidad de Examen -->
					<?php include "regcita0Especialidadexamen.php";?>
					<!-- Fin Registro de Cita de Paciente  - Especialidad de Examen -->

					<!-- Inicio Registro de Cita de Paciente  - Disponibilidad de Fecha -->
					<?php include "regcita1DisponibilidadFecha.php";?>
					<!-- Fin Registro de Cita de Paciente  - Disponibilidad de Fecha   -->
				
			<!-- Fin Registro de Cita de Paciente  -->


			<!--Menu Veritical  -->

					<!-- Inicio Referencias Pendientes Menu Vertical -->
							<?php include "menuvertivcal1Preaprobadas.php";?>
					<!-- Fin Registro de Cita de Paciente  - Preaprobadas  -->

					<!-- Inicio Confirmacion de Referencias Pendientes Menu Vertical -->
							<?php include "menuvertivcal2Confirmacionpreaprobadas.php";?>
					<!-- Fin Confirmacion de Referencias Pendientes Menu Vertical  -->

					<!-- Inicio Temporaios Menu Vertical -->
							<?php include "menuvertivcal3Temporarios.php";?>
					<!-- Fin Temporaios  Menu Vertical  -->

					<!-- Inicio Historico de Paciente Menu Vertical -->
							<?php include "menuvertivcal4Historicopaciente.php";?>
					<!-- Fin Historico de Paciente Menu Vertical  -->

					<!-- Inicio Listado Confirmacion de citas Menu Vertical -->
							<?php include "menuvertivcal5listaconfirmaciondecitas.php";?>
					<!-- Fin Listado Confirmacion de citas Menu Vertical  -->

					<!-- Inicio Confirmacion de citas Menu Vertical -->
							<?php include "menuvertivcal6Confirmaciondecitas.php";?>
					<!-- Fin Confirmacion de citas Menu Vertical  -->

			<!--Menu Veritical  -->

		</div>
		

		<div class="col-md-4">
		
			<!-- Inicio Sumary Info. -->
			<?php include "summaryInfo.php"; ?>
			<!-- Fin Sumary Info. -->
			
		</div>
	</div>
</div>
