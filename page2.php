<?php
// page2.php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $filename = 'output.txt';
    file_put_contents($filename, $text);
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Type: text/plain');
    readfile($filename);
    exit;
} else {
    echo "<h1>Ошибка</h1>";
    echo "<p>Не передан параметр text.</p>";
}
?>