<?php
// Function to read JSON data
function readJsonFile($filename) {
    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        return json_decode($jsonData, true); // Decode JSON as associative array
    }
    return [];
}

// Function to read and write CSV visitor counts
function readCsvFile($filename) {
    $visitors = [];
    if (file_exists($filename)) {
        $file = fopen($filename, 'r');
        while (($data = fgetcsv($file)) !== false) {
            $visitors[$data[0]] = $data[1]; // Store post ID and visit count
        }
        fclose($file);
    }
    return $visitors;
}

function writeCsvFile($filename, $data) {
    $file = fopen($filename, 'w');
    foreach ($data as $id => $count) {
        fputcsv($file, [$id, $count]);
    }
    fclose($file);
}
?>
