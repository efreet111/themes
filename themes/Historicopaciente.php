<html> 
<head> 

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head> 

<body> 
<div class="well  text-center">Historico de Pacientes llamados,status   x  Analista  </div>
<form action="#" method="post">
       
        <!-- se debe filtar la consulta de Base de datos x   status = ""  y  analistas-->
        <!-- si la consulta es hecha por un analista debe filtar por analista" -->
        
        <div class="row text-center table table-striped" style="width:100%">
            <div class="row">
                <div class="col-lg-6">
                        <div class="col-lg-3" >
                            <label for="Fedesde">Desde</label>
                            <input type="date" name="birthday">
                        </div>
                        <div class="col-lg-3">
                            <label for="Fehasta">hasta</label>
                            <input type="date" name="birthday">
                        </div>
                        <div class="col-lg-3">
                            <label for="Pais">Estatus</label>
                            <select name="Pais" size="1" id="Pais">
                                <option value="Ven">Pre Aprobadas</option>
                                <option value="Pan">Por Citar</option>
                                <option value="Col">Seguimiento</option>
                                <option value="Usa">Perdidas</option>
                                <option value="Ecua">Citas</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="Analista">Analista</label>
                            <select name="Analista" size="1" id="Analista">
                                <option value="1">Analista 2</option>
                                <option value="2">Analista 2</option>
                                <option value="3">Analista 3</option>
                                <option value="4">Analista 4</option>
                                <option value="5">Analista 5</option>
                            </select>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="col-lg-2">
                            <a class="btn btn-info btn-sm">Buscar<i class="fa fa-fw fa-search"></i></a>
                        </div>  
                </div>        
            </div>
        </div> 
       
        <div class="row text-center table table-striped" style="width:100%">
               <div class="col-lg-12" style="width:100%">
                        <table border="1" class="text-center table table-striped"> 
                            <tr> 
                                <th>Nombre/Apellido</th> 
                                <th>Especialidad</th> 
                                <th>Fecha</th> 
                                <th>Medico</th> 
                                <th>Analista</th> 
                                <th>status</th>
                            </tr> 
                            <!-- simulacion de contenido dinamicos para las tablas
                                <?php 
                                  //for ($i=0; $i < 6 ; $i++) { 
                                   //echo "<tr> <td>". $i ."</td> </tr>";
                                   //."</td> </tr>"; 
                                   }
                                ?>
                            -->
                            <tr>
                                <td>Carlos Victor </td>
                                <td>Ginecologia   </td>
                                <td>30/07/2016    </td>
                                <td>Aristides Guzman</td>
                                <td>Analista 1    </td>
                                <td> Pre-Aprobada </td>
                            </tr>
                            <tr>
                                <td>Carlos Victor </td>
                                <td>Ginecologia   </td>
                                <td>30/07/2016    </td>
                                <td>Aristides Guzman</td>
                                <td>Analista 1    </td>
                                <td> Pre-Aprobada </td>
                            </tr>
                            <tr>
                                <td>Maryory </td>
                                <td>Pediatria   </td>
                                <td>Aristides Guzman</td>
                                <td>30/07/2016    </td>
                                <td>Analista 1    </td>
                                <td>Pre-Aprobada </td>
                            </tr>
                       </table>
                       <div class="row" text-center>
                           <div class="col-lg-12" text-center>
                               <a class="btn btn-info btn-sm">Volver<i class="fa fa-fw fa-search"></i></a>
                               <a class="btn btn-info btn-sm">Home<i class="fa fa-fw fa-search"></i></a>
                           </div>
                        </div>
                </div> 
        </div>

</form> 
 
</body> 
</html>  