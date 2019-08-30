<div class="container">
	<div class="row">
		<div class="col"></div>
		<div class="col border border-primary">
			<?php echo form_open('usuarios/login'); ?>

				<div class="form-group">
					<label for="login">Usuario</label>
					<input type="text" name="login" id="login" class="form-control">
				</div>

				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" name="senha" id="senha" class="form-control">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>

			</form>
		</div>
		<div class="col"></div>
	</div>
</div>