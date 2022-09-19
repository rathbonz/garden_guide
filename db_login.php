<?php
  $host_name = 'db5009934199.hosting-data.io';
  $database = 'dbs8423210';
  $user_name = 'dbu531115';
  $password = 'Theduketroy12@';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }
?>