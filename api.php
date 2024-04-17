<?php


$dischi_file = 'dischi.json';


// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newDisco'])) {

//     $newDisco = $_POST['newDisco'];

//     $json_string = file_get_contents($dischi_file);
//     $dischiArray = json_decode($json_string, true);
//     array_push($dischiArray, $newDisco);
//     $dischi_json = json_encode($dischiArray);
//     file_put_contents($dischi_file, $dischi_json);
//     echo json_encode($newDisco);
// } 

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $dischi_json = file_get_contents($dischi_file);
    echo $dischi_json;
}
