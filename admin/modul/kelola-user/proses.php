<?php

if (isset($_POST['saveUser'])) {

	// $pass= sha1($_POST['nip']);

	// $sumber = @$_FILES['foto']['tmp_name'];
	// $target = '../assets/img/user/';
	// $nama_gambar = @$_FILES['foto']['name'];
	// $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
	// if ($pindah) {
	$save = mysqli_query($con, "INSERT INTO user VALUES(NULL, '$_POST[username]','$_POST[password]','$_POST[level]') ");
	if ($save) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[username]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=kelola-user');
				} ,3000);   
				</script>";
		// }
	}
} elseif (isset($_POST['editUser'])) {

	// $pass = sha1($_POST['email']);
	// $gambar = @$_FILES['foto']['name'];
	// if (!empty($gambar)) {
	// 	move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/img/user/$gambar");
	// 	$ganti = mysqli_query($con, "UPDATE tb_barang SET foto='$gambar' WHERE id_barang='$_POST[id]' ");
	// }
	$sql = "UPDATE `user` SET username = '$_POST[username]',`password` = '$_POST[password]',`level` = '$_POST[level]' WHERE `user`.`username`='$_GET[id]' ";
	var_dump($sql);
	$editBarang = mysqli_query($con, $sql);

	if ($editBarang) {
		echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[username]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=kelola-user');
				} ,3000);   
				</script>";
	}
}
