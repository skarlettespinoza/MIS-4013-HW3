<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle="Genres";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      insertGenres($_POST['gGen'];
      break;
  }
}

$genres = selectGenres();
include "view-genres.php";
include "view-footer.php";
?>
