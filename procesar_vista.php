<?php require "layout_top.php";?>
<fieldset>
	<legend>Procesar formulario</legend>
	<form method="post" action="">
		<?php if($form->tieneErrores()):?>
		<div class="alert alert-danger">
			Se encontraron errores al procesar el formulario.
		</div>
		<?php endif;?>
		
		<?php $tiene_error = $form->tieneError('nombre_producto') ? "has-error" : "";?>
		<div class="form-group <?php echo $tiene_error;?>">
			<label class="control-label" for="nombre_producto">Nombre producto</label>
			<input type="text" class="form-control" name="nombre_producto" id="nombre_producto" value="<?php echo $form->getValor("nombre_producto");?>">
			<span class="help-block"><?php echo $form->getError('nombre_producto');?></span>
		</div>
		
		<?php $tiene_error = $form->tieneError('vigente') ? "has-error" : "";?>
		<div class="<?php echo $tiene_error;?>">
			<div class="checkbox">
			<label>
				<input type="checkbox" name="vigente" id="vigente" value="1" <?php echo $form->getChecked('vigente');?>>
			Vigente
			</label>
		</div>
		
		<?php $tiene_error = $form->tieneError('categoria') ? "has-error" : "";?>
		<div class="form-group <?php echo $tiene_error;?>">
			<label class="control-label" for="categoria">Categoría</label>
			<select class="form-control" name="categoria" id="categoria">
				<option value=""></option> 
				<?php foreach($form->categorias as $key => $item):?>
					<option value="<?php echo $key;?>" <?php echo $form->getSelected('categoria', $key);?>><?php echo $item;?></option> 
				<?php endforeach;?>
			</select>
			<span class="help-block"><?php echo $form->getError('categoria');?></span>
		</div>
		
		<p><button type="submit" class="btn btn-primary">Procesar formulario</button></p>
	</form>
</fieldset>
<?php require "layout_bottom.php";?>