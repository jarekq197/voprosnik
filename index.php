<?php
require_once "connect.php";
$PAGE = "Strona główna";
require_once "parts/header.php";







?>


<div class="card">
    
    
     <?php
            if (isset($_SESSION['login'])):
                ?>
              
                        <a class="text-center" href= logoutc.php>  <button type="button" class="btn btn-success btn-lg">Wyloguj się</button></a>
                        <a class="text-center" href= addQueryForm.php>  <button type="button" class="btn btn-danger btn-lg">Wypełnij ankietę</button></a>
                        
                <?php
            else:
                ?>
             
                        <a class="text-center" href= logincForm.php>  <button type="button" class="btn btn-warning btn-lg">Zaloguj się</button></a>
                        <a class="text-center" href= registerForm.php>  <button type="button" class="btn btn-danger btn-lg">Zrejestruj się</button></a>
                        
                        
                        
            <?php
            endif;
            ?>
    
    
    
   

</div>

<?php
require_once "parts/footeri.php"
?>
