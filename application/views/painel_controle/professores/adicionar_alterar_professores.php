<?php echo form_open_multipart('professores/recebe_processa_professor');?>

Nome: <?php echo form_input('nome', isset($professor['nome']) ? $professor['nome'] : '', 'required="required"'); ?>
<br /><br />

Curriculum Lattes: <?php echo form_input('lattes', isset($professor['lattes']) ? $professor['lattes'] : '', 'required="required"'); ?>
<br /><br />

SIGAA: <?php echo form_input('sigaa', isset($professor['sigaa']) ? $professor['sigaa'] : '', 'required="required"'); ?>
<br /><br />

T&iacute;tulo: 
<?php
$options = array('' => '', 'Doutor' => 'Doutor', 'Mestre' => 'Mestre');
echo form_dropdown('titulo', $options, isset($professor['titulo']) ? $professor['titulo'] : '');
?>

E-mail: <input type="email" name="email" value="<?php echo isset($professor['email']) ? $professor['email'] : ''; ?>" required>
<br /><br />

<?php if (isset($professor['professor_id'])) echo form_hidden('professor_id', $professor['professor_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>