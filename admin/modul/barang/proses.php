<?php

if (isset($_POST['saveBarang'])) {

	// $pass= sha1($_POST['nip']);

	// $sumber = @$_FILES['foto']['tmp_name'];
	// $target = '../assets/img/user/';
	// $nama_gambar = @$_FILES['foto']['name'];
	// $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
	// if ($pindah) {
	$save = mysqli_query($con, "INSERT INTO barang VALUES('$_POST[kd_barang]','$_POST[nama_barang]') ");
	if ($save) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama_barang]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=barang');
				} ,3000);   
				</script>";
		// }
	}
} elseif (isset($_POST['editBarang'])) {

	// $pass = sha1($_POST['email']);
	// $gambar = @$_FILES['foto']['name'];
	// if (!empty($gambar)) {
	// 	move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/img/user/$gambar");
	// 	$ganti = mysqli_query($con, "UPDATE tb_barang SET foto='$gambar' WHERE id_barang='$_POST[id]' ");
	// }
	$sql = "UPDATE `barang` SET nama_barang='$_POST[nama_barang]',`kd_barang` = '$_POST[kd_barang]' WHERE `barang`.`kd_barang`='$_GET[id]' ";
	$thikelek = "UPDATE `barang` SET `kd_barang` = 'B001', `nama_barang` = 'samsung j11' WHERE `barang`.`kd_barang` = 'B003'";
	var_dump($sql);
	$editBarang = mysqli_query($con, $sql);

	if ($editBarang) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama_barang]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=barang');
				} ,3000);   
				</script>";
	}
}
