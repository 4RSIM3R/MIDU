<?php
$table = $data['table'];
$id = $data['id']; 
//panggil model crud nya
require_once '../app/models/crud.php';
//inialisasi class nya
$crud = new Config;
$data = $crud->Read($table,$id);
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
			<?php $no=1; foreach ($data as $d) {?>
				<tr>
					<td><?= $d['mapel']; ?></td>
					<td><?= $d['bab']; ?></td>
					<td><?= $d['author']; ?></td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
</div>
