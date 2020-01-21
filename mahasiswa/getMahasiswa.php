<?php include"header.php"?>
	<div class="row">
		<div class="col-md-12">
			<form action="getMahasiswa.php" method="get" class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" name="search" placeholder="Masukan NPM">
				</div>
				<input type="submit" value="Cari" class="btn btn-primary">
			</form>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Data Mahasiswa</h3>
				</div>
				
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>NPM</th>
						<th>Nama</th>
						<th>Password</th>
						<th>Username</th>
						<th>Aksi</th>
					</tr>
					
					<?php
						include'koneksi.php';
						if (isset($_GET['search'])) {
							$keyword = $_GET['search'];
							$result = mysqli_query($connect, "SELECT * FROM tb_mahasiswa WHERE npm LIKE '%".$keyword."%'");
						}else	
							$result = mysqli_query($connect, "SELECT * FROM tb_mahasiswa order by npm asc");
						$no = 1;
						while ($data = mysqli_fetch_array($result)) {
					?>
					
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['npm']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['password']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td>
								<a class="btn btn-xs btn-success" href="editMahasiswa.php?id=<?php echo $data['id']; ?>">Edit</a>
								<a class="btn btn-xs btn-danger" href="deleteMahasiswa.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
								<body background="img/St.jpg"></body>	
							</td>
						</tr>
						
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
<?php include"footer.php" ?>