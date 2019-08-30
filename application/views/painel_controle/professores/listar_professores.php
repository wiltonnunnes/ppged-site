<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Curriculum Lattes</th>
			<th>SIGAA</th>
			<th>T&iacute;tulo</th>
			<th>E-mail</th>
			<th>Data Nascimento</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($professores as $professores_item): ?>
		<tr>
			<td><?php echo $professores_item['professor_id']; ?></td>
			<td><?php echo $professores_item['nome']; ?></td>
			<td><?php echo $professores_item['lattes']; ?></td>
			<td><?php echo $professores_item['sigaa']; ?></td>
			<td><?php echo $professores_item['titulo']; ?></td>
			<td><?php echo $professores_item['email']; ?></td>
			<td><?php echo $professores_item['data_nasc']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>