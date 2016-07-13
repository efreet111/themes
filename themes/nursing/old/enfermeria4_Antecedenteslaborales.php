<div class="container-fluid">
  <div class="row">
        <div class="col-md-8">
                                <div class="well  text-center">Antecedentes Laborales</div>

                                <form action="#" method="post">

                                        <!-- se debe filtar la consulta de Base de datos x   status = ""  y  analistas-->
                                        <!-- si la consulta es hecha por un analista debe filtar por analista" -->
                                        
                                            <div class="row text-left table table-striped" style="width:100%">
                                                    <div class="col-lg-2">
                                                            <label for="">Empresa</label>
                                                            <input type="text" name="Empresa">
                                                      </div>
                                                      <div class="col-lg-2">
                                                            <label for="">Duracion desde</label>
                                                            <input type="month" name="mesdesde">
                                                      </div>
                                                      <div class="col-lg-2">
                                                            <label for="">Duracion Hasta</label>
                                                            <input type="month" name="meshasta">
                                                      </div>
                                                      <div class="col-lg-2">
                                                            <label for="">Industria</label>
                                                            <input type="text" name="Industria" id="Industria">
                                                      </div>
                                                      <div class="col-lg-2">
                                                            <label for="">Cargo</label>
                                                            <input type="text" name="Cargo" id="Cargo">
                                                      </div>
                                            </div>

                                            
                                            <div class="row text-left table table-striped" style="width:100%">
                                                      <div class="col-lg-6">
                                                              <label for="">Condiciones de Trabajo</label>
                                                      </div>
                                                      <div class="col-lg-6">
                                                              <label for="">Riesgos ambientales</label>
                                                      </div>
                                                      <div class="col-lg-6">
                                                           <div class="col-lg-3"><label class="row text-left table table-striped" for="">Ambientales</label>
                                                                    <div class="row">
                                                                        <label for="">Abierto</label>
                                                                        <input type="checkbox" name="Abierto" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Cerrado</label>
                                                                        <input type="checkbox" name="Cerrado" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Taller</label>
                                                                        <input type="checkbox" name="Taller" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Almacen</label>
                                                                        <input type="checkbox" name="Almacen" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Oficina</label>
                                                                        <input type="checkbox" name="Oficina" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Otros</label>
                                                                        <input type="text" name="Otros" value="">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-3"><label class="row text-left table table-striped" for="">actividades</label>
                                                                    <div class="row">
                                                                        <label for="">Sentado</label>
                                                                        <input type="checkbox" name="Sentado" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Pie</label>
                                                                        <input type="checkbox" name="Pie" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Caminando</label>
                                                                        <input type="checkbox" name="Taller" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Cargando</label>
                                                                        <input type="checkbox" name="Almacen" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Viajando</label>
                                                                        <input type="checkbox" name="Oficina" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Otros</label>
                                                                        <input type="text" name="Otros" value="">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-3"><label class="row text-left table table-striped" for="">Tipo de trabajo</label>
                                                                    <div class="row">
                                                                        <label for="">Liviano</label>
                                                                        <input type="checkbox" name="Sentado" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Semi Pesado</label>
                                                                        <input type="checkbox" name="Pie" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Pesado</label>
                                                                        <input type="checkbox" name="Taller" value="">
                                                                    </div> 
                                                            </div>
                                                            <div class="col-lg-3"><label  class="row text-left table table-striped" for="">Riesgos</label>
                                                                   <div class="row">
                                                                        <label for="">Alto</label>
                                                                        <input type="checkbox" name="Sentado" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Medio</label>
                                                                        <input type="checkbox" name="Pie" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Bajo</label>
                                                                        <input type="checkbox" name="Taller" value="">
                                                                    </div> 
                                                            </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                            <div class="col-lg-4"><label class="row text-left table table-striped" for="">Fisicos</label>
                                                                    <div class="row">
                                                                        <label for="">Frio</label>
                                                                        <input type="checkbox" name="Frio" value="">
                                                                    </div> 
                                                                    <div class="row">
                                                                        <label for="">Calor</label>
                                                                        <input type="checkbox" name="Calor" value="">
                                                                    </div> 
                                                                    <div class="row">
                                                                        <label for="">Frio extremo</label>
                                                                        <input type="checkbox" name="Frio" value="">
                                                                    </div> 
                                                                    <div class="row">
                                                                        <label for="">Calor extremo</label>
                                                                        <input type="checkbox" name="Frio" value="">
                                                                    </div> 
                                                                    <div class="row">
                                                                        <label for="">Ruido</label>
                                                                        <input type="checkbox" name="Ruido" value="">
                                                                    </div> 
                                                                    <div class="row">
                                                                        <label for="">Vibraciones</label>
                                                                        <input type="checkbox" name="Vibraciones" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Radiacion ionizantes</label>
                                                                        <input type="checkbox" name="Vibraciones" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Radiacion no ionizantes</label>
                                                                        <input type="checkbox" name="Radiacionnoionizantes" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Ventilacion</label>
                                                                        <input type="checkbox" name="Ventilacion" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Iluminacion</label>
                                                                        <input type="checkbox" name="Iluminacion" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Alturas</label>
                                                                        <input type="checkbox" name="Vibraciones" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Altas preciones</label>
                                                                        <input type="checkbox" name="altaspresiones" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Bajas Presiones</label>
                                                                        <input type="checkbox" name="Bajaspresiones" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">electricidad</label>
                                                                        <input type="checkbox" name="electricidad" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Campo magneticos</label>
                                                                        <input type="checkbox" name="Campomagneticos" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Otros</label>
                                                                        <input type="text" name="Otros" value="">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-4"><label class="row text-left table table-striped" for="">Mecanicos</label>
                                                                    <div class="row">
                                                                        <label for="">Caidas</label>
                                                                        <input type="checkbox" name="Caidas" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Golpes</label>
                                                                        <input type="checkbox" name="Golpes" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Heridas</label>
                                                                        <input type="checkbox" name="Heridas" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Operar Maquinaris/Equipos</label>
                                                                        <input type="checkbox" name="Operar" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Compresion</label>
                                                                        <input type="checkbox" name="Compresion" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Otros</label>
                                                                        <input type="text" name="Otros" value="">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-4"><label class="row text-left table table-striped" for="">Quimicos</label>
                                                                    <div class="row">
                                                                        <label for="">Solventes</label>
                                                                        <input type="checkbox" name="Solventes" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Plasticos</label>
                                                                        <input type="checkbox" name="Plasticos" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Acido</label>
                                                                        <input type="checkbox" name="Acido" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Plomo</label>
                                                                        <input type="checkbox" name="Plomo" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Mercurio</label>
                                                                        <input type="checkbox" name="Mercurio" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Plagicidas</label>
                                                                        <input type="checkbox" name="Plagicidas" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Bauxita</label>
                                                                        <input type="checkbox" name="Bauxita" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Bauxita</label>
                                                                        <input type="checkbox" name="Bauxita" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Cemento</label>
                                                                        <input type="checkbox" name="Cemento" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Cloruro de vinilo</label>
                                                                        <input type="checkbox" name="ClorurodeVinilo" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Cloruro de vinilo</label>
                                                                        <input type="checkbox" name="ClorurodeVinilo" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Clomo</label>
                                                                        <input type="checkbox" name="Clomo" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Fluor</label>
                                                                        <input type="checkbox" name="Fluor" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Aluminio</label>
                                                                        <input type="checkbox" name="Aluminio" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Niquel</label>
                                                                        <input type="checkbox" name="Niquel" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Niquel</label>
                                                                        <input type="checkbox" name="Niquel" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Organos Clorados</label>
                                                                        <input type="checkbox" name="OrganosClorados" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Organos fosforados</label>
                                                                        <input type="checkbox" name="Organosfosforados" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Polvo Hierro</label>
                                                                        <input type="checkbox" name="Organosfosforados" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Cilisio</label>
                                                                        <input type="checkbox" name="Organosfosforados" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Alcohol</label>
                                                                        <input type="checkbox" name="Organosfosforados" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Desinfectante</label>
                                                                        <input type="checkbox" name="Organosfosforados" value="">
                                                                    </div>
                                                                    <div class="row">
                                                                        <label for="">Otros</label>
                                                                        <input type="text" name="Organosfosforados" value="">
                                                                    </div>
                                                            </div>
                                                      </div>
                                            </div>
                                            <div  class="row text-center table table-striped" style="width:100%">
                                                           <div class="col-lg-12" text-center>
                                                               <a class="btn btn-info btn-sm">Volver<i class="fa fa-fw fa-search"></i></a>
                                                               <a class="btn btn-info btn-sm">Home<i class="fa fa-fw fa-search"></i></a>
                                                               <a class="btn btn-info btn-sm">Guardar<i class="fa fa-fw fa-search"></i></a>
                                                           </div>
                                            </div>

                                </form> 

        </div>
        <div class="col-md-4">
        
            <!-- Inicio Sumary Info. -->
            <?php include "summaryInfo.php"; ?>
            <!-- Fin Sumary Info. -->
            
        </div>
    </div>
</div>
