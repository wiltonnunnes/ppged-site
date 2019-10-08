<?php echo form_open_multipart('convenios/recebe_processa_convenio');?>

Logomarca: <input type="file" name="logomarca" />
<br /><br />

T&iacute;tulo: <?php echo form_input('nome', isset($convenio['nome']) ? $convenio['nome'] : '', 'required="required"'); ?>
<br /><br />

CPF: <?php echo form_input('cpf', isset($convenio['cpf']) ? $convenio['cpf'] : ''); ?>
<br /><br />

CNPJ: <?php echo form_input('cnpj', isset($convenio['cnpj']) ? $convenio['cnpj'] : ''); ?>
<br /><br />

Telefone 1: <?php echo form_input('telefone_1', isset($convenio['telefone_1']) ? $convenio['telefone_1'] : ''); ?>
<br /><br />

Telefone 2: <?php echo form_input('telefone_2', isset($convenio['telefone_2']) ? $convenio['telefone_2'] : ''); ?>
<br /><br />

Telefone 3: <?php echo form_input('telefone_3', isset($convenio['telefone_3']) ? $convenio['telefone_3'] : ''); ?>
<br /><br />

Endereço: <?php echo form_input('endereco_rua', isset($convenio['endereco_rua']) ? $convenio['endereco_rua'] : ''); ?>
<br /><br />

Bairro: <?php echo form_input('endereco_bairro', isset($convenio['endereco_bairro']) ? $convenio['endereco_bairro'] : ''); ?>
<br /><br />

Número: <?php echo form_input('endereco_numero', isset($convenio['endereco_numero']) ? $convenio['endereco_numero'] : ''); ?>
<br /><br />

CEP: <?php echo form_input('endereco_cep', isset($convenio['endereco_cep']) ? $convenio['endereco_cep'] : ''); ?>
<br /><br />

E-mail: <?php echo form_input('email', isset($convenio['email']) ? $convenio['email'] : ''); ?>
<br /><br />

Site: <?php echo form_input('site', isset($convenio['site']) ? $convenio['site'] : ''); ?>
<br /><br />

Descrição: <?php echo form_textarea('descricao', isset($convenio['descricao']) ? $convenio['descricao'] : ''); ?>
<br /><br />

<?php if (isset($convenio['convenio_id'])) echo form_hidden('convenio_id', $convenio['convenio_id']); ?>

<input type="reset" value="Limpar" />
<input type="submit" value="Enviar" />

</form>