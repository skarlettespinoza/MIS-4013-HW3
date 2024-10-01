<?php
require_once("util-db.php");
require_once("model-authors-with-genres.php");

$pageTitle="Authors with Genres";
include "view-header.php";
$authors = selectAuthors();
include "view-authors-with-genres.php";
include "view-footer.php";
?>
