<?php
require_once("util-db.php");
require_once("model-authors.php");

$pageTitle="Authors";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      insertAuthors($_POST['aName'],$_POST['aBirthdate'],$_POST['aAge']);
      break;
    
  }
}
$authors = selectAuthors();
include "view-authors.php";
include "view-footer.php";
?>
