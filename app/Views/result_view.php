<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Mahasiswa oleh Dinda Muslimah dan C030321022</title>
</head>

<body>
		<h1>Selamat Datang di web Dinda Muslimah Metode Result</h1>
		<table border="2">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIM</th>
					<th>Nama</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($result as $row){ ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $row->NIM ?></td>
					<td><?php echo $row->nama_mhs ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
</body>
</html>