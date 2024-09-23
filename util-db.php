<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis4014dbhw3.mysql.database.azure.com','mis4013', 'Seileen@1123', 'mis4013hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
