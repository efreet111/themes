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
			
			<div class="row">
				<div class="col-xs-6">
					  <label for="Tipo">Tipo de documento de Identidad</label>
                      <select name="Cedula" size="1" class="form-control input-sm">
                        <option>V</option>
                        <option>E</option>
                        <option>G</option>
                        <option>D</option>
                      </select>		
				</div>
				<div class="col-xs-6">
					  <label for="Cedula">Numero de documento de Identidad</label>
					  <input type="number" name="Cedula" id="Cedula" class="form-control input-sm">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Cedula</legend>
						<center>
						<img src="../images/silueta_gris.png" border="0" class="fill img-responsive" width="80" height="80">
						</center>
					</fieldset>
				</div>	
				<div class="col-xs-6">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Carnet</legend>
						<center>
						<img src="../images/silueta_gris.png" border="0" class="fill img-responsive" width="80" height="80">
						</center>
					</fieldset>
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
			<!-- Fin Datos Representante  -->