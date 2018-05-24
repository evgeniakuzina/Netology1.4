<?php

if(isset($_POST['q'])) {
    $json = file_get_contents("http://api.openweathermap.org/data/2.5/find?q={$_POST['q']}&units=metric&appid=af16a194ec280290e5159489319cdd51");
    $data = json_decode($json, true);
    $weather = "Service is not available now, please return later.";
    if (!$data) {
        return $weather;
    }
    $description = $data["list"][0]["weather"][0]["description"];
    $temp = $data["list"][0]["main"]["temp"];
    if (!$description || !$temp) {
        return $weather;
    }
    $weather = 'Today in ' . $_POST['q'] . ' ' . $description . '. Temperature is ' . $temp . 'C.';

    return $weather;
}


?>