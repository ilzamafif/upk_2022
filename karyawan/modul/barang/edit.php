	<?php

	$edit = mysqli_query($con, "SELECT * FROM barang WHERE kd_barang='$_GET[id]' ");
	foreach ($edit as $d) ?>
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Barang</h4>
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
					<a href="#">Data Barang</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Edit Barang</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Form Edit Barang</h3>
					</div>
					<div class="card-body">
						<form action="?page=barang&act=proses&id=<?= $d['kd_barang'] ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">

								<div class="form-group">
									<label>Nama Barang</label>
									<input name="nama_barang" type="text" class="form-control" value="<?= $d['nama_barang'] ?>">
								</div>

								<div class="form-group">
									<label>KD Barang</label>
									<input name="kd_barang" type="text" class="form-control" value="<?= $d['kd_barang'] ?>">
								</div>


								<div class="form-group">
									<button name="editBarang" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
									<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
								</div>


						</form>


					</div>
				</div>
			</div>
		</div>
	</div>