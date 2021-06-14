<?php
include 'selectdb.php';
      $sql="select * from worldcup2k19 where teams='India'";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     echo $row['Teams'];
     echo $row['Matches']; 
      echo $row['Won']; 
      echo $row['Lost']; 
      echo $row['Tied']; 
      echo $row['No Result']; 
      echo $row['Points']; 
      echo $row['NRR']; 
     ?>