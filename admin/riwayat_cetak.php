<?php
require '../assets/fpdf184/fpdf.php';
include '../koneksi.php';

function getMonthName($monthNumber)
{
    $months = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];
    return isset($months[$monthNumber]) ? $months[$monthNumber] : '';
}

$pdf = new FPDF('P', 'cm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Laporan Arsip Digital');

$pdf->SetFont("Arial", "B", "14");

$pdf->Image('../assets/img/logo/barut.png', 1, 1, 2, 2);

$pdf->Cell(19, 1, "Dinas Kependudukan dan Pencatatan Sipil Barito Utara", 0, 1, "C");
$pdf->SetFont("Arial", "", "10");
$pdf->Cell(19, 1, "Jl. Tumenggung Surapati No. 44, Kec. Teweh Tengah", 0, 1, "C");

$pdf->line(3, 3, 18, 3);
$pdf->ln();
$pdf->SetFont("Arial", "B", "14");
$pdf->Cell(19, 1, "Laporan Riwayat Unduh Arsip" . ' ' . (isset($_GET['bulan']) ? getMonthName((int)$_GET['bulan']) : '') . ' ' . (isset($_GET['tahun']) ? $_GET['tahun'] : ''), 0, 1, 'C');
$pdf->ln(0);
$pdf->Cell(2, 1, '', 0, 0, 'c');

$pdf->SetFillColor(255, 40, 20);

$pdf->SetFont("Arial", "B", "9");
$pdf->Cell(3, 1, 'No', 1, 0, 'C', 1);
$pdf->Cell(5, 1, 'Waktu Unduh', 1, 0, 'C', 1);
$pdf->Cell(3, 1, 'Nama User', 1, 0, 'C', 1);
$pdf->Cell(3, 1, 'Nama Arsip', 1, 1, 'C', 1);
$pdf->SetFont("Arial", "", "9");
$no = 1;
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

$sql = "SELECT * FROM riwayat INNER JOIN arsip ON riwayat.riwayat_arsip = arsip.arsip_id INNER JOIN user ON riwayat.riwayat_user = user.user_id";

$conditions = [];
if ($tahun) {
    $conditions[] = "YEAR(riwayat_waktu) = '$tahun'";
}
if ($bulan) {
    $conditions[] = "MONTH(riwayat_waktu) = '$bulan'";
}

if (count($conditions) > 0) {
    $sql .= " WHERE " . implode(' AND ', $conditions);
}

$sql .= " ORDER BY riwayat_id DESC";
$riwayat = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_array($riwayat)) {
    $pdf->Cell(2, 1, '', 0, 0, 'c');
    $pdf->Cell(3, 2, $row['riwayat_id'], 1, 0, 'C');
    $pdf->Cell(5, 2, $row['riwayat_waktu'], 1, 0);
    $pdf->Cell(3, 2, $row['riwayat_user'], 1, 0, 'C');
    $pdf->Cell(3, 2, $row['arsip_nama'], 1, 1, 'C');
}
$pdf->output();
