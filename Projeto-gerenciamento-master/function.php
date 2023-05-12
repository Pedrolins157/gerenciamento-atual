<?php

function renderEstadoCivil($con, $selected = '') {
    $cod = base64_decode($_GET["cod"]);
    $listar_estadocivil = $con->prepare('SELECT * FROM `cliente` WHERE `cod` = :cod');
    $listar_estadocivil->execute([
        ':cod' => $cod
    ]);
    $results = $listar_estadocivil->fetchAll();

    for ($i = 0; $i <= count($results) -1; $i++) {
        $result = $results[$i]['estadocivil'];

        if ($result == $selected) {
            echo ("<option value=\"$result\" selected>$result</option>");
        } else {
            echo ("<option value=\"$result\">$result</option>");
        }
    }
}