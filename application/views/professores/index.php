<?php if ($rows): ?>
<div class="table-responsive-sm">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
			<?php foreach ($rows[0] as $column => $value) {
				echo "<th>$column</th>";
			}?>
				<th colspan="3">Op&ccedil;&otilde;es</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($rows as $row): ?>
			<tr>
				<td>
					<?php echo $row['professor_id'];?>
				</td>
				<td>
					<?php echo $row['nome'];?>
				</td>
				<td>
					<a href="<?php echo $row['lattes'];?>">lattes</a>
				</td>
				<td>
					<a href="<?php echo $row['sigaa'];?>">sigaa</a>
				</td>
				<td>
					<?php echo $row['titulo'];?>
				</td>
				<td>
					<?php echo $row['email'];?>
				</td>
				<td>
					<?php echo $row['data_nasc'];?>
				</td>
				<td>
					<a href="#"><i class="fas fa-binoculars"></i></a>
				</td>
				<td>
					<a href="#"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="#"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<ul class="pagination">
	<?php echo $links;?>
</ul>
<?php endif; ?>