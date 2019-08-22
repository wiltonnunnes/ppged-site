<?php echo $error; ?>

<?php echo form_open_multipart('editais/recebe_cadastra_edital');?>

Titulo: <input type="text" name="titulo">
<br /><br />

Data: <input type="date" name="data">

<br /><br />

Arquivo: <input type="file" name="arquivo" />

<br /><br />

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>