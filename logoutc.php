<?php

require_once "connect.php";

if (!isset($_SESSION['loginc'])) {
    header('Location: logincForm.php?' .
            'error=Błąd%20bazy%20danych.');
}

session_destroy();

header('Location: index.php?' .
        'success=Wylogowano.');
