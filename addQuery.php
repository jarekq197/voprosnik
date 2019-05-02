<?php

require_once "connect.php";


$iduzytkownicy = $_SESSION['iduzytkownicy'];




$firstName = htmlentities($_POST['firstName']);
$lastName = htmlentities($_POST['lastName']);
$email = htmlentities($_POST['email']);
$nrtel = htmlentities($_POST['nrtel']);
$ulica = htmlentities($_POST['ulica']);
$dom = htmlentities($_POST['dom']);
$mieszkanie = htmlentities($_POST['mieszkanie']);
$miejscowosc = htmlentities($_POST['miejscowosc']);
$kod = htmlentities($_POST['kod']);

echo $kod;
echo $dom;
echo $firstName;
echo $dom;




try {




    $stmt = $pdo->prepare("insert into ankiety (imie, nazwisko, mail, nrtel, ulica, nrdomu, nrmieszkania, miejscowosc, kod, uzytkownicy_iduzytkownicy) " .
            "VALUES (:imie, :nazwisko, :mail, :nrtel, :ulica, :nrdomu, :nrmieszkania, :miejscowosc, :kod, :uzytkownicy_iduzytkownicy);");


    $stmt->bindValue(':imie', $firstName, PDO::PARAM_STR);
    $stmt->bindValue(':nazwisko', $lastName, PDO::PARAM_STR);
    $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
    $stmt->bindValue(':nrtel', $nrtel, PDO::PARAM_STR);
    $stmt->bindValue(':ulica', $ulica, PDO::PARAM_STR);
    $stmt->bindValue(':nrdomu', $dom, PDO::PARAM_STR);
    $stmt->bindValue(':nrmieszkania', $mieszkanie, PDO::PARAM_STR);
    $stmt->bindValue(':miejscowosc', $miejscowosc, PDO::PARAM_STR);
    $stmt->bindValue(':kod', $kod, PDO::PARAM_STR);
    $stmt->bindValue(':uzytkownicy_iduzytkownicy', $iduzytkownicy, PDO::PARAM_INT);
    


    $stmt->execute();

    header('Location: index.php?success=Dodano ankiete.');
} catch (PDOException $e) {
    echo $e->getMessage();
    header('Location: index.php?' .
    'error=Błąd%20bazy%20danych.'.
            'error=Błąd%20bazy%20danych.' . $e->getMessage());
}


