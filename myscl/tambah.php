<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
 
	<h2>My Guests</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Firstname</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr>
				<td>Lastname</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
            <tr>
                <td>Date</td>
                <td><input type="datetime-local" name="reg_date"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" name="add"></td>
			</tr>		
		</table>
	</form>
</body>
</html>