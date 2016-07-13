            <!-- Inicio Tratamiento Menu Vertical -->
            <br>
            <hr>
            <h3> Tratamiento</h3>

                               
            <div class="row">
                     <h4>Tratamiento Médico Automático</h4>
                     <div class="col-xs-3">  
                           <label for="Medicina">Medicina</label>
                              <select name="Medicina" size="1" id="Medicina" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="Acetaminofen">Acetaminofen</option>
                              <option value="Ibuprofeno">Ibuprofeno</option>
                              <option value="Penicilina">Penicilina</option>
                            </select>
                      </div>
                      <div class="col-xs-3">  
                           <label for="Presentacion">Presentación</label>
                              <select name="Presentacion" size="1" id="Presentacion" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="Pastillas">Pastillas</option>
                              <option value="Capsulas">Capsulas</option>
                              <option value="Ampollas">Ampollas</option>
                            </select>
                      </div>
                      <div class="col-xs-3">
                           <label for="Concentracion">Concentración</label>
                              <select name="Concentracion" size="1" id="Concentracion" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="50mg">Suave</option>
                              <option value="100mg">Moderada</option>
                              <option value="150mg">Fuerte</option>
                              <option value="200mg">Extra Fuerte</option>
                           </select>
                      </div>
                      <div class="col-xs-3">
                           <label for="Dosis">Dosis</label>
                              <select name="Dosis" size="1" id="Dosis" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="50mg">50mg</option>
                              <option value="100mg">100mg</option>
                              <option value="150mg">150mg</option>
                              <option value="200mg">200mg</option>
                              <option value="250mg">250mg</option>
                              <option value="500mg">500mg</option>
                              <option value="5ml">5ml</option>
                              <option value="10ml">10ml</option>
                              <option value="Mas de 10">Mas de 10</option>
                            </select>
                      </div>
            </div>
            <div class="row">
                      <div class="col-xs-3">
                          <label for="Frecuencia">Frecuencia</label>
                              <select name="Frecuencia" size="1" id="Frecuencia" class="form-control input-sm" >
                              <option value="Ven"></option>
                              <option value="1 vez por dia">1 vez por dia</option>
                              <option value="2 veces por dia">2 veces por dia</option>
                              <option value="Semanal">Semanal</option>
                              <option value="Quincenal">Quincenal</option>
                              <option value="Mensual">Mensual</option>
                            </select>
                      </div> 
                      <div class="col-xs-3">
                            <label for="Duracion">Duración</label>
                            <input type="text" name="Duracion" value="" class="form-control input-sm">
                      </div>
                      <div class="col-xs-3">
                            <label for="Via">Vía</label>
                              <select name="Vía" size="1" id="Via" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="Oral">Oral</option>
                              <option value="Intravenosa">Intravenosa</option>
                              <option value="Otra">Otra</option>
                            </select>
                      </div>
                      <div class="col-xs-3">
                            <label for="FechaVencimiento">Fecha de Vencimiento</label>
                            <input type="date" name="FechaVencimiento" class="form-control input-sm">
                      </div>
            </div>
            <div class="row">
                     <div class="col-xs-3">
                            <label for="ObservacioPaciente">Observación Paciente</label>
                            <input type="text" name="ObservacioPaciente" value="" class="form-control input-sm">
                      </div>
                      <div class="col-xs-3">  
                           <label for="ObservacionFamilia">Observación Familia</label>
                           <input type="text" name="ObservacionFamilia" value="" class="form-control input-sm">
                      </div>
                      <div class="col-xs-3">
                           <label for="ObservacionFarmacia">Observacio Farmacia</label>
                           <input type="text" name="ObservacionFarmacia" value="" class="form-control input-sm">
                      </div>
                      <div class="col-xs-3">
                           <label for="MarcaComercial">Marca Comercial Sug</label>
                           <input type="text" name="MarcaComercial" value="" class="form-control input-sm">
                      </div>
            </div>

            <div class="row">
                      <h4>Tratamiento Médico Libre</h4>
                      <div class="col-xs-6">
                           <label for="Recipe">Recipe</label>
                           <textarea name="Recipe" cols="60" rows="1" class="form-control input-sm"></textarea>
                      </div>
                      <div class="col-xs-6">
                           <label for="Indicación">Indicación</label>
                           <textarea name="Indicación" cols="60" rows="1" class="form-control input-sm"></textarea>
                      </div>
            </div>
            <div class="row">
                      <h4>Otras Indicaciones</h4>
                      <div class="col-xs-12">
                           <textarea name="OtrasIndicacion" cols="50" rows="3" class="form-control input-sm"></textarea>
                      </div>
            </div>
            
            <div class="row">
                      <h4>Reposo</h4>
                      <div class="col-xs-3"> 
                            <label for="FechaVencimientodesde">Desde</label>
                            <input type="date" name="FechaVencimientodesde" class="form-control input-sm">
                      </div>
                      <div class="col-xs-3">
                           <label for="FechaVencimientohasta">Hasta</label>
                           <input type="date" name="FechaVencimientohasta" class="form-control input-sm">
                      </div>
                      <div class="col-xs-3">
                           <label for="FechaReintegro">Día de Reintegro</label>
                           <input type="date" name="FechaReintegro" class="form-control input-sm" >
                      </div>
                      <div class="col-xs-3">
                                <label for="Validado">Validado por el IVSS</label>
                                <input name="Validado" type="checkbox" id="Validado" value="" class="form-control input-sm">
                      </div>
            </div>
            <div class="row">
                      <div class="col-xs-4">
                         <label for="Motivo">Motivo</label>
                              <select name="Motivo" size="1" id="Motivo" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="Enfermedad Común">Enfermedad Común</option>
                              <option value="Enfermedad Ocupacional">Enfermedad Ocupacional</option>
                              <option value="Accidente Laboral">Accidente Laboral</option>
                              <option value="Accidente Común">Accidente Común</option>
                            </select>
                      </div> 
                      <div class="col-xs-4">  
                           <label for="EnteEmisor">Ente Emisor</label>
                              <select name="EnteEmisor" size="1" id="Ente Emisor" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                      </div>
                      <div class="col-xs-4">
                           <label for="DoctorEmisor">Doctor Emisor</label>
                           <input type="text" name="DoctorEmisor" class="form-control input-sm">
                      </div>
            </div>
            <br>
            <div class="row">
                      <div class="col-xs-12">
                           <textarea name="Reposo" cols="50" rows="3" class="form-control input-sm"></textarea>
                      </div>
            </div>

                      
            <div class="row">
                      <h4>Permiso</h4>
                      <div class="col-xs-3">  
                           <label for="FechaPermisodesde">Desde</label>
                           <input type="date" name="FechaPermisodesde" class="form-control input-sm">
                      </div>
                      <div class="col-lg-3">
                           <label for="FechaPermisohasta">Hasta</label>
                           <input type="date" name="FechaPermisohasta" class="form-control input-sm">
                      </div>
                      <div class="col-lg-3 text-right">
                           <label for="FechaPermisoreintegro">Día de Reintegro</label>
                           <input type="date" name="FechaPermisoreintegro" class="form-control input-sm">
                      </div>
                      <div class="col-lg-3">
                         <label for="Motivo">Motivo</label>
                              <select name="Motivo" size="1" id="Motivo" class="form-control input-sm">
                              <option value="Ven"></option>
                              <option value="Enfermedad Común">Enfermedad Común</option>
                              <option value="Enfermedad Ocupacional">Enfermedad Ocupacional</option>
                              <option value="Accidente Laboral">Accidente Laboral</option>
                              <option value="Accidente Común">Accidente Común</option>
                            </select>
                      </div> 
            </div>
            <br>
            <div class="row">
                      <div class="col-lg-12">
                           <label for="Permiso"> </label>
                           <textarea name="Permiso" cols="100" rows="3" class="form-control input-sm"></textarea>
                      </div>
            </div>
            <!-- Inicio Tratamiento Menu Vertical -->