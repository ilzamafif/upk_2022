<?php
$id = $_GET['username'];
$del = mysqli_query($con, "DELETE FROM `user` WHERE `user`.`username` = '$id'");
var_dump($del);
if ($del) {
	echo " <script>
					alert('Data telah dihapus !');
					window.location='?page=kelola-user';
				</script>";
}
