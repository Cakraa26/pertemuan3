<?php
$nilais = array("web1" => 80, "web2" => 95, "algo" => 75);
echo "<ul>";
foreach ($nilais as $nl => $nilai) {
    echo "<li>" . $nl . " : " . $nilai . "</li>";
}
echo "</ul>";

$nilaimhs = array(
    array("wahyudi", "22334455", "Algo", "84"),
    array("waria", "22334455", "Basis Data", "94"),
);
echo json_encode($nilaimhs);
?>