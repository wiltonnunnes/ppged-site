<?php echo anchor('noticias_anpae/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>T&iacute;tulo</th>
			<th>Categoria</th>
			<th>Status</th>
			<th>Data</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($noticias_anpae as $noticias_anpae_item): ?>
		<tr>
			<td><?php echo $noticias_anpae_item['titulo']; ?></td>
			<td><?php echo $noticias_anpae_item['categoria']; ?></td>
			<td><?php echo $noticias_anpae_item['status']; ?></td>
			<td><?php echo $noticias_anpae_item['data']; ?></td>
			<td>
				<?php 
				echo anchor('noticias_anpae/deletar/' . $noticias_anpae_item['noticia_id'], 'Remover'); 
				echo anchor('noticias_anpae/alterar/' . $noticias_anpae_item['noticia_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>