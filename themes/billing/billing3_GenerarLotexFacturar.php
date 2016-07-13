			<!-- Inicio Generar Lote x Facturar Menu Vertical -->
			<br>
            <br>
            <h3> Generar Lotes</h3>
            <br>
		
			<div class="row">						
						<div class="col-xs-2">
						      <label for="Nombre">Aseguradora</label>
							  <select name="Seguro" size="1" class="form-control input-sm">
			                            <option>Horizonte</option>
			                            <option>Altamira</option>
			                            <option>Del Sur</option>
			                            <option>Seguros Venezuela</option>
			                  </select>
						</div>
						<div class="col-xs-3">
						      <label for="Fechadesde">Desde</label>
							  <input type="date" name="Fechadesde" value="" class="form-control input-sm">
						</div>
						<div class="col-xs-3">
						      <label for="FechaHasta">Hasta</label>
							  <input type="date" name="FechaHasta" value="" class="form-control input-sm">
						</div>
						<div class="col-xs-2">
						      <label for="Sede">Sede</label>
							  <select name="Sede" size="1" class="form-control input-sm">
			                            <option>Sede1</option>
			                            <option>Sede2</option>
			                            <option>Sede3</option>
			                            <option>Sede4</option>
			                  </select>			                  
						</div>
						<div class="col-xs-2">
							  <a style="margin-top: 26px" class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
						</div>
			</div>	
			<div class="row">
				 <div class="col-xs-12">
				 		<label for="FechaHasta">Nomenclatura del lote (Sede-Seguro-mes-ano-cantidad-correlativo)</label>
						<input type="text" name="FechaHasta" value="" class="form-control input-sm" readonly="false">
				 </div>
				 <div class="col-xs-2">
							  <a style="margin-top: 26px" class="btn btn-info btn-sm">Generar Lote<i class="fa fa-fw fa-search"></i></a>
				</div>
			</div>
			
			<br>
			
			<div class="row">
                   <div class="col-xs-12">  
                            <table border="1" class="text-center table table-striped"> 
                                <tr> 
                                    <th>Nro Ingreso</th>
                                    <th>Especialidad</th> 
                                    <th>Fecha</th> 
                                    <th>Medico</th>
                                    <th>Seguro</th>
                                    <th>Sede</th> 
                                    <th>Estatus</th>
                                </tr>                                
                                <tr>
                                    <th><a href="113119241">113119241</th>
                                    <th>Odontolgia</th> 
                                    <th>08/06/2016</th> 
                                    <th>Benancio de la Cruz</th>
                                    <th>Altamira</th>
                                    <th>Sede1</th>                                     
                                    <th>Verificado para Facturar lote</th>
                               </tr>
                               <tr>
                                    <th><a href="143119241">143119241</th>
                                    <th>Odontolgia</th> 
                                    <th>08/06/2016</th> 
                                    <th>Albertico Limonta</th>
                                    <th>Altamira</th>
                                    <th>Sede2</th> 
                                    <th>Verificado para Facturar lote</th>
                               </tr>
                               <tr>
                                    <th><a href="193448791">193448791</th>
                                    <th>Pediatria</th> 
                                    <th>08/06/2016</th> 
                                    <th>Antonio Armas</th>
                                    <th>Altamira</th>
                                    <th>Sede 3</th>
                                    <th>Verificado para Facturar lote</th>
                               </tr>
                           </table>
                   </div> 
            </div>
			<!-- Fin Generar Lote x Facturar Menu Vertical -->