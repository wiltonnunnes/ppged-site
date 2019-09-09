<?php echo form_open_multipart('formularios/recebe_processa_formulario');?>

T&iacute;tulo: <?php echo form_input('titulo', isset($informativo['titulo']) ? $informativo['titulo'] : '', 'required="required"'); ?>
<br /><br />

Arquivo PDF: <input type="file" name="arquivo_pdf" />
<br /><br />

Arquivo DOCX: <input type="file" name="arquivo_docx" />
<br /><br />

<?php if (isset($informativo['formularios_id'])) echo form_hidden('formularios_id', $informativo['formularios_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>