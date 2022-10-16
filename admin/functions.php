<?php
  function GetServices($clientID){

  global $connection;

  $query_client = "SELECT * FROM clients WHERE id=$clientID";
  
  $select_client_query = mysqli_query($connection, $query_client);

  if (!$select_client_query) die("QUERY FAILED! " . mysqli_error($connection));

  mysql_free_result($query_client);
/*
  while ($row = mysqli_fetch_array($select_client_query)) {
    $db_client_name = $row['name'];
    $db_client_name = $row['pass'];
    echo $db_client_name;
  }*/
/* if ($db_categories_id == $_COOKIE['categoria']) {}*/
}
?>