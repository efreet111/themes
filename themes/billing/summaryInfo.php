			<style type="text/css">
				fieldset.scheduler-border {
					width: 100%; 
					border: 2px groove #0063CB !important;
					padding: 0 1.4em 1.4em 1.4em !important;
					margin: 0 0 1.5em 0 !important;
					border:#f00 1px solid;
					-webkit-border-radius: 8px;
					-moz-border-radius: 8px;
					border-radius: 8px;
				}

				legend.scheduler-border {
					font-size: 0.9em !important;
					font-weight: bold !important;
					text-align: left !important;
					width:auto;
					padding:0 10px;
					border-bottom:none;
					--background-color: #00a94f !important;
				}	

				#div11,#div21,#div31 {
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
					divsO = document.getElementById("frmMyform1").getElementsByTagName('div');
					document.getElementById('div11').style.display = 'block';
				}
			</script> 

<fieldset class="scheduler-border">
<legend class="scheduler-border">Consulta paciente</legend>

			<div class="row">
				<div class="col-md-16 text-center">
					<div class="col-xs-16 text-center">
							<select name="selMyList1" onchange="showHide(this)" class="active btn btn-info dropdown-toggle" style="width:90%">
								<option value="11">Documento identidad</option>
								<option value="21">Nombre y/o apellido</option>
								<option value="31">Fecha nacimiento</option>
							 </select>
							<p></p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-16 text-center">
					<div id="frmMyform1">
					 
						 <div id="div11" class="col-xs-12 text-center">
								<table style="width: 100%;">
									<tr>
										<td class="text-left">
											<select id="sel1" class="active btn btn-info dropdown-toggle">
												<option value="V">V -</option>
												<option value="E">E -</option>
												<option value="J">J -</option>
												<option value="G">G -</option>
											</select>
										</td>
										<td class="text-right">
											<input type="number" name="number" class="form-control input-sm" placeholder="Identif. sin caracteres">
										
										</td>
									</tr>
								</table>
						</div>
						
						<div id="div21" class="col-xs-12 text-center">
							<input type="number" name="number" class="form-control input-sm" placeholder="Escriba el nombre del paciente">
						</div>
						
						<div id="div31" class="col-xs-12 text-center">
							<input type="date" name="fechaNac" id="fechaNac" class="form-control input-sm">
						</div>
					 
					</div>
				</div>
			</div>	
				
			<div class="row">
				<div class="col-md-16 text-center">	
					<div class="col-xs-12 text-left">
						<p></p>
						<table style="width: 60%;">
							<tr>
								<td class="text-center">
									<a class="btn btn-info btn-sm">Buscar <i class="fa fa-fw fa-search"></i></a>
								</td>
								<td class="text-center">
									<a class="btn btn-info btn-sm"><i class="glyphicon glyphicon-download-alt"></i></a>
								</td>
								<td class="text-center">
										<!-- Inicio Button trigger modal -->
											<a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#myModal">
												<i class="glyphicon glyphicon-file"></i>
											</a>
											<!-- Inicio Modal -->
											<?php include "modalConsultaPaciente.php"; ?>
											<!-- Fin Modal -->
										<!-- Fin Button trigger modal -->
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-16">
					<br>
					<div class="col-xs-7">
						Carlos Perdigon<br>
						v-12.484.759<br>
						Telf.(212) 999.0926<br>
						Caracas, Venezuela
					</div>
					<div class="col-xs-5 text-right">
						<img src="../images/silueta_gris.png" border="0" class="fill img-responsive" width="80" height="80">
					</div>
				</div>
			</div>
</fieldset>

<fieldset class="scheduler-border">
<legend class="scheduler-border">Historia paciente</legend>
				<div class="row">
					<div class="col-md-16 text-center">
						<div class="col-xs-2 text-right">
								<img src="../images/cita.png" border="0" class="fill img-responsive" width="20" height="20">
						</div>
						<div class="col-xs-14 text-left">
								<h4>Útima visita</h4>
						</div>
					</div>
				</div>
				<div class="container-liquid" style="margin:0px; padding: 0px">
					<div class="row">
						<div class="col-xs-4 text-left leftspan" id="one">Fecha:</div>
						<div class="col-xs-8 text-left leftspan" id="two">01-05-2016</div>
						
						<div class="col-xs-4 text-left leftspan" id="five">Motivo:</div>
						<div class="col-xs-8 text-left leftspan" id="six">Exam. Prevacacional</div>
						
						<div class="col-xs-4 text-left leftspan" id="five">Especialidad:</div>
						<div class="col-xs-8 text-left leftspan" id="six">Cardiologia</div>
						
						<div class="col-xs-4 text-left leftspan" id="five">Medico:</div>
						<div class="col-xs-8 text-left leftspan" id="six">Pedro Junior</div>
						
						<div class="col-xs-4 text-left leftspan" id="five">Tratamiento:</div>
						<div class="col-xs-8 text-left leftspan" id="six">N/A</div>
					</div>
				</div>
			</p>
			<p>
				<!-- Inicio Button trigger modal -->
				<a class="btn" href="" data-toggle="modal" data-target="#myModal">Ver detalles »</a>
                  
                  <!-- Inicio Modal -->
                  <?php include "modalConsultaPaciente.php"; ?>
				  <!-- Fin Modal -->
				  
				<!-- Fin Button trigger modal -->
			</p>
</fieldset>