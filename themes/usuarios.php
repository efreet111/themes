<?php 
$vPath = "";
include "$vPath"."header.php"; 
?>

  <body class="dashboard-panel">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-clone animated infinite flash"></i> CAMALEÓN v1.0</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="logout-btn" href="callCenter/citas.php"><i class="fa fa-phone"></i> CallCenter</a></li>
			<li><a class="logout-btn" href="frontEnd/???.php"><i class="fa fa-user-plus"></i> FrontEnd</a></li>
			<li><a class="logout-btn" href="nursing/???.php"><i class="fa fa-medkit"></i> Enfermeria</a></li>
			<li><a class="logout-btn" href="medicalEvaluation/???.php"><i class="fa fa-stethoscope"></i> Evaluación Medica</a></li>
			<li><a class="logout-btn" href="resultManagement/???.php"><i class="fa fa-tachometer"></i> Resultados</a></li>
			<li><a class="logout-btn" href="billing/???.php"><i class="fa fa-money"></i> Facturación</a></li>
            <li><a class="logout-btn" href="login.php"><i class="fa fa-sign-in"></i> Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li><a href="index.php"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li class="active"><a href="usuarios"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="configuration"><i class="fa fa-cog fa-spin"></i> Configuración</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- contenido -->

             

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                   <i class="glyphicon glyphicon-th-large"></i> Nuevo Usuario
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Nuevo Usuario</h4>
                        </div>
                        <div class="modal-body">
                        <form id="usunew" method="POST" action="">
                            
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" >
                        <label>Email:</label>
                        <input class="form-control" type="text" name="email" >
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" >                        
                        <label>Perfil Publico:</label>
                        <select class="form-control" name="profile">
                          <option value="1">SI</option>
                          <option value="2">NO</option>
                        </select>  
                        <label>Rango:</label>
                        <select class="form-control" name="rank">
                          <option value="1">Usuario</option>
                          <option value="2">Administrador</option>
                        </select>                                               
                        <input type="hidden" name="nuevousuario" value="1" >

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Crear Usuario</button>
                          </form>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>

             <!-- ultimos posts -->
             <div class="col-sm-12 paddingone">
               <div class="well graficas">
               	

               	  <table class="table table-striped">
               	  	<thead>
               	  		<tr>
               	  		  <th>Nombre</th>
                        <th>Email</th>
               	  		  <th>Perfil Publico</th>
               	  		  <th>Rango</th>
                        <th>Ver Perfil</th>
                        <th>Acciones</th>
               	  		</tr>
               	  	</thead>
               	  	<tbody>
						<tr>
							<td>Carlos Perdigon</td>
							<td>c.perdigon@ms21consulting.com</td>
							<td>Si</td>
							<td>Administrador</td>
							<td>
								<p></p>
								<a class="btn btn-info btn-sm btn-block" target="_blank" href="../perfilc9123280a673f092228350c473991761"><i class="glyphicon glyphicon-search"></i> Ver Perfil</a>
							</td>
							<td>
								<form method="POST" action="">
									<input type="hidden" name="editarusuario" value="2">
									<button type="submit" class="btn btn-block btn-xs btn-warning"><i class="glyphicon glyphicon-tasks"></i> Editar</button>
							   </form>
							   <form method="POST" action="">
									<input type="hidden" name="eliminarusuario" value="2">
									<button type="submit" class="btn btn-block btn-xs btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
							   </form>
							</td>
               	  		</tr>
						
						<tr>
							<td>Pepe</td>
							<td>p.pepe@ms21consulting.com</td>
							<td>No</td>
							<td>Usuario</td>
							<td>
								<p></p>
								<a class="btn btn-info btn-sm btn-block" target="_blank" href="../perfilc9123280a673f092228350c473991761"><i class="glyphicon glyphicon-search"></i> Ver Perfil</a>
							</td>
							<td>
								<form method="POST" action="">
									<input type="hidden" name="editarusuario" value="2">
									<button type="submit" class="btn btn-block btn-xs btn-warning"><i class="glyphicon glyphicon-tasks"></i> Editar</button>
							   </form>
							   <form method="POST" action="">
									<input type="hidden" name="eliminarusuario" value="2">
									<button type="submit" class="btn btn-block btn-xs btn-danger"><i class="glyphicon glyphicon-remove-sign"></i> Eliminar</button>
							   </form>
							</td>
               	  		</tr>
               	  	</tbody>
               	  </table>
                  
               </div>             	
             </div>             
             <!-- ultimos posts -->





          <!-- contenido -->
        </div>
      </div>
    </div>

<?php include "$vPath"."footer.php"; ?>
