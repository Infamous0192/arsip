<?php
require '../assets/fpdf184/fpdf.php';
include '../koneksi.php';

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetTitle('Laporan Arsip Digital');

$pdf->SetFont("Arial", "B", "14");

$pdf->Image('../assets/img/logo/barut.png', 60, 10, 20, 20);

$pdf->Cell(280, 10, "Dinas Kependudukan dan Pencatatan Sipil Barito Utara", 0, 1, "C");
$pdf->SetFont("Arial", "", "10");
$pdf->Cell(280, 10, "Jl. Tumenggung Surapati No.44, Kec. Teweh Tengah", 0, 1, "C");

$pdf->line(80, 30, 220, 30);
$pdf->ln();
$pdf->SetFont("Arial", "B", "14");
$pdf->Cell(280, 10, "Laporan Arsip Petugas", 0, 1, 'C');
$pdf->ln(1);
$pdf->Cell(20, 15, '', 0, 0, 'c');

$pdf->SetFillColor(255, 40, 20);

$pdf->SetFont("Arial", "B", "9");
$pdf->Cell(20, 7, 'ID Arsip', 1, 0, 'C', 1);
$pdf->Cell(40, 7, 'Waktu Upload', 1, 0, 'C', 1);
$pdf->Cell(30, 7, 'Kode Arsip', 1, 0, 'C', 1);
$pdf->Cell(50, 7, 'Nama Arsip', 1, 0, 'C', 1);
$pdf->Cell(20, 7, 'Jenis Arsip', 1, 0, 'C', 1);
$pdf->Cell(30, 7, 'Keterangan Arsip', 1, 0, 'C', 1);
$pdf->Cell(52, 7, 'File Arsip', 1, 1, 'C', 1);
$pdf->SetFont("Arial", "", "9");
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

$sql = "SELECT * FROM arsip, kategori, petugas WHERE arsip_petugas = petugas_id AND arsip_kategori = kategori_id";

if ($tahun && $bulan) {
    $sql .= " AND YEAR(arsip_waktu_upload) = '$tahun' AND MONTH(arsip_waktu_upload) = '$bulan'";
} elseif ($tahun) {
    $sql .= " AND YEAR(arsip_waktu_upload) = '$tahun'";
} elseif ($bulan) {
    $sql .= " AND MONTH(arsip_waktu_upload) = '$bulan'";
}

$sql .= " ORDER BY arsip_id DESC";
$arsip = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_array($arsip)) {
    $pdf->Cell(20, 7, '', 0, 0, 'c');
    $pdf->Cell(20, 7, $row['arsip_id'], 1, 0, 'C');
    $pdf->Cell(40, 7, $row['arsip_waktu_upload'], 1, 0);
    $pdf->Cell(30, 7, $row['arsip_kode'], 1, 0);
    $pdf->Cell(50, 7, $row['arsip_nama'], 1, 0);
    $pdf->Cell(20, 7, $row['arsip_jenis'], 1, 0);
    $pdf->Cell(30, 7, $row['arsip_keterangan'], 1, 0);
    $pdf->Cell(52, 7, $row['arsip_file'], 1, 1);
}
$pdf->output();
