<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<div class="col-xs-4 text-right">
					<div class="btn-group btn-group-sm" data-toggle="buttons">
						<select id="sel1" class="active btn btn-info dropdown-toggle">
							<option value="V">V - </option>
							<option value="E">E - </option>
							<option value="J">J - </option>
							<option value="G">G - </option>
						</select>
					</div>
			</div>
			<div class="col-xs-4 text-center">
				  <input type="number" name="number" class="form-control input-sm">
			</div>
			<div class="col-xs-4 text-left">
				  <a class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
			</div>
		
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-8">

			<h4>Datos del paciente</h4>
			
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

			<div class="container" id="game_container">
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
			</div>

			<div class="row">
			
				<div class="col-xs-12 text-center">
				<br>
					<div class="container" id="game_container">
					game stuff
					</div>

					<div class="container" id="video_container">
					video stuff
					</div>

					<div class="container" id="giveaway_container">
					giveaway stuff
					</div>
			
					<div class="btn-group" data-toggle="buttons-radio">
					  <button id="btn-post" class="btn btn btn-primary active" type="button">Prev</button>
					  <button id="btn-game" data-target="game_container" class="btn btn btn-primary" type="button">1</button>
					  <button id="btn-video" data-target="video_container" class="btn btn btn-primary" type="button">2</button>
					  <button id="btn-giveaway" data-target="giveaway_container" class="btn btn btn-primary" type="button">Next</button>
					</div>
					
				</div>
				
			</div>
			
			
		</div>
		

		<div class="col-md-4">
			<h2>
				Útima Cita
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
			<h2>
				Historial Médico
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
			<h2>
				Tratamientos
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<!-- Inicio Button trigger modal -->
				<a class="btn" href="" data-toggle="modal" data-target="#myModal">Ver detalles »</a>
                  
                  <!-- Inicio Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i>Tratamientos</h4>
                        </div>
                        <div class="modal-body">
                        <form id="usunew" method="POST" action="">
                            
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" >
                        <label>Email:</label>
                        <input class="form-control" type="text" name="email" >
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" >                        
                        <label>Perfil Publico:</label>
                        <select class="form-control" name="profile">
                          <option value="1">SI</option>
                          <option value="2">NO</option>
                        </select>  
                        <label>Rango:</label>
                        <select class="form-control" name="rank">
                          <option value="1">Usuario</option>
                          <option value="2">Administrador</option>
                        </select>                                               
                        <input type="hidden" name="nuevousuario" value="1" >

                        </div>
                        <div class="modal-footer">
                          <!--<button type="submit" class="btn btn-primary">Crear Usuario</button>-->
                          </form>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
				  <!-- Fin Modal -->
				  
				<!-- Fin Button trigger modal -->
				  
			</p>
		</div>
	</div>
</div>