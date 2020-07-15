<?php
  $link;

  function db_open()
  {
    global $link;
    $servername = "sql210.epizy.com";
    $username = "epiz_24299174";
    $password = "QNqHy27cbhT";
    $db = "epiz_24299174_member";

    // Create connection
    $link = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  function db_close()
  {
    mysqli_close($link);
  }

?>
