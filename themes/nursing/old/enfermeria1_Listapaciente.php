<div class="container-fluid">
  <div class="row">
        <div class="col-md-8">
                      <div class="well  text-center">Lista de Pacientes</div>
                      <form action="#" method="post">
                             
                              <!-- se debe filtar la consulta de Base de datos x   status = "citas preaprobadas" -->
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
                                                      <td>Aprobada </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Carlos Victor </td>
                                                      <td>Ginecologia   </td>
                                                      <td>30/07/2016    </td>
                                                      <td>Aristides Guzman</td>
                                                      <td>Analista 1    </td>
                                                      <td>Aprobada </td>
                                                  </tr>
                                                  <tr>
                                                      <td>Carlos Victor </td>
                                                      <td>Ginecologia   </td>
                                                      <td>30/07/2016    </td>
                                                      <td>Aristides Guzman</td>
                                                      <td>Analista 1    </td>
                                                      <td>Aprobada </td>
                                                  </tr>
                                             </table>
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



