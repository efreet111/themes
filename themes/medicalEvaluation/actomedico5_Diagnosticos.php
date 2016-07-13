            <!-- Inicio Diagnosticos Menu Vertical -->
            <br>
            <hr>
            <h3>Diagnosticos</h3>


            <!-- Fin Diagnosticos Menu Vertical -->


                                       
           <div class="row">
                  <label for="">Nombre del Diagnosticos </label>
                  <input type="text" name="nombrediagnosticoN" value="">
                  <a class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
           </div>
           <br>
           <div class="row">
                 <div class="col-xs-6 text-left">
                          <table border="1" class="text-left table table-striped"> 
                                <tr> 
                                    <th>Diagnosticos</th> 
                                    <th>Descripcion</th> 
                                    <th>Seleccionar</th>
                                </tr> 
                                <tr>
                                    <td>Diagnosticos 1</td>
                                    <td>Diagnosticos 1</td>
                                    <td><input type="checkbox" name="" value="" class="text-left table table-striped"></td>
                                </tr>
                               <tr>
                                    <td>Diagnosticos 2</td>
                                    <td>Diagnosticos 2</td>
                                    <td><input type="checkbox" name="" value="" class="text-left table table-striped"></td>
                               </tr>
                               <tr>
                                    <td>Diagnosticos 3</td>
                                    <td>Diagnosticos 3</td>
                                    <td><input type="checkbox" name="" value="" class="text-left table table-striped"></td>
                               </tr>
                           </table>   
                 </div>
                 <div class="col-xs-6">
                          <div class="row">
                              <label for="">Diagnosticos</label>
                          </div>
                          <div class="row">
                              <textarea name="diagnostico" rows="6" cols="90" class="form-control input-sm"></textarea>
                          </div>
                 </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-xs-4">
                            <div class="row">
                                  <label>Referir el paciente a otro especialidad</label>
                            </div>
                            <div class="row">
                                <label>Otro especialidad</label>
                            </div>
                            <div class="row">
                                <select name="Medida" size="1" id="Medida">
                                  <option value="0"></option>
                                  <option value="1">Oftamologia</option>
                                  <option value="2">Ginecologia</option>
                                  <option value="3">Traumatologia</option>
                                </select>
                            </div>
                            <div class="row">
                                <label for="Medida">Motivo</label>
                                <textarea rows="9" cols="28" name="Motivo" ></textarea>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="row">
                                  <label>Clasificacion de Actitud</label>
                            </div>
                            <div class="row">
                                  <label for="">Elegible para el cargo</label>
                                  <input type="checkbox" name="Abierto" value="">
                            </div>
                            <div class="row">
                                  <label for="">Elegible con Restricciones</label>
                                  <input type="checkbox" name="Abierto" value="">
                            </div>
                            <div class="row">
                                  <label for="">No Elegible para el cargo</label>
                                  <input type="checkbox" name="Abierto" value="">
                            </div>
                            <div class="row">
                                  <label for="">En espera de resultados del examen</label>
                                  <input type="checkbox" name="Abierto" value="">
                            </div>
                            <div class="row">
                                  <label for="">Diferido</label>
                                  <input type="checkbox" name="Abierto" value="">
                            </div>
                            <div class="row">
                                  <label for="Medida">Observaciones y Recomendaciones</label>
                                  <textarea name="Motivo" rows="5" cols="25" ></textarea>
                            </div>

                    </div>
                    <div class="col-lg-4">
                            <div class="row">
                                  <label>Clasificacion de potencial discapacitado</label>
                            </div>
                            <div class="row">
                                  <label for="Sexo">Clasificaria Usted  al paciente como una persona con potencial discapacidad</label>
                                  <label> <input name="Si" type="checkbox" id="Si" value="SI" checked="checked">SI</label>
                                  <label> <input type="checkbox" name="No" value="NO" id="No">NO</label>
                            </div>  
                            <div class="row">
                                  <label for="Medida">Indique el motivo</label>
                                  <textarea name="Motivo" rows="8" cols="22" ></textarea>
                            </div>     
                    </div>
            </div>
