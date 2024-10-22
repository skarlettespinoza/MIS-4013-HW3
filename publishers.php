<?php
require_once("util-db.php");
require_once("model-publishers.php");

$pageTitle="Publishers";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      insertPublishers($_POST['pName'],$_POST['pLoc']);
      break;
  }
}
$publishers = selectPublishers();
include "view-publishers.php";
include "view-footer.php";
?>
