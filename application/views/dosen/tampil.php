<?php echo anchor('dosen/input','Tambah Dosen');  ?>
<table border="1">
	<tr>
		<td>
			Nik
		</td>
		<td>
			Kode Dosen
		</td>
		<td>
			Nama Dosen
		</td>
		<td>
			Jenis Kelamin
		</td>
		<td>
			Email
		</td>
		<td>
			Status
		</td>
		<td>
			Aksi
		</td>

	</tr>
	<?php foreach ($tampil as $key =>$value) {?>

		<tr><td><?php echo $value->nik ?> </td>
			<td><?php echo $value->kode_dosen ?> </td>
			<td><?php echo $value->nama_dosen ?> </td>
			<td><?php echo $value->jk ?> </td>
			<td><?php echo $value->email ?> </td>
			<td><?php echo $value->status ?> </td>
			<td><?php echo anchor('dosen/delete/'.$value->kode_dosen,'Hapus'); ?>
				<?php echo anchor('dosen/edit/'.$value->kode_dosen,'Edit'); ?>
			</td></tr>

	<?php } ?>
</table>