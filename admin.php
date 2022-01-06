<?php

session_start();

//checking apakah session username telah terdaftar atau belum
if (isset($_SESSION['username'])) {

  //cek jika username ada, apakah level dari username tersebut
  if ($_SESSION['level'] == "1") {

    //jika level admin maka tampil hai admin

    echo ("<table width='1100' height='400' border='0' align='center' cellpadding'1' cellspacing='1' bgcolor='black'>");
    echo ("<tr bgcolor='#ffffff'><td height='41' colspan='2'><div align='center'><img src='image\hider2.jpg'></div></td></tr>");
    echo ("<tr bgcolor='#ffffff'>");
    echo ("<td width='90' height='375' valign='top'>");
    echo ("<h5 align='center'>&nbsp;</h5>");
    echo "Anda Login Sebagai Admin";
    echo ("<h5 align='center'><a href='admin.php'><img src='image\beranda.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='tampil_barang.php'><img src='image\petugas2.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='dataspp.php'><img src='image\spp1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='datakelas.php'><img src='image\kelas1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='datasiswa.php'><img src='image\siswa1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='datapembayaran.php'><img src='image\pembayaran1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='historypembayaran.php'><img src='image\historypembayaran1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='logout.php'><img src='image\logout1.jpg'></a></h5>");
    echo ("<td width='639'height='375'valign='top'>");
    echo ("<div align='center'>");

    include "tampil_beranda.php";

    echo ("<p></p>");
    echo ("<p>&nbsp</p>");
    echo ("</div>");
    echo ("<div align='center'></div></td>");
    echo ("</tr>");
    echo ("</table>");
  } else if ($_SESSION['level'] == "2") {

    //jika level bendahara maka tampil hai bendahara

    echo ("<table width='1100' height='400' border='0' align='center' cellpadding'1' cellspacing='1' bgcolor='black'>");
    echo ("<tr bgcolor='#ffffff'><td height='41' colspan='2'><div align='center'><img src='image\hider2.jpg'></div></td></tr>");
    echo ("<tr bgcolor='#ffffff'>");
    echo ("<td width='90' height='375' valign='top'>");
    echo ("<h5 align='center'>&nbsp;</h5>");
    echo "Anda Login sebagai " . $_SESSION['username'];
    echo ("<h5 align='center'><a href='admin.php'><img src='image\beranda.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='datapembayaran.php'><img src='image\pembayaran1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='historypembayaran.php'><img src='image\historypembayaran1.jpg'></a></h5>");
    echo ("<h5 align='center'><a href='logout.php'><img src='image\logout1.jpg'></a></h5>");
    echo ("<td width='639'height='375'valign='top'>");
    echo ("<div align='center'>");
    include "tampil-beranda.php";
    echo ("<p></p>");
    echo ("<p>&nbsp</p>");
    echo ("</div>");
    echo ("<div align='center'></div></td>");
    echo ("</tr>");
    echo ("</table>");
  }
} else {
  header("location:index.php");
}
