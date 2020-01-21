<?php
 if(isset($_POST['Submit'])) {
 	$npm			= $_POST['npm'];
 	$nama			= $_POST['nama'];
 	$password		= $_POST['password'];
 	$username		= $_POST['username'];

 	// include database koneksi file
 	include"koneksi.php";

 	// Insert user data into table
 	$result = mysqli_query($connect, "INSERT INTO tb_mahasiswa (npm, nama, pass, username) VALUES('$npm','$nama','$password','$username')");

 	// Show message user data into table
 	header("location:getMahasiswa.php");
}
?>


<?php include"header.php" ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Data Mahasiswa</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="tambahMahasiswa.php" class="form-horizontal">
				<div class="form-group">
					<label for="npm" class="col-sm-2 control-label">NPM</label>
					<div class="col-sm-10">
						<input type="text" maxlength="16" class="form-control" name="npm" placeholder="Masukkan NPM...">
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap...">
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password" placeholder="Masukkan Password...">
					</div>
				</div>

				<div class="form-group">
					<label for="username" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username...">
					</div>
				</div>

				<div class="from-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
						<input type="reset" name="reset" class="btn btn-warning" value="Reset">
						<body background="img/St.jpg"></body>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php include"footer.php" ?>