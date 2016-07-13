			<!-- Inicio Conciliacion Menu Vertical -->
			<br>
            <br>
            <h3> Conciliacion</h3>
            <br>

            <div class="row"> 
                        <div class="col-xs-3">
                              <label for="Nrolote">Nro lote</label>
                              <input type="text" name="Nrolote" readonly="false" value="Sede1-Altamira-062016-100-001" class="form-control input-sm">
                        </div>
                        <div class="col-xs-3">
                              <label for="Nrolote">Fecha de Cobro</label>
                              <input type="date" name="FechadeCobro" readonly="false" value="09/07/2016" class="form-control input-sm">
                        </div>
                        <div class="col-xs-3">
                              <label for="Nrolote">Monto por Cobrar</label>
                              <input type="number" name="Monto" readonly="false" value="100.000" class="form-control input-sm">
                        </div>
                        <div class="col-xs-3">
                              <label for="Nrolote">Monto a Recibir</label>
                              <input type="number" name="Monto" readonly="false" value="100.000" class="form-control input-sm">
                        </div>
            </div>
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label>Conciliacion </label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="h">Conciliar 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label></label>
                                </div>
                                <div class="radio">
                                      <label>
                                        <input type="radio" name="sexo" value="m">Devolver a Facturacion 
                                    </label>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="row">
                       <div class="col-xs-12">
                          <label for="direccion">Observacion a Facturacion</label>
                          <textarea name="direccion" cols="60" rows="2" class="form-control"></textarea>
                       </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                              <a style="margin-top: 26px" class="btn btn-info btn-sm">Concilia/Devolver a Facturacionr<i class="fa fa-fw fa-search"></i></a>
                </div>
            </div>
			<!-- Fin Conciliacion Menu Vertical -->