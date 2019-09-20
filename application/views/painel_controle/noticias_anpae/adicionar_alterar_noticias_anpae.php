<?php echo form_open_multipart('noticias_anpae/recebe_processa_noticia_anpae');?>

Data: <input type="date" name="data" value="<?php echo isset($noticia_anpae['data']) ? $noticia_anpae['data'] : ''; ?>" required>
<br /><br />

T&iacute;tulo: <?php echo form_input('titulo', isset($noticia_anpae['titulo']) ? $noticia_anpae['titulo'] : '', 'required="required"'); ?>
<br /><br />

Categoria: 
<?php
$options = array('' => '', 'notícia' => 'NOTÍCIA', 'alunos regulares' => 'ALUNOS REGULARES', 'alunos especiais' => 'ALUNOS ESPECIAIS', 'bolsas' => 'BOLSA', 'outros' => 'OUTROS');
echo form_dropdown('categoria', $options, isset($noticia_anpae['categoria']) ? $noticia_anpae['categoria'] : 'notícia');
?>
<br /><br />

Imagem: <input type="file" name="imagem" />
<br /><br />

Texto: <?php echo form_textarea('texto', isset($noticia_anpae['texto']) ? $noticia_anpae['texto'] : ''); ?>
<br /><br />

<?php if (isset($noticia_anpae['noticia_id'])) echo form_hidden('noticia_id', $noticia_anpae['noticia_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>