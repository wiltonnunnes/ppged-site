<?php echo anchor('professores/adicionar', 'Adicionar novo(a)'); ?>
<input type="text" id="q">
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>T&iacute;tulo</th>
			<th>E-mail</th>
			<th>Curriculum Lattes</th>
			<th>SIGAA</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($professores as $professores_item): ?>
		<tr>
			<td><?php echo $professores_item['nome']; ?></td>
			<td><?php echo $professores_item['titulo']; ?></td>
			<td><?php echo $professores_item['email']; ?></td>
			<td><?php echo anchor($professores_item['lattes'], 'Lattes'); ?></td>
			<td><?php echo anchor($professores_item['sigaa'], 'SIGAA'); ?></td>
			<td>
				<?php 
				echo anchor('professores/deletar/' . $professores_item['professor_id'], 'Remover'); 
				echo anchor('professores/alterar/' . $professores_item['professor_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#q').change(function() {
			$.get("<?php echo site_url('professores/get'); ?>", { "q" : $('#q').val()}, function(data) {
				alert(data);
			});
		});
	});
</script>