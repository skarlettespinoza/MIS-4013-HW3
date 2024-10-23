<?php
require_once("util-db.php");
require_once("model-authors-with-genres.php");

$pageTitle="Authors with Genres";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertBooks($_POST['iid'],$_POST['gid'],$_POST['pid'],$_POST['title'],$_POST['book_series'],$_POST['publication_date'])) {
        echo'<div class="alert alert-success" role="alert">Book added</div>';
      } else {
        echo'<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
     case "Delete":
      if(deleteBooks($_POST['iid'],$_POST['gid'],$_POST['pid'],$_POST['title'],$_POST['book_series'],$_POST['publication_date'])) {
        echo'<div class="alert alert-success" role="alert">Book added</div>';
      } else {
        echo'<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;   
    case "Edit":
      if(updateBooks($_POST['bid'])) {
        echo'<div class="alert alert-success" role="alert">Book deleted</div>';
      } else {
        echo'<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;        
  }
}
$authors = selectAuthors();
include "view-authors-with-genres.php";
include "view-footer.php";
?>
