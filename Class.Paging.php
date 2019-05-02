<?php

class paginate
{
     private $db;
 
     function __construct($pdo)
     {
         $this->db = $pdo;
     }
 
     public function dataview($query)
     {
         $stmt = $this->db->prepare($query);
         $stmt->execute();
 
         if($stmt->rowCount()>0)
         {
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                   

echo "<tr><td>" . $row['login'] . "</td><td>" . $row['imie'] . "</td><td>" . $row['nazwisko'] . "</td><td>" . $row['mail'] . "</td><td>" . $row['nrtel'] . "</td><td>" . $row['ulica'] . "</td><td>" . $row['nrdomu'] . "</td><td>" . $row['nrmieszkania'] . "</td><td>" . $row['kod'] . "</td><td>" . $row['miejscowosc'] . "</td></tr>";

                 
                }
         }
         else
         {
                ?>
                <tr>
                <td>Nothing here...</td>
                </tr>
                <?php
         }
  
 }
 
 public function paging($query,$records_per_page)
 {
        $starting_position=0;
        if(isset($_GET["page_no"]))
        {
             $starting_position=($_GET["page_no"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
 }
 
 public function paginglink($query, $records_per_page, $sort)
 {
  
        $self = $_SERVER['PHP_SELF'];
  
        $stmt = $this->db->prepare($query);
        $stmt->execute();
  
        $total_no_of_records = $stmt->rowCount();
  
        if($total_no_of_records > 0)
        {
            ?><tr><td colspan="3"><?php
            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            $current_page=1;
            if(isset($_GET["page_no"]))
            {
               $current_page=$_GET["page_no"];
            }
            if($current_page!=1)
            {
               $previous =$current_page-1;
               echo "<a href='".$self."?page_no=1&sortowanie=".$sort."'>First</a>&nbsp;&nbsp;"; //właśnie tak zrób w pozostałych jakich pozostałych, przecież ilość numerków robi się dynamicznie???
               echo "<a href='".$self."?page_no=".$previous."&sortowanie=".$sort."'>Previous</a>&nbsp;&nbsp;";
            }
            for($i=1;$i<=$total_no_of_pages;$i++)
            {
            if($i==$current_page)
            {
                echo "<strong><a href='".$self."?page_no=".$i."&sortowanie=".$sort."' style='color:red;text-decoration:none'>".$i."</a></strong>&nbsp;&nbsp;";
            }
            else
            {
                echo "<a href='".$self."?page_no=".$i."&sortowanie=".$sort."'>".$i."</a>&nbsp;&nbsp;";
            }
   }
   if($current_page!=$total_no_of_pages)
   {
        $next=$current_page+1;
        echo "<a href='".$self."?page_no=".$next."'>Next</a>&nbsp;&nbsp;";
        echo "<a href='".$self."?page_no=".$total_no_of_pages."'>Last</a>&nbsp;&nbsp;";
   }
   ?></td></tr><?php
  }
 }
}



