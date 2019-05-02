


<?php
require_once "connect.php";

if (empty($_SESSION['login'])) {
    header("Location: index.php?error=Musisz%20się%20zalogować.");
    exit();
}

$PAGE = "Dodaj Ankiete1";
require_once "parts/header.php";

$iduzytkownicy = $_SESSION['iduzytkownicy'];
?>

<div class="row">
    <div class="col-md-12">
        <form method="post" action="addQueryForm2.php">

         
            

            <div class="form-group">
                <label for="firstName">Podaj imię: </label>
                <input type="text" class="form-control" id="firstName" name="firstName"
                       placeholder="Imię" required>
            </div>
            
             <div class="form-group">
                <label for="lastName">Podaj nazwisko: </label>
                <input type="text" class="form-control" id="lastName" name="lastName"
                       placeholder="Nazwisko" required>
            </div>

            <div class="form-group">
                <label for="email">Podaj maila:</label>
                <input type="email" class="form-control" id="datado" name="email"
                       placeholder="Mail" required>
            </div>
            
            <div class="form-group">
                <label for="nrtel">Podaj numer telefonu: </label>
                <input type="text" class="form-control" id="dataod" name="nrtel"
                       placeholder="Telefon" required>
            </div>
            



            <button type="submit" class="btn btn-primary">Dalej</button>
        </form>
    </div>
</div>

<?php
require_once "parts/footeri.php"
?>
