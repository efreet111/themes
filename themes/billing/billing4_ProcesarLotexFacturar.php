			<!-- Inicio Procesar Lote x Facturar Menu Vertical -->
			<br>
            <br>
            <h3> Procesar Lotes</h3>
            <br>
		
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


			<div class="row">						
						<div class="col-xs-4">
						      <label for="Nombre">Aseguradora</label>
							  <select name="Seguro" size="1" class="form-control input-sm">
			                            <option>Horizonte</option>
			                            <option>Altamira</option>
			                            <option>Del Sur</option>
			                            <option>Seguros Venezuela</option>
			                  </select>
						</div>
						<div class="col-xs-4">
						      <label for="Sede">Sede</label>
							  <select name="Sede" size="1" class="form-control input-sm">
			                            <option>Sede1</option>
			                            <option>Sede2</option>
			                            <option>Sede3</option>
			                            <option>Sede4</option>
			                  </select>			                  
						</div>
						<div class="col-xs-4">
							  <a style="margin-top: 26px" class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
						</div>
			</div>	
						
			<br>
			
			<div class="row">
                    <div class="col-xs-6" id="lote">
                    			<label for="Nomenclatura">Nomenclatura del lote (Numlote-Sede-Seguro-mes-ano-cantidad-correlativo)</label>
                                <select id="" size="5"> 
                                    <option value="1" onclick="mostrar(1)"> Sede1-Altamira-062016-100-001</option> 
                                    <option value="2" onclick="mostrar(2)" style="color: red"> Sede1-Altamira-062016-80-002</option> 
                                </select>   
                    </div>
                    <div class="col-xs-6" id="obslote">
                                <label for="ObservCobranza">Observacion de Cobranza</label>
                                <textarea name="ObservCobranza" readonly="true" rows="5" col="400" style="color: red">verificar el caso nro:143119241,Devuelto a Facturacion </textarea>
                    </div>
            </div>

            <div class="row">        
                    <div class="col-xs-12">
                            <div class="row text-left" id="1" style="display: block; position: static; ;"  >
                                    <div class="col-xs-3 text-left" id="columna1">
                                        <select id="sel1a" size="10"> 
                                            <option value="1">1054311</option> 
                                            <option value="2">1054312</option> 
                                            <option value="3">1054313</option> 
                                            <option value="4">1054314</option> 
                                            <option value="5">1054314</option> 
                                            <option value="6">1054315</option>
                                            <option value="7">1054316</option>
                                            <option value="8">1054317</option>
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
                                           <option value="1">113119241</option> 
                                            <option value="2">143119241</option> 
                                            <option value="3">193448791</option> 
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
            <div class="row">
				<div class="col-xs-4">
							  <label for="Nombre">Fecha Acuse de Recibo</label>							  
							  <input type="date" name="FechaAcuseRecibo" value="" class="form-control input-sm">
				</div>
			</div>
            <div class="row">
				<div class="col-xs-12 text-center">
							  <a style="margin-top: 26px" class="btn btn-info btn-sm">Imprimir<i class="fa fa-fw fa-search"></i></a>
							  <a style="margin-top: 26px" class="btn btn-info btn-sm">Generar Lote<i class="fa fa-fw fa-search"></i></a>
				</div>
			</div>

			<!-- Fin Procesar Lote x Facturar Menu Vertical -->