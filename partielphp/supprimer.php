<?php

  $servname = "localhost"; $dbname = "partielphp"; $user = "root"; $pass = "root";
  
  try{
      $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
      $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = "DELETE FROM partielphp WHERE nom='Theo'";
      $sth = $dbco->prepare($sql);
      $sth->execute();
      
      $count = $sth->rowCount();
      print('Effacement de ' .$count. ' entrées.');
  }
        
  catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
  }
?>