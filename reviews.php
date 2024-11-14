<?php
require_once("util-db.php");
require_once("model-reviews.php");

$pageTitle="Reviews";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertReviews($_POST['bid'],$_POST['review'],$_POST['rating'],$_POST['review_date'])) {
        echo'<div class="alert alert-success" role="alert">Review added</div>';
      } else {
        echo'<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if(updateReviews($_POST['bid'],$_POST['review'],$_POST['rating'],$_POST['review_date'])) {
        echo'<div class="alert alert-success" role="alert">Review edited</div>';
      } else {
        echo'<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;    
    case "Delete":
      if(deleteReviews($_POST['rid'])) {
        echo'<div class="alert alert-success" role="alert">Review deleted</div>';
      } else {
        echo'<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;    
  }
}
$reviews = selectReviews();
include "view-reviews.php";
include "view-footer.php";
?>
