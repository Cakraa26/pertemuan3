<?php
$teman = array("wahyudi", "Santhi", "Yeyen", "Susanti", "Jarjit");

$teman[0] = "Putu";
$teman[1] = "Wayan";
$teman[2] = "Made";
$teman[3] = "Komang";
$teman[4] = "Ketut";

echo "<h3>Daftar Teman</h3>";
echo "<ol>";
for ($i = 0; $i < 5; $i++) {
    echo "<li>" . $teman[$i] . "</li>";
}
echo "</ol>";

echo "<h3>Daftar Teman menggunakan foreach</h3>";
echo "<ol>";
foreach ($teman as $tmn) {
    echo "<li>" . $tmn . "</li>";   
}
echo "</ol>";

echo "<h3>Daftar Teman menggunakan while</h3>";
echo "<ol>";
$i = 0;
while($i<count($teman)){
    echo "<li>" . $teman[$i] . "</li>";
    $i++;
}
echo "</ol>";

?>