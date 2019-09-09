<?php echo anchor('formularios/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>T&iacute;tulo</th>
			<th>Arquivo PDF</th>
			<th>Arquivo DOCX</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($formularios as $formularios_item): ?>
		<tr>
			<td><?php echo $formularios_item['titulo']; ?></td>
			<td><?php echo anchor(base_url('uploads/arquivos/formularios/pdf/' . $formularios_item['arquivo_pdf']), 'PDF'); ?></td>
			<td><?php echo anchor(base_url('uploads/arquivos/formularios/docx/' . $formularios_item['arquivo_docx']), 'DOCX'); ?></td>
			<td>
				<?php 
				echo anchor('formularios/deletar/' . $formularios_item['formularios_id'], 'Remover'); 
				echo anchor('formularios/alterar/' . $formularios_item['formularios_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>