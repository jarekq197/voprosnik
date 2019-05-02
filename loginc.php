<?php
require_once "connect.php";

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location: index.php?' .
            'error=Brak%20dostępu.');
    exit();
}

$login = htmlentities($_POST['login']);
$haslo = $_POST['password'];

try {

    $stmt = $pdo->prepare("select iduzytkownicy, login, haslo, czyAdmin from uzytkownicy 
        where login=:login");
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->execute();


    if ($stmt->rowCount() == 0) {
        header('Location: logincForm.php?error=Nieprawidłowe%20dane%20' . $row['login']."%20" . $login);
        exit();
    }

    $row = $stmt->fetch();

     if (!password_verify($haslo, $row['haslo'])) {
      header('Location: logincForm.php?error=Nieprawidłowe%20dane%20'.$row['haslo']."%20" .$haslo);
        exit();
     } 

    $_SESSION['iduzytkownicy'] = $row['iduzytkownicy'];
    $_SESSION['login'] = $row['login'];
    $_SESSION['czyAdmin'] = $row['czyAdmin'];

    header('Location: index.php?success=Zalogowano.');
} catch (PDOException $e) {
    header('Location: logincForm.php?' .
            'error=Błąd%20bazy%20danych.');
}

