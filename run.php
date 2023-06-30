<?php
$testo = $_POST['testo'];
$parola_da_censurare = $_POST['parola_da_censurare'];
$lunghezza_testo = strlen($testo);
$testo_censurato = str_replace($parola_da_censurare, "***", $testo);

echo "<h2>Primo step</h2><br>Testo: ".$testo."<br> Numero caratteri: ".$lunghezza_testo."<br><h2>Secondo step</h2><br>Testo: ".$testo_censurato."<br> Numero caratteri: ".$lunghezza_testo;
?>