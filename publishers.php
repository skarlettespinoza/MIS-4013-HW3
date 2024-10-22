<?php
require_once("util-db.php");
require_once("model-publishers.php");

$pageTitle="Publishers";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      if(insertPublishers($_POST['pName'],$_POST['pLoc'])){
        echo '<div class="alert alert-success" role="alert">Publisher added</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if(deletePublishers($_POST['pid'])){
        echo '<div class="alert alert-success" role="alert">Publisher deleted</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}
$publishers = selectPublishers();
include "view-publishers.php";
include "view-footer.php";
?>
