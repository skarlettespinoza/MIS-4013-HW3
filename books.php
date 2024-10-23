<?php
require_once("util-db.php");
require_once("model-books.php");

$pageTitle="Books";
include "view-header.php";
$books = selectBooks();
include "view-authors.php";
include "view-footer.php";
?>
