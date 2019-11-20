<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<?php echo form_open_multipart('informativos/recebe_processa_informativo');?>

				<div class="form-group">
					<label for="titulo">Data:</label>
					<input type="date" name="data" id="data" value="<?php echo isset($informativo['data']) ? $informativo['data'] : ''; ?>" required>
				</div>

				<div class="form-group">
					<label for="titulo">T&iacute;tulo:</label>
					<?php echo form_input('titulo', isset($informativo['titulo']) ? $informativo['titulo'] : '', array('required' => 'required', 'id' => 'titulo', 'class' => 'form-control')); ?>
				</div>

				<div class="form-group">
					<label for="categoria">Categoria:</label> 
					<?php
					$options = array('' => '', 'notícia' => 'NOTÍCIA', 'alunos regulares' => 'ALUNOS REGULARES', 'alunos especiais' => 'ALUNOS ESPECIAIS', 'bolsas' => 'BOLSA', 'outros' => 'OUTROS');
					echo form_dropdown('categoria', $options, isset($informativo['categoria']) ? $informativo['categoria'] : 'notícia', array('id' => 'categoria'));
					?>
				</div>

				<div class="form-group">
					<label for="imagem">Imagem:</label>
					<input type="file" name="imagem" id="imagem" />
				</div>

				<div class="form-group">
					<label for="texto">Texto:</label>
					<?php echo form_textarea('texto', isset($informativo['texto']) ? $informativo['texto'] : '', array('id' => 'texto', 'class' => 'ckeditor')); ?>
				</div>

				<?php if (isset($informativo['informativo_id'])) echo form_hidden('informativo_id', $informativo['informativo_id']); ?>

				<input type="reset" value="Limpar" />
				<input type="submit" value="Enviar" />

			</form>

		</div>
	</div>
</section>