
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
		
			<!-- Inicio Datos Basicos del Paciente  -->
			<?php include "datosBasicoPaciente.php";?>
			<!-- Fin Datos Basicos  -->

			<!-- Inicio Datos Representante  -->
			<br>
			<hr>
			<h3>Datos del representante</h3>
			
			<div class="row">
				<div class="col-xs-4">
					  <label for="Nombre">Nombre</label>
					  <input type="text" name="Nombre2" id="Nombre" class="form-control input-sm">
				</div>
				<div class="col-xs-4">
					  <label for="Apellido">Apellido</label>
					  <input type="text" name="Apellido2" id="Apellido" class="form-control input-sm">
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label>Sexo: </label><br>
						<div class="radio">
							<label>
								<input type="radio" name="sexo" value="h">Hombre 
							</label>
						</div>
						<div class="radio">
							<label></label>
						</div>
						<div class="radio">
							  <label>
								<input type="radio" name="sexo" value="m">Mujer 
							</label>
						</div>
					</div>
				</div>
				
			</div>
			
			
			<div class="row">

				<div class="col-xs-4">
					  <label for="fechaNac">Fecha Nac.</label>
					  <input type="date" name="fechaNac" id="fechaNac" class="form-control input-sm">
				</div>
				<div class="col-xs-2">
					  <label for="edad">Edad</label>
					  <input type="text" name="edad" id="edad" class="form-control input-sm" readonly>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<label>Estado Civil: </label><br>
					
						<div class="radio">
							<label>
								<input type="radio" name="estCivil" value="h"><h6>Soltero</h6> 
							</label>
						</div>
						<div class="radio">
							<label></label>
						</div>
						<div class="radio">
							  <label>
								<input type="radio" name="estCivil" value="m"><h6>Casado</h6> 
							</label>
						</div>
						<div class="radio">
							<label></label>
						</div>
						<div class="radio">
							  <label>
								<input type="radio" name="estCivil" value="m"><h6>Divorc.</h6> 
							</label>
						</div>
						<div class="radio">
							<label></label>
						</div>
						<div class="radio">
							  <label>
								<input type="radio" name="estCivil" value="m"><h6>Viudo</h6>
							</label>
						</div>
					
					</div>
				</div>

			</div>
			
			
			<h5>Lugar de Nacimiento</h5>
			<div class="row">
			
				<div class="col-xs-4">
					  <!--<label for="pais">País</label>-->
					  <select class="form-control" id="pais">
						<option value="">--Seleccionar País--</option>
						<option value="Ven">Venezuela</option>
						<option value="Pan">Panama</option>
						<option value="Col">Colombia</option>
						<option value="Usa">Usa</option>
						<option value="Ecua">Ecuador</option>
						<option value="Bra">Brazil</option>
					  </select>
				</div>
				<div class="col-xs-4">
					  <!--<label for="estado">Estado</label>-->
					  <select class="form-control" id="pais">
						<option value="">--Seleccionar Estado--</option>
						<option value="Miranda">Miranda</option>
						<option value="Anzoategui">Anzoategui</option>
						<option value="Carabobo">Carabobo</option>
						<option value="Zulia">Zulia</option>
						<option value="Aragua">Aragua</option>
						<option value="Tachira">Tachira</option>
						<option value="Merida">Merida</option>
					  </select>
				</div>
				<div class="col-xs-4">
					  <!--<label for="ciudad">Ciudad</label>-->
					  <select class="form-control" id="ciudad">
						<option value="">--Seleccionar Ciudad--</option>
						<option value="Caracas">Caracas</option>
						<option value="Maracay">Maracay</option>
						<option value="Valencia">Valencia</option>
						<option value="Maracaibo">Maracaibo</option>
						<option value="San Cristobal">San Cristobal</option>
						<option value="Merida">Merida</option>
					  </select>
				</div>

			</div>
			
			
			<h5>Lugar de Habitación</h5>
			<div class="row">
			
				<div class="col-xs-4">
					  <!--<label for="pais">País</label>-->
					  <select class="form-control" id="pais">
						<option value="">--Seleccionar País--</option>
						<option value="Ven">Venezuela</option>
						<option value="Pan">Panama</option>
						<option value="Col">Colombia</option>
						<option value="Usa">Usa</option>
						<option value="Ecua">Ecuador</option>
						<option value="Bra">Brazil</option>
					  </select>
				</div>
				<div class="col-xs-4">
					  <!--<label for="estado">Estado</label>-->
					  <select class="form-control" id="pais">
						<option value="">--Seleccionar Estado--</option>
						<option value="Miranda">Miranda</option>
						<option value="Anzoategui">Anzoategui</option>
						<option value="Carabobo">Carabobo</option>
						<option value="Zulia">Zulia</option>
						<option value="Aragua">Aragua</option>
						<option value="Tachira">Tachira</option>
						<option value="Merida">Merida</option>
					  </select>
				</div>
				<div class="col-xs-4">
					  <!--<label for="ciudad">Ciudad</label>-->
					  <select class="form-control" id="ciudad">
						<option value="">--Seleccionar Ciudad--</option>
						<option value="Caracas">Caracas</option>
						<option value="Maracay">Maracay</option>
						<option value="Valencia">Valencia</option>
						<option value="Maracaibo">Maracaibo</option>
						<option value="San Cristobal">San Cristobal</option>
						<option value="Merida">Merida</option>
					  </select>
				</div>
				
			</div>

			
			<div class="row">
			
				<div class="col-xs-12">
					  <label for="direccion">Dirección</label>
					  <textarea name="direccion" cols="90" rows="2" class="form-control"></textarea>
				</div>
				
			</div>

			<div class="row">
						
				<div class="col-xs-6">
						<label class="control-label" for="telefono">Telefono</label>
						<div class="controlsPhone">
							<form role="form" autocomplete="off">
								<div class="entry input-group col-xs-12">
									<input class="form-control" name="fields[]" type="text" placeholder="+58 212 555.55.55" />
									<span class="input-group-btn">
										<button class="btn btn-info btn-add" type="button">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</span>
								</div>
							</form>
						</div>
				</div>
				
				<div class="col-xs-6">
						<label class="control-label" for="telefono">eMail</label>
						<div class="controlsMail">
							<form role="form" autocomplete="off">
								<div class="entry input-group col-xs-12">
									<input class="form-control" name="fields[]" type="text" placeholder="example@domine.com" />
									<span class="input-group-btn">
										<button class="btn btn-info btn-add" type="button">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</span>
								</div>
							</form>
						</div>
				</div>
				
			</div>
			<!-- Fin Datos Basicos  -->
			
			
			<!-- Inicio Antecedentes Laborales  -->
			<br>
			<hr>
			<h3>Datos laborales</h3>

			<div class="row">
				<div class="col-xs-4">
					  <label for="Empresa">Empresa</label>
					  <input type="text" name="Empresa" id="Empresa" class="form-control input-sm">
				</div>
				<div class="col-xs-4">
					  <label for="Cargo">Cargo</label>
					  <input type="text" name="Cargo" id="Cargo" class="form-control input-sm">
				</div>
				<div class="col-xs-4">
					  <label for="industria">Tipo Industria</label>
					  <select class="form-control" id="industria">
						<option value="">-- Seleccionar --</option>
						<option value="Telecomunicaciones">Telecomunicaciones</option>
						<option value="Infromatica">Infromatica</option>
						<option value="Medicina">Medicina</option>
						<option value="Transporte">Transporte</option>
						<option value="Minera">Minera</option>
						<option value="Otros">Otros</option>
					  </select>
				</div>				
			</div>
			
			<div class="row">
				<div class="col-xs-8">
				
					<div class="row">
						<div class="col-xs-6">
							  <label for="Desde">Desde</label>
							  <input type="date" name="Desde" id="Desde" class="form-control input-sm">
						</div>
						<div class="col-xs-6">
							  <label for="Hasta">Hasta<font size="1">(dejar vacio si labora actual)</font></label>
							  <input type="date" name="Hasta" id="Hasta" class="form-control input-sm">
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-6">
							  <label for="edad">Antiguedad</label>
							  <input type="text" name="edad" id="edad" class="form-control input-sm" readonly value="10 años">
						</div>
						<div class="col-xs-6">
							  <label for="unidad">Unidad/Departamento</font></label>
							  <input type="date" name="unidad" id="unidad" class="form-control input-sm">
						</div>
					</div>
				</div>	
				<div class="col-xs-4">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Carnet</legend>
						<center>
						<img src="../images/silueta_gris.png" border="0" class="fill img-responsive" width="80" height="80">
						</center>
					</fieldset>
				</div>				
			</div>
			<!-- Fin Antecedentes Laborales  -->			
			
			
			<!-- Inicio Motivo  -->
			<br>
			<hr>
			<h3>Motivo de la Cita</h3>
			
			<div class="row">
						
				<div class="col-xs-12">
						<label class="control-label" type="checkbox" >Motivo de la visita</label>
						<textarea name="descripcion" cols="90" rows="2" class="form-control"></textarea>
				</div>
				
			</div>
			
			<div class="row">
						
				<div class="col-xs-6">
					<label class="control-label" for="telefono">Procedieminto</label>
					<table class="table table-striped">
						<tbody>
						  <tr>
							<td>
							  <label>
								<input class="control-label" type="checkbox" value="">Examen</label>
							</td>
							<td>
							  <label>
								<input class="control-label" type="checkbox" value="">Procedimiento</label>
							</td>
						  </tr>
						</tbody>
					  </table>
				</div>
				
				<div class="col-xs-6">
						<label class="control-label" for="telefono">Tipo visita</label>
						<select class="form-control" id="tipoVisita">
						<option value="">--Seleccionar tipo--</option>
						<option value="Miranda">Pre-vacacionales</option>
						<option value="Anzoategui">Post-Vacacionales</option>
						<option value="Carabobo">Ingreso/egreso</option>
						<option value="Zulia">Otros</option>
					  </select>
				</div>
				
			</div>
			<!-- Fin Motivo  -->
			
		</div>
		

		<div class="col-md-4">
		
			<!-- Inicio Sumary Info. -->
			<?php include "summaryInfo.php"; ?>
			<!-- Fin Sumary Info. -->
			
		</div>
	</div>
</div>
