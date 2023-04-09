<?php
  require('Database.php');

  $db = DataBase::Connect();
  $sql = "SELECT * FROM persons";

  $data = $db->query($sql, PDO::FETCH_ASSOC);
  foreach($data as $d){
    echo $d['FirstName']."<br>";
  }
?>