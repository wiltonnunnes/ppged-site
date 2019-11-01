<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<?php echo form_open_multipart('pesquisas/recebe_processa_pesquisa');?>

				<button type="submit" class="btn btn-primary" id="add_professor" formaction="<?php echo site_url('pesquisas/adicionar') ?>" disabled>Adicionar Professor(a)</button>
				<br /><br />

				<?php if (isset($professores)): ?>
				<table>
					<caption>Professores</caption>
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Op&ccedil;&otilde;es</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($professores as $professores_item): ?>
						<tr>
							<td><?php echo $professores_item['professor_id']; ?></td>
							<td><?php echo $professores_item['nome']; ?></td>
							<td><button type="button">Remover</button></td>
						</tr>
						<?php echo form_hidden('professor_id[]', $professores_item['professor_id']); ?>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>

				<?php if (isset($pesquisa['pesquisa_id'])) echo form_hidden('pesquisa_id', $pesquisa['pesquisa_id']); ?>

				<button type="reset" class="btn btn-primary">Limpar</button>
				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>

		</div>
	</div>
</section>

<script>
function search(str) {
	if (str.length == 0) {
		$('#professor').hide();
		return;
	}
	$.ajax({
		url: "<?php echo site_url('professores/get_professores'); ?>?q=" + str, 
		success: function(result) {
			var obj = JSON.parse(result), $select = $('#professor');
			$select.hide();
			$select.empty();
			obj.forEach(function(professor) {
				var option = new Option(professor['nome'], professor['professor_id']);
				$select.append(option);
			});
			$select.attr("size", obj.length);
			$select.show();
		}
	});
}
$('#professor').change(function(){
	var option = this.options[this.selectedIndex];
	$('#nome_professor').val(option.text);
	this.style.display = "none";
	$('#add_professor').removeAttr("disabled");
});
</script>