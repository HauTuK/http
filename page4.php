<?php
// page4.php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

echo "<h1>Страница 4</h1>";
echo "<p>Страница 3 была открыта " . $_SESSION['count'] . " раз.</p>";
?>