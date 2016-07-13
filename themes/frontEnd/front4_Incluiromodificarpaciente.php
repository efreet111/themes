<div class="container-fluid">
  <div class="row">
        <div class="col-md-8">

               <div class="well  text-center">Incluir o Modificar Paciente</div>
        
               <div class="row text-center table table-striped" style="width:100%">
                        <div class="col-lg-2  text-left">
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="Nombre2" id="Nombre">
                        </div>
                        <div class="col-lg-2  text-left">
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="Apellido2" id="Apellido">
                        </div>
                        <div class="col-lg-2 text-left">
                            <label for="Sexo">Sexo</label>
                            <label> <input name="Masculino" type="checkbox" id="Sexo_0" value="M" checked="checked">M</label>
                            <label> <input type="checkbox" name="femenino" value="F" id="Sexo_1">F</label>
                        </div>
                        <div class="col-lg-2 text-left" >
                            <label for="Fechanac">Fecha de Nacimiento</label>
                            <input type="date" name="birthday">
                        </div>
                        <div class="col-lg-2 text-left">
                            <label for="Edad">Edad</label>
                            <input type="number" name="number">
                        </div>
                </div>

                <br/>
                <div class="row text-left table table-striped" style="width:100%">
                    <b>Lugar de Nacimiento</b>
                </div>        
                <div class="row text-left table table-striped" style="width:100%">
                    <div class="col-lg-3 text-left">
                        <label for="Pais">País</label>
                        <select name="Pais" size="1" id="Pais">
                            <option value="Ven"></option>
                            <option value="Ven">Venezuela</option>
                            <option value="Pan">Panama</option>
                            <option value="Col">Colombia</option>
                            <option value="Usa">Usa</option>
                            <option value="Ecua">Ecuador</option>
                            <option value="Bra">Brazil</option>
                        </select>
                    </div>
                    <div class="col-lg-3 text-left">
                        <label for="Estado">Estado</label>
                        <select name="Estado" size="1" id="Estado">
                            <option value="Ven"></option>
                            <option value="Miranda">Miranda</option>
                            <option value="Anzoategui">Anzoategui</option>
                            <option value="Carabobo">Carabobo</option>
                            <option value="Zulia">Zulia</option>
                            <option value="Aragua">Aragua</option>
                            <option value="Tachira">Tachira</option>
                            <option value="Merida">Merida</option>
                        </select>
                    </div>
                    <div class="col-lg-3 text-left">
                        <label for="Ciudad">Ciudad</label>
                        <select name="Ciudad" size="1" id="Ciudad">
                            <option value="Ven"></option>
                            <option value="Caracas">Caracas</option>
                            <option value="Maracay">Maracay</option>
                            <option value="Valencia">Valencia</option>
                            <option value="Maracaibo">Maracaibo</option>
                            <option value="San Cristobal">San Cristobal</option>
                            <option value="Merida">Merida</option>
                        </select>
                    </div>
                </div>          
           
                <br/>    
                <div class="row text-left table table-striped" style="width:100%">
                    <b>Lugar de Habitación</b>
                </div>
                <div class="row text-left table table-striped" style="width:100%">
                    <div class="row div col-lg-3 text-left">
                        <label for="Paishab">País</label>
                        <select name="Paishab" size="1" id="Paishab">
                            <option value="Ven"></option>
                            <option value="Ven">Venezuela</option>
                            <option value="Pan">Panama</option>
                            <option value="Col">Colombia</option>
                            <option value="Usa">Usa</option>
                            <option value="Ecua">Ecuador</option>
                            <option value="Bra">Brazil</option>
                        </select>    
                    </div>
                    <div class="row div col-lg-3 text-left">
                         <label for="Estadohab">Estado</label>
                        <select name="Estadohab" size="1" id="Estadohab">
                            <option value="Ven"></option>
                            <option value="Miranda">Miranda</option>
                            <option value="Anzoategui">Anzoategui</option>
                            <option value="Carabobo">Carabobo</option>
                            <option value="Zulia">Zulia</option>
                            <option value="Aragua">Aragua</option>
                            <option value="Tachira">Tachira</option>
                            <option value="Merida">Merida</option>
                        </select>
                    </div>
                    <div class="row div col-lg-3 text-left">
                        <label for="Ciudadhab">Ciudad</label>
                        <select name="Ciudadhab" size="1" id="Ciudad">
                            <option value="Ven"></option>
                            <option value="Caracas">Caracas</option>
                            <option value="Maracay">Maracay</option>
                            <option value="Valencia">Valencia</option>
                            <option value="Maracaibo">Maracaibo</option>
                            <option value="San Cristobal">San Cristobal</option>
                            <option value="Merida">Merida</option>
                        </select>    
                    </div>
                    <div class="row div col-lg-3 text-left">
                        <label for="Parromunic">Parroquia/Municicipio</label>
                        <select name="Parromunic" size="1" id="Parromunic">
                            <option value="Ven"></option>
                            <option value="Una">Una</option>
                            <option value="dos">Dos</option>
                            <option value="Tres">Tres</option>
                            <option value="Cuatro">Cuatro</option>
                            <option value="Cinco">Cinco</option>
                            <option value="Seis">Seis</option>
                        </select>    
                    </div>
                </div>

                <div class="row text-left table table-striped" style="width:100%">
                        <div class="col-lg-12 text-left">
                            <label for="direccion">Dirección</label>
                            <textarea name="Direccion" cols="70" rows="2"></textarea>   
                        </div>
                </div>   


                <div class="row text-left table table-striped" style="width:100%">
                            <label for="Telefonos">Teléfonos</label>
                        <input type="number" name="Telefono">    
                </div>
                <div class="btn-group btn-group-xs" data-toggle="buttons">
                        <a class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Nuevo &nbsp;<span class="fa et-down fa-plus"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">Action</a>
                            </li>
                        </ul>
                </div>

                <br/>
                <br/>
                <div class="row text-left table table-striped" style="width:100%">
                            <label for="Telefonos">Email</label>
                        <input type="email" name="Email">    
                </div> 
                <div class="btn-group btn-group-xs" data-toggle="buttons">
                        <a class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Nuevo &nbsp;<span class="fa et-down fa-plus"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">Action</a>
                            </li>
                        </ul>
                </div>

        
                <br/>
                <br/>
                <!--Datos de Front-->
                <div class="row text-left table table-striped" style="width:100%">
                    <b>Carga del Front</b>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="Historia">Historia</label>
                        <input type="textr" name="Historia">
                    </div>
                    <div class="col-lg-4">
                        <label for="Niveledu">Nivel Educativo</label>
                        <select name="Niveledu" size="1" id="Niveledu">
                            <option value="Soltero">Primaria</option>
                            <option value="Casado">Media</option>
                            <option value="Viudo">Tecnica</option>
                            <option value="Divorciado">Universitaria</option>
                            <option value="Divorciado">Postgrados</option>
                        </select> 
                    </div>
                    <div class="col-lg-4">
                        <label for="Estadocivil">Estado Civil</label>
                        <select name="Estadocivil" size="1" id="Estadocivil">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Divorciado">Divorciado</option>
                        </select>   
                    </div>
                </div>

                <br/>
                <br/>
                <div class="row text-left table table-striped" style="width:100%">
                    <b>Datos Laborales</b>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <label for="Titular">Titular</label>
                        <input type="textr" name="Titular">        
                    </div>
                    <div class="col-lg-2">
                        <label for="Empresa">Empresa</label>
                        <input type="textr" name="Empresa">    
                    </div>
                    <div class="col-lg-2">
                        <label for="Cargo">Cargo</label>
                        <input type="textr" name="Cargo">    
                    </div>
                    <div class="col-lg-2">
                        <label for="Fechanac">Fecha de Ingreso</label>
                        <input type="date" name="birthday">
                    </div>
                    <div class="col-lg-2">
                        <label for="Edad">Telefono</label>
                        <input type="phone" name="number">
                    </div>

                </div>
        
                <br/>
                <br/>
                <div class="row text-left table table-striped" style="width:100%">Subir la foto<form enctype="multipart/form-data" action="http://mipagina#form" method="post"><input name="uploadedfile" type="file" />          </form>
                </div>

                
        </div>
        <div class="col-md-4">
        
            <!-- Inicio Sumary Info. -->
            <?php include "summaryInfo.php"; ?>
            <!-- Fin Sumary Info. -->
            
        </div>
    </div>
</div>