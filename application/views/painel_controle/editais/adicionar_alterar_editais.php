<?php echo form_open_multipart('editais/recebe_processa_edital');?>

Titulo: <?php echo form_input('titulo', isset($edital['titulo']) ? $edital['titulo'] : ''); ?>
<br /><br />

Data: <input type="date" name="data" value="<?php echo isset($edital['data']) ? $edital['data'] : ''; ?>">
<br /><br />

Arquivo: <input type="file" name="arquivo" />
<br /><br />

<?php if (isset($edital['edital_id'])) echo form_hidden('edital_id', $edital['edital_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>