<?php
require_once("util-db.php");
require_once("model-books-by-genre.php");

$pageTitle="Books by Genre";
include "view-header.php";
$books = selectBooksByGenre($_POST['gid']);
include "view-books-by-genre.php";
include "view-footer.php";
?>
