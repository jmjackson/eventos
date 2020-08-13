
<div class="row justify-content-center">
	<div class="col-md-11">
		<div id="container mt-3">

		<table class="table table-sm table-hoover table-bordered">
			<thead>
				<tr>
					<td style="">id</td>
					<td>nombre</td>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($ciudades as $c): ?>
					<tr>
						<td><?php echo $c->Id; ?></td>
						<td><?php echo $c->Name; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
	</div>
</div>
