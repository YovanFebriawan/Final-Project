<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No.');
$sheet->setCellValue('B1', 'Username');
$sheet->setCellValue('C1', 'Nama Lengkap');
$sheet->setCellValue('D1', 'Jenis Kelamin.');
$sheet->setCellValue('E1', 'Alamat');
$sheet->setCellValue('F1', 'Usia');
$sheet->setCellValue('G1', 'Nomor Telepon');

$query = mysqli_query($koneksi,"SELECT*FROM pendaftaran");
$i = 2;
$no = 1;

while ($row = mysqli_fetch_array($query)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['username']);
	$sheet->setCellValue('C'.$i, $row['nama_lengkap']);
	$sheet->setCellValue('D'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('E'.$i, $row['alamat']);
	$sheet->setCellValue('F'.$i, $row['usia']);
	$sheet->setCellValue('G'.$i, $row['nomor_telp']);
	$i++;
}
// Membuat border
$styleArray = [
	'borders' => [
		'allBorders' => [
			'borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,],],];
// Mengurangi nilai dalam variabel
$i = $i - 1;
// Mengaplikasikan border ke dalam excel
$sheet->getStyle('A1:G'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Data Pasien Pepapugo.xlsx');
?>