<?php
require_once '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$content = '
<div style="font-family: sans-serif;">
  <h4 style="text-align: center;">Cetak Semua Barang</h4>
  <div class="card shadow my-3">
    <div class="table-responsive">
      <table border="1" width="100%" cellspacing="0" cellpadding="5px">
        <tr>
          <th style="text-align: left;">No</th>
          <th style="text-align: left;">KD Barang</th>
          <th style="text-align: left;">Nama Barang</th>
        </tr>';
$i = 1;
$row = mysqli_query($con, "SELECT * FROM barang");
foreach ($row as $data) {
    $content .= '
            <tr>
              <td>' . $i++ . '</td>
              <td>' . $data['kd_barang'] . '</td>
              <td>' . $data['nama_barang'] . '</td>
            </tr>
          ';
}

$content .= '  </table>
    </div>
  </div>
</div>
';
$mpdf->WriteHTML($content);
ob_end_clean();
$mpdf->Output('cetak.pdf');
