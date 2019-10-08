<?php echo anchor('convenios/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>Logomarca</th>
			<th>Nome</th>
			<th>Fone</th>
			<th>Email</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($convenios as $convenios_item): ?>
		<tr>
			<td><?php echo img('uploads/convenios/' . $convenios_item['logomarca'], FALSE, array('alt' => '')); ?></td>
			<td><?php echo $convenios_item['nome']; ?></td>
			<td><?php echo $convenios_item['telefone_1']; ?></td>
			<td><?php echo $convenios_item['email']; ?></td>
			<td>
				<?php 
				echo anchor('convenios/deletar/' . $convenios_item['convenio_id'], 'Remover'); 
				echo anchor('convenios/alterar/' . $convenios_item['convenio_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>