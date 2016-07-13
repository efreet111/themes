            <!-- Inicio Confirmacion de citas Menu Vertical -->
            <br>
            <hr>
            <h3> Confirmacion de citas</h3>


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
            <div class="row text-center">
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
    
            <!-- Si la respuesta es afirmativa se procede a cambiar el status de a "cita confirmada"; en caso de qu que no confirme la cita se procede a verificar si desea cambio de cita -->
            <div class="row text-center" >
                            <div  class="col-lg-12" id="columna1">
                                        <label for="Nombre">¿Paciente confirma asistencia?</label>
                            </div>
                            <div class="row text-center">
                                       <div class="col-lg-12" text-center>
                                            <input type="button" value="Si" onClick="si()"> 
                                            <input type="button" value="No" onClick="no()"> 
                                       </div>
                            </div>

                            <!-- En caso de que  la respuesta sea negativa    -->
                             <div  class="col-lg-12" id="columna1">
                                        <label for="Nombre">¿Desea hacer un cambio en la fecha de la cita?</label>
                            </div>
                            <div class="row text-center">
                                       <div class="col-lg-12" text-center>
                                            <input type="button" value="Si" onClick="si()"> 
                                            <input type="button" value="No" onClick="no()"> 
                                       </div>
                            </div>
            </div>

            <!-- Fin Confirmacion de citas Menu Vertical -->



                                
            