<?php
//agt_pdf_v1.php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'ANGGOTA KSP-S2',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'KELOMPOK SIMPAN PINJAM SYARIAH SIJUNJUNG',0,1,'C');

$pdf->SetMargins(20, 10);
//$pdf->SetAutoPageBreak(true, 10);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);


$pdf->Cell(45,6,'ID',1,0,'C');
$pdf->Cell(55,6,'NAMA',1,0,'C');
$pdf->Cell(47,6,'SKPD',1,0,'C');
$pdf->Cell(25,6,'SW',1,1,'C');

$pdf->SetFont('Arial','',10);

//Connect to db_close

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ksp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//===


$agt = mysqli_query($conn, "select * from anggota");
while ($row = mysqli_fetch_array($agt)){
    $pdf->Cell(45,6,$row['Kode_Anggota'],1,0);
    $pdf->Cell(55,6,$row['Nama_Anggota'],1,0);
    $pdf->Cell(47,6,$row['SKPD'],1,0);
    $pdf->Cell(25,6,$row['SW_Per_Bulan'],1,1); 
}
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$tgl = date("Y/m/d");

$pdf->Cell(100);
$pdf->Cell(60,7,'Muaro Sijunjung, '.$tgl.'',0,1,'C');

$pdf->Cell(100);
$pdf->Cell(60,7,'Ketua KSP-S2',0,1,'C');

$pdf->Cell(10,15,'',0,1);

$pdf->Cell(100);
$pdf->Cell(60,7,'Roni Satria',0,1,'C');

$pdf->Output();
?>

