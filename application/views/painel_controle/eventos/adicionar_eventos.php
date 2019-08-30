<?php echo form_open_multipart('eventos/recebe_processa_evento');?>

Nome do Evento: <?php echo form_input('nome_evento', isset($evento['nome_evento']) ? $evento['nome_evento'] : ''); ?>
<br /><br />

Data: <input type="date" name="data">
<br /><br />

Local do Evento: <?php echo form_input('local', isset($evento['local']) ? $evento['local'] : ''); ?>
<br /><br />

Entidade Organizadora: <?php echo form_input('entidade_organizadora', isset($evento['entidade_organizadora']) ? $evento['entidade_organizadora'] : ''); ?>
<br /><br />

Cartaz: <input type="file" name="cartaz" />
<br /><br />

<?php if (isset($evento['evento_id'])) echo form_hidden('evento_id', $evento['evento_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>