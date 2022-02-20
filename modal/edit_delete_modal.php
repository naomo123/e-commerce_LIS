    <!-- Edit -->
    <div class="modal fade" id="edit_<?php echo $producto->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
                </div>
                <div class="modal-body">
    			<div class="container-fluid">
    			<form method="POST" action="edit.php">
    				<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">codigo:</label>
    					</div>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="codigo" value="<?php echo $producto->codigo; ?>" readonly>
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
    					</div>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="nombre" value="<?php echo $producto->nombre; ?>">
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">Descripción:</label>
    					</div>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="descripcion" value="<?php echo $producto->descripcion; ?>">
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
    					</div>
    					<div class="col-sm-10">
						<input class="custom-file-input col-sm-10" type="file" placeholder=	<?php echo $producto->img; ?>   id="input-file" name="img">
					
							
						
    					
    					</div>
    				</div>
					<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">Categoría:</label>
    					</div>
    					<div class="col-sm-10">
						<select class="form-select form-select-sm"  name="categoria" aria-label=".form-select-sm example">
							
  							<option selected ><?php echo $producto->categoria; ?>
							</option>
 								 <option  name="categoria" value="Textil">Textil</option>
								  <option  name="categoria" value="Promocional">Promocional</option>
								</select>
    				
    					</div>
    				</div>
					<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">Precio:</label>
    					</div>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="precio" value="<?php echo $producto->precio; ?>">
    					</div>
    				</div>
					<div class="row form-group">
    					<div class="col-sm-2">
    						<label class="control-label" style="position:relative; top:7px;">Existencias:</label>
    					</div>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="existencias" value="<?php echo $producto->existencias; ?>">
    					</div>
    				</div>
                </div> 
    			</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
    			</form>
                </div>
     
            </div>
        </div>
    </div>
     
    <!-- Delete -->
    <div class="modal fade" id="delete_<?php echo $producto->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Eliminar producto</h4></center>
                </div>
                <div class="modal-body">	
                	<p class="text-center">¿Estás seguro que deseas eliminarlo?</p>
    				<h2 class="text-center"><?php echo $producto->nombre; ?></h2>
    			</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?codigo=<?php echo $producto->codigo; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
                </div>
     
            </div>
        </div>
    </div>