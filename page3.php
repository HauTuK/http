<?php
// page3.php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

$_SESSION['count']++;

if ($_SESSION['count'] % 3 === 0) {
    header('Location: page4.php');
    exit;
}

echo "<h1>Страница 3</h1>";
echo "<p>Эта страница была открыта " . $_SESSION['count'] . " раз.</p>";
?>