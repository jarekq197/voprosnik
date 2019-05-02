


<?php

require_once "connect.php";

if (empty($_SESSION['login'])) {
    header("Location: index.php?error=Musisz%20się%20zalogować.");
    exit();
}

$PAGE = "Moje raporty";
require_once "parts/header.php";

$iduzytkownicy = $_SESSION['iduzytkownicy'];




$sql = "select a.*, u.login as 'login' from ankiety a "
        . "inner join uzytkownicy u on a.uzytkownicy_iduzytkownicy = u.iduzytkownicy ";



?>


<?php

if(isset($_GET['sortowanie'])){
$selected_val = $_GET['sortowanie']; 


switch ($selected_val) 
{
case 1:
    
  break;

case 2:
  $sql .= "order by u.login asc, a.nazwisko asc ";
  break;

case 3:
  $sql .= "order by u.login desc, a.nazwisko asc";
  break;

case 4:
  $sql .= "order by a.nazwisko asc";
  break;

case 5:
  $sql .= " order by a.nazwisko desc ";
  break;
case 6:
  $sql .= "order by a.miejscowosc asc ";
  break;
case 7:
  $sql .= "order by a.miejscowosc desc ";
  break;


default:
  break;
}

} else{ $selected_val = 1;}



$result = $pdo->query($sql);




$records_per_page=10;
        $newquery = $paginate->paging($sql,$records_per_page);
        
        $paginate->paginglink($sql,$records_per_page, $selected_val);  

echo "<table id='dtBasicExample' class='table table-striped table-bordered table-sm' cellspacing='0' width='100%'>";
echo "<table class='bg-success table'>";
echo "<thead><tr><th class='th-sm'>login</th><th>imie</th><th>nazwisko</th><th>email</th><th>telefon</th><th>ulica</th><th>nr domu</th><th>nr mieszkania</th><th>kod pocztowy</th><th>miejscowość</th></tr></thead>";

$tab = $result->fetchAll();
/***********************************/
// wyświetlenie wyników
$paginate->dataview($newquery);
/***********************************/
    
    
 echo "<tfoot><tr><th class='th-sm'>login</th><th>imie</th><th>nazwisko</th><th>email</th><th>telefon</th><th>ulica</th><th>nr domu</th><th>nr mieszkania</th><th>kod pocztowy</th><th>miejscowość</th></tr></tfoot>";
    
echo "</table>";

        $paginate->paginglink($sql, $records_per_page, $selected_val);  
?>


<form action="#" method="get">
<select name="sortowanie">
<option value="1">-------------</option>
<option value="2" <?=($selected_val == 2? 'selected':'')?>>Po loginie rosnąco</option>
<option value="3" <?=($selected_val == 3? 'selected':'')?>>Po loginie malejąco</option>
<option value="4" <?=($selected_val == 4? 'selected':'')?>>Po nazwisku rosnąco</option>
<option value="5" <?=($selected_val == 5? 'selected':'')?>>Po nazwisku malejąco</option>
<option value="6" <?=($selected_val == 6? 'selected':'')?>>po miejscowości rosnąco</option>
<option value="7" <?=($selected_val == 7? 'selected':'')?>>po miejscowości malejąco</option>
</select>
<input type="submit" name="submit" value="Sortuj" />
</form>

    







<?php

require_once "parts/footeri.php";
?>