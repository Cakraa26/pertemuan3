<?php
$awal = 1;
$akhir = 10;

echo "<h3>Perulangan While</h3>";
while ($awal <= $akhir) {
    echo "Perulangan ke-" . $awal . "<br>";
    $awal++;
}

$awal = 1;
echo "<h3>Perulangan Do While</h3>";
do {
    echo "Perulangan ke-" . $awal . "<br>";
    $awal++;
} while ($awal <= $akhir);

$awal = 1;
echo "<h3>Perulangan For</h3>";
for ($awal; $awal <= $akhir; $awal++) {
    echo "Perulangan ke-" . $awal . "<br>";
}
?>