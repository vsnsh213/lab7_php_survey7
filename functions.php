<?php
function saveSurvey($data) {
    date_default_timezone_set("Europe/Kyiv");

    if (!file_exists("survey")) {
        mkdir("survey");
    }

    $filename = "survey/response_" . date("Y-m-d_H-i-s") . ".json";
    file_put_contents($filename, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}
?>
