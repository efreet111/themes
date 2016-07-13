			<!-- Inicio Confirmacion de Referencias Pendientes Menu Vertical -->
            <br>
            <hr>
            <h3> Confirmación de Referencias Pendientes</h3>

            <div class="row">
	                    <div class="col-xs-3">
	                    	<label for="Nombre">Nombre</label>
						    <input type="text" name="Nombre2" id="Nombre"  value="">
						</div>
						<div class="col-xs-3">
	                    	<label for="Apellido">Apellido</label>
							<input type="text" name="Apellido2" id="Apellido" Value="">
						</div>
						
			</div>

			<div class="row text-center table table-striped">
						<div class="col-xs-1">
							<label for="Cedula">Cedula</label>
		                        <select name="Cedula" size="1">
		                            <option>V</option>
		                            <option>E</option>
		                            <option>G</option>
		                            <option>D</option>
		                        </select>
						</div>
						<div class="col-xs-3">
								<label for="Apellido">Nro Cedula</label>
								<input type="number" name="number" id="Cedula" Value=""/>
						</div>
						<div class="col-lg-2" id="columna4">
							<label for="Telefono">Teléfono</label>
							<input type="text" name="telefono" id="telefono"  Value="telefono">
						</div>
						
			</div>

			<!-- En caso de la pregunta se afirmativa, se procede a cambiar el estatus a atendido; en caso de la pregunta ser negativa se procede a cambiar el estatus a "no contesto la llamada" y vuelve al pool de pacientes por llamar  -->
			<div class="row text-center table table-striped">
						    <div class="col-lg-12" id="columna1">
			                            <label for="Nombre">¿Paciente atendió la llamada?</label>
					        </div>
							<div class="row text-center">
			                           <div class="col-lg-12" text-center>
			                        		<input type="button" value="Si" onClick="si()"> 
			                        		<input type="button" value="No" onClick="no()"> 
			                           </div>
							</div>
			</div>

			<p></p>
			<p></p>
	
			<!-- Si la respuesta es afirmativa se procede a ir al modulo de creacion de citas, en caso contrario se envia al pool y se procede a cambiar el estatus -->
			<div class="row text-center table table-striped" >
						    <div  class="col-lg-12" id="columna1">
			                            <label for="Nombre">¿Paciente desea agendar una cita?</label>
					        </div>
							<div class="row text-center">
			                           <div class="col-lg-12" text-center>
			                        		<input type="button" value="Si" onClick="si()"> 
			                        		<input type="button" value="No" onClick="no()"> 
			                           </div>
							</div>
			</div>
			<!-- Fin Confirmacion de Referencias Pendientes Menu Vertical  -->
			