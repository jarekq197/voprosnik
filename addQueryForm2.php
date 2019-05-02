


<?php
require_once "connect.php";

if (empty($_SESSION['login'])) {
    header("Location: index.php?error=Musisz%20się%20zalogować.");
    exit();
}

$PAGE = "Dodaj Ankiete2";
require_once "parts/header.php";

$iduzytkownicy = $_SESSION['iduzytkownicy'];


$firstName = htmlentities($_POST['firstName']);
$lastName = htmlentities($_POST['lastName']);
$email = htmlentities($_POST['email']);
$nrtel = htmlentities($_POST['nrtel']);

echo $firstName." ".$lastName;
?>


<div class="row">
    <div class="col-md-12">
        <form method="post" action="addQuery.php">

     

            <div class="form-group">
                <input type="hidden" class="form-control" id="firstName" name="firstName"
                       value = '<?= $firstName ?>' >
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" id="lastName" name="lastName"
                       value = '<?= $lastName ?>'>
            </div>
         

            <div class="form-group">
                <input type="hidden" class="form-control" id="email" name="email"
                       value = '<?= $email ?>'>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="nrtel" name="nrtel"
                       value = '<?= $nrtel ?>'>
            </div>


      
            
            
            
            
             <div class="form-group">
                <label for="ulica">Ulica: </label>
                <input type="text" class="form-control" id="ulica" name="ulica"
                       placeholder="Ulica" required>
            </div>
            
             <div class="form-group">
                <label for="dom">Nr domu: </label>
                <input type="text" class="form-control" id="dom" name="dom"
                       placeholder="Nr domu" required>
            </div>
            
             <div class="form-group">
                <label for="mieszkanie">Nr mieszkania: </label>
                <input type="text" class="form-control" id="mieszkanie" name="mieszkanie"
                       placeholder="Nr mieszkania" >
            </div>
            
             <div class="form-group">
                <label for="miejscowosc">Miejscowość: </label>
                <input type="text" class="form-control" id="miejscowosc" name="miejscowosc"
                       placeholder="Miejscowość" required>
            </div>
            
             <div class="form-group">
                <label for="kod">Kod pocztowy: </label>
                <input type="text" class="form-control" id="kod" name="kod"
                       placeholder="Kod pocztowy" required>
            </div>




            <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </form>
    </div>
</div>

            <?php
            require_once "parts/footeri.php";
            ?>
