2<?php include 'topo.php' ?>
<?php include 'database-usuarios.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Gerenciar <small>Usuários</small></h2>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>

					</form>
				</td>
			</tr>

		<?php endforeach; ?>
		<?php endif; ?>
		
		</tbody>
	</table>

	<div class="pull-right">
		<a href="new.php" class="btn btn-primary">Novo Usuario</a>
	</div>
</div>

<?php include 'rodape.php' ?>