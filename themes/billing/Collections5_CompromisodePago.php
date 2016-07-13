      	<!-- Inicio Compromiso de Pago Menu Vertical -->
      	<br>
            <br>
            <h3> Compromiso de Pago </h3>
            <br>

            <div class="row">                               
                        <div class="col-xs-3">
                              <label for="Nombre">Medico</label>
                                <select name="Seguro" size="1" class="form-control input-sm">
                                  <option>Medico1</option>
                                  <option>Medico2</option>
                                  <option>Medico3</option>
                                  <option>Medico4</option>
                        </select>
                        </div>
                        <div class="col-xs-3">
                              <label for="Sede">Sede</label>
                                <select name="Sede" size="1" class="form-control input-sm">
                                  <option>Sede1</option>
                                  <option>Sede2</option>
                                  <option>Sede3</option>
                                  <option>Sede4</option>
                        </select>                                 
                        </div>
                        <div class="col-xs-3">
                              <label for="FechaCierre ">Fecha Cierre </label>
                              <input type="date" name="FechaCierre" value="" class="form-control input-sm">
                        </div>
                        <div class="col-xs-3">
                                <a style="margin-top: 26px" class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
                        </div>
            </div>      
            <br>
            <div class="row">
                   <div class="col-xs-12">
                            <table border="1" class="text-center table table-striped"> 
                                <tr> 
                                    <th>Nro Ingreso</th>
                                    <th>Fecha</th> 
                                    <th>Servicio/Procedimiento</th>
                                    <th>Monto</th>
                                    <th>Nro Factura</th> 
                                    <th>Fecha</th>
                                    <th>Razon social/Medico</th>
                                </tr>                                
                                <tr>
                                    <th>113119243</th>
                                    <th>02/06/2016</th> 
                                    <th>Cita medica</th> 
                                    <th>5.000,00</th>
                                    <th>001</th>
                                    <th>08/06/2016</th> 
                                    <th>Medico1</th>
                               </tr>
                               <tr>
                                    <th>113119241</th>
                                    <th>08/06/2016</th> 
                                    <th>Cita medica</th> 
                                    <th>3.000,00</th>
                                    <th>001</th>
                                    <th>08/06/2016</th> 
                                    <th>Medico1</th>
                               </tr>
                               <tr>
                                    <th>113119242</th>
                                    <th>08/06/2016</th> 
                                    <th>Cita medica</th> 
                                    <th>4.000,00</th>
                                    <th>001</th>
                                    <th>10/06/2016</th> 
                                    <th>Medico1</th>
                               </tr>
                           </table>
                   </div> 
            </div>
            <div class="row">
                   <div class="col-xs-6 text-center">
                        <label for="FechaCierre ">Monto Total a Facturar </label>
                        <input type="Number" name="FechaCierre" readonly="false" value="12.000,00" class="form-control input-sm">
                   </div>
                   <div class="col-xs-6 text-center">
                        <label for="NrodeFactura ">Coloque el Nro de Factura </label>
                        <input type="text" name="NrodeFactura" value="" class="form-control input-sm">
                   </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 text-center">
                              <a style="margin-top: 26px" class="btn btn-info btn-sm">Cierre por Medico<i class="fa fa-fw fa-search"></i></a>
                </div>
            </div>
		<!-- Fin Compromiso de Pago Menu Vertical -->