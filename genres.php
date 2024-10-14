<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle="Genres";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertGenres($_POST['gGen'])){
        echo '<div class="alert alert-success" role="alert">Genre added</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$genres = selectGenres();
include "view-genres.php";
include "view-footer.php";
?>
