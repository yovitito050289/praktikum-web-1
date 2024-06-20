<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
 
	<h2>TABEL MY GUESTS</h2>
	<br/>
    <a href="tambah.php">TAMBAHKAN DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
            <th>No</th>
			<th>Firstname</th>
			<th>Lastname</th>
            <th>Email</th>
            <th>Date</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from myguests");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $no++; ?></td>
				<td><?php echo $d['firstname']; ?></td>
				<td><?php echo $d['lastname']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['reg_date']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>