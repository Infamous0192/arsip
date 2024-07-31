<?php
    require '../assets/fpdf184/fpdf.php';
    include '../koneksi.php';

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
    $pdf->Cell(19, 1, "Laporan Kategori", 0, 1, 'C');
    $pdf->ln(0);
    $pdf->Cell(2, 1, '', 0, 0,'c');

    $pdf->SetFillColor(255, 40, 20);

    $pdf->SetFont("Arial", "B", "9");
    $pdf->Cell(3, 1, 'ID Kategori', 1, 0, 'C', 1);
    $pdf->Cell(5, 1, 'Nama', 1, 0, 'C', 1);
    $pdf->Cell(7, 1, 'Keterangan', 1, 1, 'C', 1);
    $pdf->SetFont("Arial", "", "9");
    $kategori = mysqli_query($koneksi, "select * from kategori");
    while($row = mysqli_fetch_array($kategori)){
        $pdf->Cell(2, 1, '', 0, 0,'c');
        $pdf->Cell(3, 2, $row['kategori_id'], 1, 0, 'C');
        $pdf->Cell(5, 2, $row['kategori_nama'], 1, 0);
        $pdf->Cell(7, 2, $row['kategori_keterangan'], 1, 1);
    }
    $pdf->output();

?>