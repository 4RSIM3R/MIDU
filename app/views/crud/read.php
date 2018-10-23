<?php
echo "Ini Dari Table : " .$data['table']. " Dan Ber Id : ".$data['id'];
require_once '../app/models/crud.php';
$data = new Data;
$result = $data->view();
$no = 1;

?>

<div class="container mt-5">
	<table class="table table-striped">
			<thead>
				<tr>
					<th>Mapel</th>
					<th>Bab</th>
					<th>Author</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($result as $d) {?>
				<tr>
					<td><?= $no;?></td>
					<td><?= $d['bab'] ?></td>
					<td><?= $d['mapel'] ?></td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
</div>
