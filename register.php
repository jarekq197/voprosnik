<?php

require_once "connect.php";

if (
       
        !isset($_POST['login']) 
        || !isset($_POST['pass']) 
     
) {
    header('Location: index.php?error=Brak%20dostępu.');
    exit();
}


$login = htmlentities($_POST['login']);
$haslo = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$czyAdmin = 0;


try {

    $stmt = $pdo->prepare("SELECT iduzytkownicy FROM uzytkownicy WHERE login=:login");
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->execute();


    if ($stmt->rowCount() > 0) {
        header('Location: registerForm.php?' .
                'error=Istnieje%20użytkownik%20o%20podanym%20loginie.');
        exit();
    }
    $stmt->closeCursor();



    $stmt = $pdo->prepare("insert into uzytkownicy (login, haslo, czyAdmin) " .
            "VALUES (:login, :haslo, :czyAdmin);");

    
    $stmt->bindValue(':czyAdmin', $czyAdmin, PDO::PARAM_STR);
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->bindValue(':haslo', $haslo, PDO::PARAM_STR);
    $stmt->execute();
    

    header('Location: index.php?success=Zarejestrowano.');
} catch (PDOException $e) {
    header('Location: registerForm.php?' .
            'error=Błąd%20bazy%20danych.' . $e->getMessage());
}
