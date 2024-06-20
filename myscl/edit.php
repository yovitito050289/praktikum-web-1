<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
 
	<h2>TABEL MY GUESTS</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from myguests where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Firstname</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="firstname" value="<?php echo $d['firstname']; ?>">
					</td>
				</tr>
				<tr>
					<td>Lastname</td>
					<td><input type="text" name="lastname" value="<?php echo $d['lastname']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
                <tr>
					<td>Date</td>
					<td><input type="datetime-local" name="reg_date" value="<?php echo $d['reg_date']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>