			<!-- Inicio Paciente Citado -->

			<br>
            <hr>
            <h3> Lista de Paciente</h3>
		
			<div class="row" >
	                    <div class="row text-center">
							  <select name="Cedula" size="1">
			                            <option>V</option>
			                            <option>E</option>
			                            <option>G</option>
			                            <option>D</option>
			                  </select>
	                          <input type="number" name="number"/>
							  <a class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
	                    	
	                    </div>
			</div>	
			
			<div class="row text-left">
			        <div class="col-xs-3" id="columna1">
						<label for="Nombre">Nombre</label>
						<input type="text" name="Nombre" id="Nombre">
			     	</div>	
					<div class="col-xs-3" id="columna2">					
			     		<label for="Apellido">Apellido</label>
			     		<input type="text" name="Apellido" id="Apellido" > 
					</div>
			        <div class="col-xs-3" id="columna3">
						<div class="form-group">
							<label>Sexo: </label><br>
							<div class="radio">
								<label>
									<input type="radio" name="sexo" value="h">Hom 
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
					<div class="col-xs-3" id="columna4">
						<label for="seguro">Aseguradora</label>
			      		<input type="text" name="seguro" id="seguro" >   
			      	</div>
			</div>
			<br>
			<br>

			<div class="row">
	               <div class="col-xs-12">
	                        <table border="1" class="text-center table table-striped"> 
	                            <tr> 
	                                <th>#</th>
				                  	<th>FECHA</th>
				                  	<th>DOCTOR (A)</th>
				                  	<th>ESPECIALIDAD</th>
				                  	<th>Motivo de cita</th>
				                  	<th>ETA</th>
				                </tr> 
	                            <tr>
	                                <td>1</td>
				                  	<td>29/04/2016</td>
				                  	<td>Julian Figueroa</td>
				                  	<td>Médicina Ocupacional</td>	
				                  	<td>Pre Vacacional</td>
				                  	<td>8:00</td>
	                            </tr>
	                            <tr>
	                                <td>2</td>
				                  	<td>16/04/2016</td>
				                  	<td>Erika Gutierrez</td>
				                  	<td>Cardiología</td>
				                  	<td>Examén especial</td>
									<td> 10:00 </td>
	                            </tr>
	                            <tr>
	                                <td>3</td>
				                    <td>12/12/2016</td>
				                    <td>Larry Paez</td>
				                    <td>Médicina Ocupacional</td>
				                    <td>Anual</td>
				                    <td>14:00</td>
	                            </tr>
							</table>
	                </div> 
			</div>
			<!-- Fin Paciente Citado -->