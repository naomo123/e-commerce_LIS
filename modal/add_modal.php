    <!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<center>
    					<h4 class="modal-title" id="myModalLabel">Agrega un nuevo producto</h4>
    				</center>
    			</div>
    			<div class="modal-body">
    				<div class="container-fluid">
    					<form method="POST" action="logic/add.php">
    						<div class="row form-group">
    							<div class="col-sm-2">
    								<label class="control-label" style="position:relative; top:7px;">Codigo:</label>
    							</div>
    							<div class="col-sm-10">
    								<input type="text" class="form-control" value="<?= isset($codigo) ? $codigo : '' ?>" name="codigo">
    								<p class="text-danger"><?= isset($error_log['codigo_error']) ? $error_log['codigo_error'] : '' ?></p>

    							</div>
    						</div>
    						<div class="row form-group">
    							<div class="col-sm-2">
    								<label class="control-label" style="position:relative; top:7px;">Nombre del producto:</label>
    							</div>
    							<div class="col-sm-10">
    								<input type="text" class="form-control" name="nombre">
    								<p class="text-danger"><?= isset($error_log['nombre_error']) ? $error_log['nombre_error'] : '' ?></p>
    							</div>
    						</div>
    						<div class="row form-group">
    							<div class="col-sm-2">
    								<label style="resize: vertical;" class="control-label" style="position:relative; top:7px;">Descripción:</label>
    							</div>
    							<div class="col-sm-10">
									<textarea cols="12" class="form-control" style="resize: vertical;" id="descripcion" name="descripcion" rows="6"></textarea>
    								<p class="text-danger"><?= isset($error_log['descripcion_error']) ? $error_log['descripcion_error'] : '' ?></p>

    							</div>

    						</div>

    						<div class="row form-group">


    							<div class="col-sm-2">
    								<label class="input-group-text" for="inputGroupFile01">Imagen del producto:</label>
    							</div>

    							<input class="col-sm-10" id="inputGroupFile01" type="file" id="img" name="img">
    							<p class="text-danger"><?= isset($error_log['img_error']) ? $error_log['img_error'] : '' ?></p>

    						</div>
    						<div class="row form-group">
    							<div class="col-sm-2">
    								<label class="control-label" style="position:relative; top:7px;">Categoría:</label>
    							</div>
    							<div class="col-sm-10">
    								<select class="form-control form-select form-select-sm" name="categoria" aria-label=".form-select-sm example">
    									<option selected>Selecciona una categoría</option>
    									<option value="Textil">Textil</option>
    									<option value="Promocional">Promocional</option>
    								</select>

    								<p class="text-danger"><?= isset($error_log['categoria_error']) ? $error_log['categoria_error'] : '' ?></p>
    							</div>
    						</div>
    						<div class="row form-group">
    							<div class="col-sm-2">

    								<label class="control-label" style="position:relative; top:7px;">Precio:</label>
    							</div>
    							<div class="col-sm-10">

    								<input type="text" class="form-control" name="precio">
    								<p class="text-danger"><?= isset($error_log['precio_error']) ? $error_log['precio_error'] : '' ?></p>
    							</div>
    						</div>
    						<div class="row form-group">
    							<div class="col-sm-2">
    								<label class="control-label" style="position:relative; top:7px;">Existencias:</label>
    							</div>
    							<div class="col-sm-10">
    								<input type="text" class="form-control" name="existencias">
    								<p class="text-danger"><?= isset($error_log['existencias_error']) ? $error_log['existencias_error'] : '' ?></p>
    							</div>
    						</div>
    				</div>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
    				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
    					</form>
    			</div>

    		</div>
    	</div>
    </div>