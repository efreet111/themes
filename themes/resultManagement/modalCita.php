                  <!-- Inicio Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i>Tratamientos</h4>
                        </div>
                        <div class="modal-body">
                            
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
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
				  <!-- Fin Modal -->