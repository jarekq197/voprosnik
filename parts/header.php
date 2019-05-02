<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title><?= $PAGE ?></title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">


 
            <?php
            if (isset($_SESSION['login'])):
                ?>
              
                        <a class="text-center" href= logoutc.php>  <button type="button" class="btn btn-success btn-lg">Wyloguj się</button></a>
                        <a class="text-center" href= addQueryForm.php>  <button type="button" class="btn btn-danger btn-lg">Wypełnij ankietę</button></a>
                        
                   <?php
                   if ($_SESSION['czyAdmin']==1):
                       ?>
                        <a class="text-center" href= raport.php>  <button type="button" class="btn btn-danger btn-lg">Zobacz raporty</button></a>
                        <?php
                   endif;
                   ?>

              
                    
                <?php
            else:
                ?>
             
                        <a class="text-center" href= logincForm.php>  <button type="button" class="btn btn-warning btn-lg">Zaloguj się</button></a>
                        <a class="text-center" href= registerForm.php>  <button type="button" class="btn btn-danger btn-lg">Zrejestruj się</button></a>
                        
                        
                        
            <?php
            endif;
            ?>
</nav>
        
        
        
        
        

        
        
        

<div class="container">

    <?php
    if (isset($_GET['success'])):
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_GET['success'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    endif;
    ?>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }
    if (isset($error)):
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $error ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    endif;
    ?>
