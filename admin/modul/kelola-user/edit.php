	<?php

	$edit = mysqli_query($con, "SELECT * FROM user WHERE username='$_GET[id]' ");
	foreach ($edit as $d) ?>
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">User</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="#">
						<i class="flaticon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Data User</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Edit User</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Form Edit User</h3>
					</div>
					<div class="card-body">
						<form action="?page=kelola-user&act=proses&id=<?= $d['username'] ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">

								<div class="form-group">
									<label>Username</label>
									<input name="username" type="text" class="form-control" value="<?= $d['username'] ?>">
								</div>

								<div class="form-group">
									<label>Password</label>
									<!-- <span class="text-danger"><em>Email digunakan unruk Password default</em></span> -->
									<input name="password" type="text" class="form-control" value="<?= $d['password'] ?>">
								</div>

								<div class="form-group">
									<label>Level</label>
									<input name="level" type="text" class="form-control" value="<?= $d['level'] ?>">
								</div>

								<!-- <div class="form-group">
									<label>Golongan</label>
									<input name="golongan" type="text" class="form-control" value="<?= $d['golongan'] ?>">
								</div> -->



								<!-- <div class="form-group">
									<p>
										<img src="../assets/img/user/<?= $d['foto']; ?>" class="img-fluid rounded-circle kotak" style="height: 65px; width: 65px;">
									</p>
									<label>Foto</label>
									<input type="file" name="foto">
								</div> -->


								<div class="form-group">
									<button name="editUser" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
									<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
								</div>


						</form>


					</div>
				</div>
			</div>
		</div>
	</div>