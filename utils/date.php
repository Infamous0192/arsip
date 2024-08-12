<?php

function renderMonthSelect($name)
{
    $months = [
        "1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April", "5" => "Mei", "6" => "Juni",
        "7" => "Juli", "8" => "Agustus", "9" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember"
    ];

    $selectedMonth = isset($_GET['bulan']) ? $_GET['bulan'] : '';

    $html = "<select class=\"form-control\" name=\"$name\" id=\"$name\" required=\"required\">";
    $html .= "<option value=\"\">Pilih Bulan</option>";
    foreach ($months as $value => $text) {
        $selected = $value == $selectedMonth ? 'selected' : '';
        $html .= "<option value=\"$value\" $selected>$text</option>";
    }
    $html .= "</select>";
    return $html;
}

function renderYearSelect($name, $startYear, $endYear)
{
    $years = range($startYear, $endYear);

    $selectedYear = isset($_GET['tahun']) ? $_GET['tahun'] : '';

    $html = "<select class=\"form-control\" name=\"$name\" id=\"$name\" required=\"required\">";
    $html .= "<option value=\"\">Pilih Tahun</option>";
    foreach ($years as $year) {
        $selected = $year == $selectedYear ? 'selected' : '';
        $html .= "<option value=\"$year\" $selected>$year</option>";
    }
    $html .= "</select>";
    return $html;
}

function getUrlParams() {
    $params = [];
    if (isset($_GET['bulan']) && !empty($_GET['bulan'])) {
        $params[] = 'bulan=' . $_GET['bulan'];
    }
    if (isset($_GET['tahun']) && !empty($_GET['tahun'])) {
        $params[] = 'tahun=' . $_GET['tahun'];
    }
    if (isset($_GET['jenis']) && !empty($_GET['jenis'])) {
        $params[] = 'jenis=' . $_GET['jenis'];
    }
    return implode('&', $params);
}
