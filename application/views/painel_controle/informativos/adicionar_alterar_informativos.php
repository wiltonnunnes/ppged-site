<?php echo form_open_multipart('informativos/recebe_processa_informativo');?>

Data: <input type="date" name="data" value="<?php echo isset($informativo['data']) ? $informativo['data'] : ''; ?>" required>
<br /><br />

T&iacute;tulo: <?php echo form_input('titulo', isset($informativo['titulo']) ? $informativo['titulo'] : '', 'required="required"'); ?>
<br /><br />

Categoria: 
<?php
$options = array('' => '', 'notícia' => 'NOTÍCIA', 'alunos regulares' => 'ALUNOS REGULARES', 'alunos especiais' => 'ALUNOS ESPECIAIS', 'bolsas' => 'BOLSA', 'outros' => 'OUTROS');
echo form_dropdown('categoria', $options, isset($informativo['categoria']) ? $informativo['categoria'] : 'notícia');
?>
<br /><br />

Imagem: <input type="file" name="imagem" />
<br /><br />

Texto: <?php echo form_textarea('texto', isset($informativo['texto']) ? $informativo['texto'] : ''); ?>
<br /><br />

<?php if (isset($informativo['informativo_id'])) echo form_hidden('informativo_id', $informativo['informativo_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>