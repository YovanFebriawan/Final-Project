<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$query = mysqli_query($koneksi,"select * from pendaftaran");

$html = '<center><h3>Data Pasien Pepapugo</h3></center><br/><br/><br/>';
$html .= '<table border="1" width="50%">
 <tr>
 <th>No.</th>
 <th>Username</th>
 <th>Nama Lengkap</th>
 <th>Jenis Kelamin</th>
 <th>Alamat</th>
 <th>Usia</th>
 <th>Nomor Telepon</th>
 </tr>';
 
$no = 1;

while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['username']."</td>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['jenis_kelamin']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['usia']."</td>
 <td>".$row['nomor_telp']."</td>
 </tr>";
 $no++;
}

$html .= "</html>";

$dompdf->loadHtml($html);

$dompdf->setPaper('A3', 'landscape');

$dompdf->render();

ob_end_clean();
$dompdf->stream("Data Pasien Pepapugo.pdf");
?>