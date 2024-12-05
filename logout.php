<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Переадресация на главную страницу после выхода
exit;
?>