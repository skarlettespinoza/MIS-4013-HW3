<?php
require_once("util-db.php");
require_once("model-genres-by-author.php");

$pageTitle="Genres by Author";
include "view-header.php";
$genres = selectGenresByAuthor($_GET['id']);
include "view-genres-by-author.php";
include "view-footer.php";
?>
