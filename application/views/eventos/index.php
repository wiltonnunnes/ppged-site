<ul>
<?php foreach ($eventos as $eventos_item): ?>
	<li>
		<?php echo anchor('eventos/' . $eventos_item['evento_id'], $eventos_item['nome_evento']); ?>
	</li>
<?php endforeach; ?>
</ul>

<?php echo $links; ?>