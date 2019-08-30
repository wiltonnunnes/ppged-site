<?php echo form_open_multipart('professores/recebe_cadastra_professor');?>

Nome: <input type="text" name="nome">
<br /><br />

Curriculum Lattes: <input type="text" name="lattes">
<br /><br />

SIGAA: <input type="text" name="sigaa">
<br /><br />

T&iacute;tulo: 
<select name="titulo">
	<option value="Doutor">Doutor</option>
	<option value="Mestre">Mestre</option>
</select>
<br /><br />

E-mail: <input type="email" name="email">
<br /><br />

Data Nascimento: <input type="date" name="data">
<br /><br />

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>