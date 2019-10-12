<html>
<head>
	<style>
		table {
  font-family: arial, sans-serif;
  text-align: center;
  border-collapse: collapse;
  width: 100%;
}
	h2 {
		font-family: arial, sans-serif;
		text-align: center;

	}
	</style>
</head>
<body>

	<h2>Biodata Mahasiswa</h2>

<form action="#" method="post">
Name: <br><input type="text" name="name"><br>
Jenis Kelamin : <br><select name="jk">
	<option value="Pria">Pria</option>
  <option value="Wanita">Wanita</option>
</select><br>
No Hp :<br>
<input type="number" name="nohp"><br>
Alamat : <br>
<textarea name="alamat"></textarea><br>
Foto :<br>
<input type="file" name="foto"><br>
<input type="submit">
</form>

	<h2>Data Biodata Mahasiswa</h2>
<?php 

$data = [
	'nama' => $_POST["name"],
	'jeniskelamin' => $_POST["jk"],
	'nohp' => $_POST["nohp"],
	'alamat' => $_POST["alamat"],
	'foto' => $_POST["foto"],
	];
	?>

<table>
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>No HP</th>
		<th>Alamat</th>
		<th>Foto</th>
	</tr>
		<tr>
			<td><?php echo $data['nama'] ?></td>
			<td><?php echo $data['jeniskelamin'] ?></td>
			<td><?php echo $data['nohp'] ?></td>
			<td><?php echo $data['alamat'] ?></td>
			<td><?php echo $data['foto'] ?></td>

		</tr>
</table>
<br>



</body>
</html>