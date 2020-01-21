<?php
	// include database koneksi file
	include"koneksi.php";

	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{
		$id 			= $_POST['id'];
		$npm			= $_POST['npm'];
		$nama			= $_POST['nama'];
		$password		= $_POST['password'];
		$username		= $_POST['username'];

		// update user data
		$result = mysqli_query($connect, "UPDATE  tb_mahasiswa SET npm='$npm', nama='$nama', password='$password', username='$username' WHERE id=$id");

		// Redirect to homepage to display updated user in list
		header("location:getMahasiswa.php");
	}	
?>

<?php 
	// Display selected user data based on id
	// Getting id from url
	$id = $_GET['id'];

	// Fetech user data based on id
	$result = mysqli_query($connect, "SELECT * FROM tb_mahasiswa WHERE id=$id");

	while($data = mysqli_fetch_array($result))
	{
		$npm			= $data['npm'];
		$nama			= $data['nama'];
		$password		= $data['password'];
		$username		= $data['username'];
	}	
?>
<?php include"header.php" ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Data Mahasiswa</h3>
	</div>
	<div class="panel-body">
		<form method="post" action="editMahasiswa.php" class="form-horinzontal">
			<div class="form-group">
				<label for="npm" class="col-sm-2 control-label">NPM</label>
				<div class="col-sm-10">
					<input type="text" maxlength="16" class="form-control" name="npm" placeholder="Masukkan NPM..." value="<?php echo $npm;?>">
				</div>
			</div>	
			
			<div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama..." value="<?php echo $nama;?>">
				</div>
			</div>	

			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">password</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="posisi" placeholder="Masukkan Password..." value="<?php echo $password;?>">
				</div>
			</div>	

			<div class="form-group">
				<label for="usernname" class="col-sm-2 control-label">username</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" placeholder="Masukkan Username..." value="<?php echo $username;?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<!-- <td><input type="submit" name="update" value="Update"</td> -->
					<input type="submit" name="update" class="btn btn-primary" value="Update">
					<input type="reset" name="reset" class="btn btn-warning" value="Reset">
					<body background="img/St.jpg"></body>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include"footer.php" ?>						