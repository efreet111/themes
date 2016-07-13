            <!-- Inicio Preconsulta Menu Vertical -->
            <br>
            <hr>
            <h3> Pre-Consulta</h3> 

            <div class="row">
                <div class="col-xs-3">
                      <label for="Nombre">Nombre</label>
                      <input type="text" name="Nombre2" id="Nombre" class="form-control input-sm">
                </div>
                <div class="col-xs-3">
                      <label for="Apellido">Apellido</label>
                      <input type="text" name="Apellido2" id="Apellido" class="form-control input-sm">
                </div>
                <div class="col-xs-2">
                      <label for="Tipo">Tipo</label>
                      <select name="Cedula" size="1" class="form-control input-sm">
                        <option value="V-">V-</option>
                        <option value="E-">E-</option>
                        <option value="J-">J-</option>
                        <option value="G-">G-</option>
                        <option value="D-">D-</option>
                      </select>     
                </div>
                <div class="col-xs-4">
                      <label for="Cedula">Cedula</label>
                      <input type="number" name="Cedula" id="Cedula" class="form-control input-sm">
                </div>
            </div>

            
            <div class="row">
                    <div class="col-xs-4" id="columna4">
                            <label for="Historia">N° Historia</label>
                            <input type="text" name="Historia" id="Cedula" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna1">
                            <label for="Especialidad">Especialidad</label>
                            <input type="text" name="Especialidad" id="Especialidad" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna2">
                            <label for="Médico">Médico</label>
                            <input type="text" name="Medico" id="Medico" class="form-control input-sm">
                    </div>
            </div>

            <div class="row">
                    <div class="col-xs-4" id="columna4">
                            <label for="Historia">Motivo de Consulta</label>
                            <input type="text" name="MotivoConsulta" id="MotivoConsulta" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna1">
                            <label for="Especialidad">Religión</label>
                            <input type="text" name="Religión" id="Religión" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna2">
                            <label for="Médico">Orientación Sexual</label>
                            <input type="text" name="MotivoConsulta" id="MotivoConsulta" class="form-control input-sm">
                    </div>
            </div>

            <hr>
            <h4> Pre-Consulta - Generales</h4>

            <div class="row">
                    <div class="col-xs-4" id="columna4">
                            <label for="Historia">Peso</label>
                            <input type="text" name="Peso" id="Peso" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna1">
                            <label for="Especialidad">Talla</label>
                            <input type="text" name="Talla" id="Talla" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna2">
                            <label for="Médico">IMC</label>
                            <input type="text" name="IMC" id="IMC" class="form-control input-sm">
                    </div>
            </div>
            <div class="row">
                    <div class="col-xs-4" id="columna4">
                            <label for="Temperatura">Temperatura</label>
                            <input type="text" name="Temperatura" id="Temperatura" class="form-control input-sm">
                    </div>
                    <div class="col-xs-5" id="columna1">
                            <label for="Hidratado">Hidratado</label>
                            <input type="text" name="Hidratado" id="Hidratado" class="form-control input-sm">
                    </div>
                    <div class="col-xs-3" id="columna2">                            
                            <label for="EKG">EKG</label>
                            <select name="EKG" size="1" id="EKG" class="form-control input-sm">
                                    <option value="EKG">Sin Alteración</option>
                                    <option value="EKG">Con Alteración</option>
                                    <option value="EKG">Estabilizado</option>
                            </select>
                    </div>
            </div>

            <hr>
            <h4> Pre-Consulta - Hemodinámico</h4>
            
            <div class="row">
                    <div class="col-xs-4" id="columna4">
                            <label for="FC">F/C</label>
                            <input type="text" name="FC" id="FC" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="FR">F/R</label>
                            <input type="text" name="FR" id="FR" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="PAD">PAD</label>
                            <input type="text" name="PAD" id="PAD" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="HbA1c">HbA1c</label>
                            <input type="text" name="HbA1c" id="HbA1c" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="Sp02">Sp02</label>
                            <input type="text" name="Sp02" id="Sp02" class="form-control input-sm">
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="Temperatura">PAS</label>
                            <input type="text" name="PAS" id="PAS" class="form-control input-sm">
                    </div>
            </div>

            <hr>
            <h4> Pre-Consulta - Solo Mujeres</h4>
            
            <div class="row">
                    <div class="col-xs-4">
                            <div class="form-group">
                                <label>Esta Embaraza? </label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Embaraza" value="Si">Hombre 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label></label>
                                </div>
                                <div class="radio">
                                      <label>
                                        <input type="radio" name="Embaraza" value="No">Mujer 
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="NCesareas">N° Cesareas</label>
                            <input type="text" name="NCesareas" id="NCesareas" class="form-control input-sm">                           
                    </div>
                    <div class="col-xs-4" id="columna4">
                            <label for="NAbortos">N° Abortos</label>
                            <input type="text" name="NAbortos" id="NAbortos" class="form-control input-sm">
                    </div>
                    
            </div>
     

            <hr>
            <h4> Pre-Consulta - Estado Neurológico/Orientación</h4>
     
            <div class="row">
                    <div class="col-xs-3">
                            <div class="form-group">
                                <label>Conciente </label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Conciente" value="Si">Si 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label></label>
                                </div>
                                <div class="radio">
                                      <label>
                                        <input type="radio" name="Conciente" value="No">No 
                                    </label>
                                </div>
                            </div>
                    </div>  
                    <div class="col-xs-3">
                            <div class="form-group">
                                <label>Orient. Tiempo</label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="OrientTiempo" value="Si">Si 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label></label>
                                </div>
                                <div class="radio">
                                      <label>
                                        <input type="radio" name="OrientTiempo" value="No">No 
                                    </label>
                                </div>
                            </div>
                    </div>  
                    <div class="col-xs-3">
                            <div class="form-group">
                                <label>Orient. Persona</label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Orientpersona" value="Si">Si 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label></label>
                                </div>
                                <div class="radio">
                                      <label>
                                        <input type="radio" name="Orientpersona" value="No">No 
                                    </label>
                                </div>
                            </div>
                    </div>  
                    <div class="col-xs-3">
                            <div class="form-group">
                                <label>Orient. Espacio</label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Orientespacio" value="Si">Si 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label></label>
                                </div>
                                <div class="radio">
                                      <label>
                                        <input type="radio" name="Orientespacio" value="No">No 
                                    </label>
                                </div>
                            </div>
                    </div>  
            </div>
                
            <hr>
            <h4> Pre-Consulta - Antecedentes Familiares</h4>

            <div class="row" >
                    <div class="col-xs-12">
                            <table border="1" class="text-center table table-striped">
                                        <thead>
                                              <tr>
                                                <th>
                                                    <h4 class="text-center">Patología</h4>
                                                </th>
                                                <th>
                                                    <h4 class="text-center">Paciente</h4>
                                                </th>
                                                <th>
                                                    <h4 class="text-center">Padre</h4>
                                                </th>
                                                <th>
                                                    <h4 class="text-center">Madre</h4>
                                                </th>
                                                <th>
                                                    <h4 class="text-center">Otros:</h4>
                                                </th>
                                              </tr>
                                        </thead>
                                        <tr>
                                            <td>Diabético</td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Diabético1" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Diabético2" value="Si" checked="checked">
                                                </label>
                                             </td>
                                             <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Diabético3" value="Si" checked="checked">
                                                </label>
                                             </td>
                                             <td>
                                              <textarea name="nombre" id="nombre1"></textarea>
                                             </td>
                                        </tr> 
                                        <tr>
                                            <td>Hipertenso</td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Hipertenso1" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Hipertenso2" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Hipertenso3" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <textarea name="nombre" id="nombre2"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alcohólico</td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Alcoholico1" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Alcoholico2" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Alcoholico3" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <textarea name="nombre" id="nombre3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cáncer</td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <textarea name="nombre" id="nombre"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fumador</td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                </label>
                                            </td>
                                            <td>
                                                <textarea name="nombre" id="nombre"></textarea>
                                            </td>
                                        </tr>
                            </table>
                    </div>
            </div> 

            
            <hr>
            <h4> Pre-Consulta - Antecedentes del Paciente</h4>

            <div class="row" >
                    <div class="col-xs-12">
                            <table border="1" class="text-center table table-striped"> 
                                    <thead>
                                           <tr>
                                              <th>
                                                   <h4 class="text-center">a)Enferm. Respiratorias</h4>
                                              </th>
                                                <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Enferm. Respiratoriaso_0" value="Si" checked="checked">
                                                  </label>
                                                </td>
                                              <th>
                                                <h4 class="text-center">b)Tensión arterial alta</h4>
                                              </th>
                                                <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Tensión arterial alta_0" value="Si" checked="checked">
                                                  </label>
                                                </td>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           <tr>
                                                <td>
                                                    <h4 class="text-center">c)Cefaleas, Sist. Nervioso</h4>
                                                </td>
                                              <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                  </label>
                                              </td>
                                                <th>
                                                      <h4 class="text-center">d)Sist. Gastrointestinal</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                      <h4 class="text-center">e)Transtornos de la Sangre</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                                <th>
                                                      <h4 class="text-center">f)Transtornos Endocrinos</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <th>
                                                      <h4 class="text-center">g)Afección de Riñones</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                                <th>
                                                      <h4 class="text-center">h)Afección Musculares</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                      <h4 class="text-center">i)Defectos Físicos</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                                <th>
                                                      <h4 class="text-center">j)Afección de la Piel</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                      <h4 class="text-center">k)Alcoholismo</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                                <th>
                                                      <h4 class="text-center">l)Drogadicción</h4>
                                                </th>
                                                <td>
                                                    <label>
                                                    <input name="Si" type="checkbox" id="Orient. Tiempo_0" value="Si" checked="checked">
                                                    </label>
                                                </td>
                                            </tr>
                                    </tbody>
                            </table>
                    </div>
            </div>

            <hr>
            <h4> Pre-Consulta - Antecedentes Quirúrgicos</h4>

            <div class="row">
                    <div class="col-xs-12">
                            <table border="1" class="text-center table table-striped">
                                        <thead>
                                            <tr>
                                              <th>
                                                    <h4 class="text-center text-l">a)Ha recibido tratamiento médico</h4>
                                              </th>
                                              <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Enferm. Respiratoriaso_0" value="Si" checked="checked">
                                                  </label>
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>
                                                    <h4 class="text-center">b)Ha padecido enfermedades</h4>
                                              </th>
                                              <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Enferm. Respiratoriaso_0" value="Si" checked="checked">
                                                  </label>
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>
                                                    <h4 class="text-center">c)Ha sido examinado por un médico</h4>
                                              </th>
                                              <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Enferm. Respiratoriaso_0" value="Si" checked="checked">
                                                  </label>
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>
                                                    <h4 class="text-center">d)Le han recomendado intervención</h4>
                                              </th>
                                              <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Enferm. Respiratoriaso_0" value="Si" checked="checked">
                                                  </label>
                                              </td>
                                            </tr>
                                            <tr>
                                              <th>
                                                    <h4 class="text-center">e)Le han practicado exámenes</h4>
                                              </th>
                                              <td>
                                                  <label>
                                                  <input name="Si" type="checkbox" id="Enferm. Respiratoriaso_0" value="Si" checked="checked">
                                                  </label>
                                              </td>
                                            </tr>
                                        </thead>
                            </table>
                    </div>

            </div>
            <!-- Inicio Preconsulta Menu Vertical -->