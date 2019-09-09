<ul>
<?php foreach ($professores as $professores_item): ?>
	<li>
		<?php echo anchor('eventos/' . $professores_item['professor_id'], $professores_item['nome']); ?>
	</li>
<?php endforeach; ?>
</ul>

<?php echo $links; ?>