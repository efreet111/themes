            <!-- Inicio Antecedente MEdicos -->
            <br>
            <hr>
            <h3> Antecedentes Medicos</h3> 

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
                document.getElementById('3').style.display = 'none';
                document.getElementById('4').style.display = 'none';
                document.getElementById('5').style.display = 'none';
                document.getElementById('6').style.display = 'none';
                document.getElementById('7').style.display = 'none';
                document.getElementById('8').style.display = 'none';
                document.getElementById('9').style.display = 'none';
                document.getElementById('10').style.display = 'none';
                document.getElementById('11').style.display = 'none';
                document.getElementById('12').style.display = 'none';
                document.getElementById('13').style.display = 'none';
                document.getElementById('14').style.display = 'none';
                document.getElementById('15').style.display = 'none';
                document.getElementById('16').style.display = 'none';
                document.getElementById('17').style.display = 'none';
                document.getElementById('18').style.display = 'none';
                document.getElementById('19').style.display = 'none';
                document.getElementById('20').style.display = 'none';
                document.getElementById('21').style.display = 'none';
                document.getElementById('22').style.display = 'none';
             
                document.getElementById(var1).style.display = 'block';
            }
            </script>

                             
            <div class="row">
                    <div class="col-xs-2" id="Antecedentes">
                                <select id="" size="10"> 
                                    <option value="1" onclick="mostrar(1)">Perinatales</option> 
                                    <option value="2" onclick="mostrar(2)">Generales</option> 
                                    <option value="3" onclick="mostrar(3)">Enfermedades infectocontagiosas</option> 
                                    <option value="4" onclick="mostrar(4)">Piel</option> 
                                    <option value="5" onclick="mostrar(5)">Cardivasculares</option>
                                    <option value="6" onclick="mostrar(6)">Respiratorias</option> 
                                    <option value="7" onclick="mostrar(7)">Nariz, oido y garganta</option> 
                                    <option value="8" onclick="mostrar(8)">Oculares</option> 
                                    <option value="9" onclick="mostrar(9)">Digestivo</option>
                                    <option value="10" onclick="mostrar(10)">Osteoarticular</option>
                                    <option value="11" onclick="mostrar(11)">Genito unitario</option>
                                    <option value="12" onclick="mostrar(12)">Gineco-Obstetrico</option>
                                    <option value="13" onclick="mostrar(13)">Endocrinologia y metabolismo</option> 
                                    <option value="14" onclick="mostrar(14)">Enfermedades inmunologicas</option>
                                    <option value="15" onclick="mostrar(15)">Neurologicos</option>
                                    <option value="16" onclick="mostrar(16)">Psiquiatrica</option>
                                    <option value="17" onclick="mostrar(17)">Odontologia</option>
                                    <option value="18" onclick="mostrar(18)">Antecedentes medicos</option> 
                                    <option value="19" onclick="mostrar(19)">Toma de medicamentos</option>
                                    <option value="20" onclick="mostrar(20)">Vacunas despues de los 12 años</option>
                                    <option value="21" onclick="mostrar(21)">Familiares</option>
                                    <option value="22" onclick="mostrar(22)">Habitos alimentarios</option>
                                </select>     
                    </div>
                    
                    <div class="col-xs-10">
                                <div class="row" id="1" style="display: block; position: static; ;"  >
                                    <div class="col-lg-3 text-left" id="columna1">
                                        <select id="sel1a" size="10"> 
                                            <option value="1">Cesaria</option> 
                                            <option value="2">Complicaciones del periodo neonatal</option> 
                                            <option value="3">Lloro y respiro al nacer</option> 
                                            <option value="4">Pan</option> 
                                            <option value="5">Parto eutocico</option> 
                                            <option value="6">Parto instrumental</option>
                                            <option value="7">Tan</option>
                                            <option value="8">Otros</option>
                                        </select>    
                                    </div>
                                    <div class="col-lg-6 text-right" id="columna2">
                                        <input type="button" value="Pasar" onClick="pasar('sel1a','sel1b')"> 
                                        <input type="button" value="retornar" onClick="retornar('sel1a','sel1b')">
                                    </div>
                                    <div class="col-lg-3 text-right" id="columna3">
                                        <select id="sel1b" size="10"> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row" id="2" style="display: none; position: static;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel2a" size="10"> 
                                                <option value="1">Alergias</option> 
                                                <option value="2">aumento de peso</option> 
                                                <option value="3">Fractura</option> 
                                                <option value="4">Perdida de peso</option> 
                                                <option value="5">quirurgicas</option> 
                                                <option value="6">sudaracion nocturna</option>
                                                <option value="7">Tan</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel2a','sel2b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel2a','sel2b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel2b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="3" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel3a" size="10"> 
                                                <option value="1">Dengue</option> 
                                                <option value="2">Gonorrea</option> 
                                                <option value="3">Hepatitis</option> 
                                                <option value="4">Parotiditis</option> 
                                                <option value="5">Poleo</option> 
                                                <option value="6">Rubiola</option>
                                                <option value="7">Sarampion</option>
                                                <option value="8">Tosferina</option>
                                                <option value="9">Sifiles</option>
                                                <option value="8">Tuberculosis</option>
                                                <option value="9">Vericelas</option>
                                           </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel3a','sel3b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel3a','sel3b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel3b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="4" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel4a" size="10"> 
                                                <option value="1">Dermatitis</option> 
                                                <option value="2">Micosis</option> 
                                                <option value="3">Ulceras</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel4a','sel4b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel4a','sel4b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel4b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="5" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel5a" size="10"> 
                                                <option value="1">Arritmias cardiacas</option> 
                                                <option value="2">Cardiopatía isquémica</option> 
                                                <option value="3">Cardiopatía hipertensiva</option>
                                                <option value="4">Hipertension arterial</option> 
                                                <option value="5">Soplos cardiacos</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel5a','sel5b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel5a','sel5b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel5b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="6" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel6a" size="10"> 
                                                <option value="1">Asma bronquial</option> 
                                                <option value="2">Bronquitis</option> 
                                                <option value="3">Bronquitis cronica</option>
                                                <option value="4">Hemoptisis</option> 
                                                <option value="5">Neumonias</option>
                                                <option value="6">TBC</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel6a','sel6b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel6a','sel6b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel6b" size="10"> 
                                            </select>
                                        </div>
                                    
                                </div>
                                <div class="row" id="7" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel7a" size="10"> 
                                                <option value="1">Amigdalitis a rep</option> 
                                                <option value="2">Epistaxis</option> 
                                                <option value="3">Otitis a rep</option>
                                                <option value="4">Rinitis alergicas</option> 
                                                <option value="5">Sinositis</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel7a','sel7b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel7a','sel7b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel7b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="8" style="display: none;">
                                        <div class="col-lg-3 text-left width: 360px" id="columna1">
                                            <select id="sel8a" size="10" width:360px;> 
                                                <option value="1">Antigmatimos</option> 
                                                <option value="2">Cataratas</option> 
                                                <option value="3">Hipermetropia</option>
                                                <option value="4">Miopia</option> 
                                                <option value="5">Presbicia</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel8a','sel8b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel8a','sel8b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel8b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="9" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel9a" size="10"> 
                                                <option value="1">Acidez</option> 
                                                <option value="2">Costipación</option> 
                                                <option value="3">Diarrea a rep</option>
                                                <option value="4">Extreñimiento</option> 
                                                <option value="5">Gases</option>
                                                <option value="6">Gastritis</option> 
                                                <option value="7">Habito</option> 
                                                <option value="8">Hemorroides</option>
                                                <option value="9">Litiacis vesicular</option> 
                                                <option value="10">Parasitos</option>
                                                <option value="11">Rectorragia</option>
                                                <option value="12">Ulcera</option> 
                                                <option value="13">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel9a','sel9b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel9a','sel9b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel9b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="10" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel10a" size="10"> 
                                                <option value="1">Columna vertebral</option> 
                                                <option value="2">Cuello y nuca</option> 
                                                <option value="3">Grandes articulaciones</option>
                                                <option value="4">Hernias</option> 
                                                <option value="5">Manos</option>
                                                <option value="6">Miembros inferiores</option> 
                                                <option value="7">Miembros superiores</option> 
                                                <option value="8">Pies</option>
                                                <option value="9">Rodillas</option> 
                                                <option value="10">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel10a','sel10b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel10a','sel10b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel10b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="11" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel11a" size="10"> 
                                                <option value="1">Agenecia renal</option> 
                                                <option value="2">Difusion erectil</option> 
                                                <option value="3">Fimosis</option>
                                                <option value="4">Hematuria</option> 
                                                <option value="5">Hidronefrosis</option>
                                                <option value="6">Infeciones urinarias</option> 
                                                <option value="7">Litiasis renal</option> 
                                                <option value="13"></option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel11a','sel11b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel11a','sel11b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel11b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="12" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel12a" size="10"> 
                                                <option value="1">Abortos</option> 
                                                <option value="2">Ciclos mestruales</option> 
                                                <option value="3">Dismenorrea</option>
                                                <option value="4">Fecha ultima citologia</option> 
                                                <option value="5">FUR</option>
                                                <option value="6">Gestas</option> 
                                                <option value="7">Infeciones ginecologicas</option> 
                                                <option value="8">Menarquia</option>
                                                <option value="9">Numero de Cesaria</option> 
                                                <option value="10">Partos</option>
                                                <option value="11">Uso ACOs</option>
                                                <option value="12">Uso de DIU</option> 
                                                <option value="13">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel12a','sel12b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel12a','sel12b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel12b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="13" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel13a" size="10"> 
                                                <option value="1">Diabetes</option> 
                                                <option value="2">Sindrome metabolicos</option> 
                                                <option value="3">Tiroides</option>
                                                <option value="4">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel13a','sel13b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel13a','sel13b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel13b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="14" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel14a" size="10"> 
                                                <option value="1">Artritis rematoidea</option> 
                                                <option value="2">Lupus</option> 
                                                <option value="3">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel14a','sel14b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel14a','sel14b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel14b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="15" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel15a" size="10"> 
                                                <option value="1">ACV</option> 
                                                <option value="2">Convulciones</option> 
                                                <option value="3">Epilepsias</option>
                                                <option value="4">Otros</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel15a','sel15b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel15a','sel15b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel15b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="16" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel16a" size="10"> 
                                                <option value="1">Esquizofrenia</option> 
                                                <option value="2">Sindrome depresivo</option> 
                                                <option value="3">Sidrome maniaco-depresivo</option>
                                                <option value="4">Otros</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel16a','sel16b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel16a','sel16b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel16b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="17" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel17a" size="10"> 
                                                <option value="1">Acceso dental</option> 
                                                <option value="2">Otros</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel17a','sel17b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel17a','sel17b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel17b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="18" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel18a" size="10"> 
                                                <option value="1">Ha cambiado su residencia por motivo de salud</option> 
                                                <option value="2">Practica algun pasatiempo u oficio en el hogar</option> 
                                                <option value="3">Su esposo(a) esta en contacto con polvo o sustancias quimicas</option>
                                                <option value="4">Usa pesticidas en su jardin</option> 
                                                <option value="5">Vive cerca de una planta insdustrial</option>
                                                <option value="6">Otros</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel18a','sel18b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel18a','sel18b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel18b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="19" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel19a" size="10"> 
                                                <option value="1">Si</option> 
                                                <option value="2">No</option> 
                                                <option value="3">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel19a','sel19b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel19a','sel9b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel19b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="20" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel20a" size="10"> 
                                                <option value="1">Antigripal</option> 
                                                <option value="2">Fiebre amarilla</option> 
                                                <option value="3">Hepatitis</option>
                                                <option value="4">Influenza</option> 
                                                <option value="5">Neumococo</option>
                                                <option value="6">Rabia</option> 
                                                <option value="7">Sarampion</option> 
                                                <option value="8">Toxoide</option>
                                                <option value="9">Otros</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel20a','sel20b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel20a','sel20b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel20b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="21" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel21a" size="10"> 
                                                <option value="1">Abuelos maternos</option> 
                                                <option value="2">Abuelos paternos</option> 
                                                <option value="3">Hermanos</option>
                                                <option value="4">Hijos</option> 
                                                <option value="5">Madre</option>
                                                <option value="6">Padre</option> 
                                                <option value="7">Otros</option> 
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel21a','sel21b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel21a','sel21b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel21b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                                <div class="row" id="22" style="display: none;">
                                        <div class="col-lg-3 text-left" id="columna1">
                                            <select id="sel22a" size="10"> 
                                                <option value="1">Frecuencia de consumo de alimentos</option> 
                                                <option value="2">Recordatorio 24 horas</option> 
                                                <option value="3">Otros</option>
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 text-right" id="columna2">
                                            <input type="button" value="Pasar" onClick="pasar('sel22a','sel22b')"> 
                                            <input type="button" value="retornar" onClick="retornar('sel22a','sel22b')"> 
                                        </div>
                                        <div class="col-lg-3 text-right" id="columna3">
                                            <select id="sel22b" size="10"> 
                                            </select>
                                        </div>
                                </div>
                    </div>
            </div>

            <!-- Fin Antecedente MEdicos -->                             