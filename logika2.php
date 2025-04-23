<?php
$mahasiswa = [
    ["no" => 1, "npm" => "001", "nama" => "Chayra", "nilai" => 80],
    ["no" => 2, "npm" => "002", "nama" => "Archelia", "nilai" => 75],
    ["no" => 3, "npm" => "003", "nama" => "Lalan", "nilai" => 50],
    ["no" => 4, "npm" => "004", "nama" => "Fuji", "nilai" => 90]
];

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>{$mhs['no']}</td>";
    echo "<td>{$mhs['npm']}</td>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['nilai']}</td>";
    echo "<td>" . ($mhs['nilai'] >= 60 ? "Lulus" : "Tidak Lulus") . "</td>";
    echo "</tr>";
}
?>