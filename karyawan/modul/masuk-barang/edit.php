	<?php

	$edit = mysqli_query($con, "SELECT * FROM masuk_barang WHERE kd_masuk_barang='$_GET[id]' ");
	foreach ($edit as $d) ?>
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Barang Masuk</h4>
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
					<a href="#">Data Barang Masuk</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Tambah Barang Masuk</a>
				</li>
			</ul>
		</div>
		<div class="row">

			<div class="col-lg-8">
				<div class="card">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Form Update Barang Masuk</h3>
					</div>
					<div class="card-body">
						<form action="?page=masuk-barang&act=proses&id=<?= $d['kd_masuk_barang'] ?>" method="post" enctype="multipart/form-data">

							<div class="form-group">
								<label>Kode Barang Masuk</label>
								<input name="kd_masuk_barang" type="text" class="form-control" value="<?= $d['kd_masuk_barang'] ?>" placeholder="Kode Barang Masuk">
							</div>

							<div class="form-group">
								<label>Kode Barang</label>
								<input name="kd_barang" type="text" class="form-control" value="<?= $d['kd_barang'] ?>" placeholder="Kode Barang">
							</div>

							<div class="form-group">
								<label>Nama Barang</label>
								<input name="nama_barang" type="text" class="form-control" value="<?= $d['nama_barang'] ?>" placeholder="Nama Barang">
							</div>

							<div class="form-group">
								<label>Tanggal Masuk</label>
								<input name="tgl_masuk" type="date" class="form-control" value="<?= $d['tgl_masuk'] ?>" placeholder="">
							</div>

							<div class="form-group">
								<label>Jumlah Masuk</label>
								<input name="jumlah_masuk_barang" type="text" class="form-control" value="<?= $d['jumlah_masuk_barang'] ?>" placeholder="Jumlah Masuk">
							</div>

							<div class="form-group">
								<label>Kondisi Barang</label>
								<input name="kondisi" type="text" class="form-control" value="<?= $d['kondisi'] ?>" placeholder="KD Barang">
							</div>

							<div class="form-group">
								<button name="editBarang" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>