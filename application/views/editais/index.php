<section class="info-section">
	<div class="container">
		<div class="row">

			<div class="col-md-4 col-lg-4">
				<?php 
					include (APPPATH. "views/templates/sideBar.php");	
				?>
			</div>

			<div class="col-md-8 col-lg-8">
                <div class="content" style="width:100%">
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width:100%">
                        <div class="jquery-accordion-menu-header">Editais</div>

                        <div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-12 mt-4">
                                <h2 align="center"> EDITAIS DO PPGED </h2>
                                    <table id="example" class="table table-striped table-bordered mt-3" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($editais as $editais_item): ?>
                                            <tr>
                                                <td><?php echo $editais_item['edital_id']; ?></td>
                                                <td>
                                                	<?php echo anchor($editais_item['arquivo'], $editais_item['titulo']); ?>
                                                </td>
                                                <td><?php echo date_format(date_create($editais_item['data']), 'd/m/Y'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Ano</th>
                                            </tr>
                                        </tfoot>
                                    </table>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>

<script>
	    $(document).ready(function(){
		    $('#example').DataTable({
		    	"language": {
		            "lengthMenu": "Mostrando _MENU_ registros por página",
		            "zeroRecords": "Nada encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro disponível",
		            "infoFiltered": "(filtrado de _MAX_ registros no total)",
					"sSearch" : "Pesquisar"
		        }
		    });
		});

        $(document).ready(function(){
		    $('#teste').DataTable({
		    	"language": {
		            "lengthMenu": "Mostrando _MENU_ registros por página",
		            "zeroRecords": "Nada encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro disponível",
		            "infoFiltered": "(filtrado de _MAX_ registros no total)",
					"sSearch" : "Pesquisar"
		        }
		    });
		});
	</script>