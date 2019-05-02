<?php
require_once "connect.php";

if (isset($_SESSION['login'])) {
    header("Location: index.php?error=Musisz%20się%20wylogować.");
    exit();
}

$PAGE = "Logowanie";
require_once "parts/header.php";
?>

<?php
if (!isset($_SESSION['login'])) {
?>
<div class="row">
    <div class="col-md-12">
        <form method="post" action="loginc.php">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login"
                       name="login" placeholder="Login" required>
            </div>
            <div class="form-group">
                <label for="pass">Hasło</label>
                <input type="password" class="form-control" id="password"
                       name="password" placeholder="Hasło" required>
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj</button>
        </form>
    </div>
</div>
<?php
}
?>

<?php
require_once "parts/footeri.php"
?>
