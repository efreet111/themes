
            <!-- Registro de Cita de Paciente  - Especialidad de Examen -->
            
                                    <!-- Latest compiled and minified JavaScript -->
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

                                    <script type="text/javascript"> 
                                    function pasar(vara,varb) { 
                                        obj=document.getElementById(vara); 
                                        if (obj.selectedIndex==-1) return; 
                                        valor=obj.value; 
                                        txt=obj.options[obj.selectedIndex].text; 
                                        obj.options[obj.selectedIndex]=null; 
                                        obj2=document.getElementById(varb); 
                                        opc = new Option(txt,valor); 
                                        eval(obj2.options[obj2.options.length]=opc);     
                                    } 
                                    function retornar(vara,varb) { 
                                        obj=document.getElementById(varb); 
                                        if (obj.selectedIndex==-1) return; 
                                        valor=obj.value; 
                                        txt=obj.options[obj.selectedIndex].text; 
                                        obj.options[obj.selectedIndex]=null; 
                                        obj2=document.getElementById(vara); 
                                        opc = new Option(txt,valor); 
                                        eval(obj2.options[obj2.options.length]=opc);     
                                    } 
                                    </script> 
                                 
                                    <script type="text/javascript">
                                    function mostrar(var1){
                                        document.getElementById('1').style.display = 'none';
                                        document.getElementById('2').style.display = 'none';
                                        
                                        document.getElementById(var1).style.display = 'block';
                                    }
                                    </script>



            <br>
            <hr>
            <h3> Registro de Cita de Paciente - Especialidad de Examen</h3>

            <div class="row">
                    <div class="col-xs-3" id="Antecedentes">
                                <select id="" size="10"> 
                                    <option value="1" onclick="mostrar(1)">Medicina General</option> 
                                    <option value="2" onclick="mostrar(2)">Ginecologia</option> 
                                </select>   
                    </div>
                    
                    <div class="col-xs-9">
                            <div class="row text-left" id="1" style="display: block; position: static; ;"  >
                                    <div class="col-xs-3 text-left" id="columna1">
                                        <select id="sel1a" size="10"> 
                                            <option value="1">Examen1</option> 
                                            <option value="2">Examen2</option> 
                                            <option value="3">Examen3</option> 
                                            <option value="4">Examen4</option> 
                                            <option value="5">Examen5</option> 
                                            <option value="6">Examen6</option>
                                            <option value="7">Examen7</option>
                                            <option value="8">Examen8</option>
                                        </select>    
                                    </div>
                                    <div class="col-xs-6 text-right" id="columna2">
                                        <input type="button" value="Pasar" onClick="pasar('sel1a','sel1b')"> 
                                        <input type="button" value="retornar" onClick="retornar('sel1a','sel1b')">
                                    </div>
                                    <div class="col-xs-3 text-right" id="columna3">
                                        <select id="sel1b" size="10"> 
                                        </select>
                                    </div>
                            </div>
                                                       
                            <div class="row" id="2" style="display: none; position: static;">
                                    <div class="col-xs-3 text-left" id="columna1">
                                        <select id="sel2a" size="10"> 
                                           <option value="1">Examen1</option> 
                                            <option value="2">Examen2</option> 
                                            <option value="3">Examen3</option> 
                                        </select>    
                                    </div>
                                    <div class="col-xs-6 text-right" id="columna2">
                                        <input type="button" value="Pasar" onClick="pasar('sel2a','sel2b')"> 
                                        <input type="button" value="retornar" onClick="retornar('sel2a','sel2b')"> 
                                    </div>
                                    <div class="col-xs-3 text-right" id="columna3">
                                        <select id="sel2b" size="10"> 
                                        </select>
                                    </div>
                            </div>
                     </div>
            </div>
            <!-- Registro de Cita de Paciente  - Especialidad de Examen   -->

