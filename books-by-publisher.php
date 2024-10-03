<?php
require_once("util-db.php");
require_once("model-books-by-publisher.php");

$pageTitle="Books by Publisher";
include "view-header.php";
$books = selectBooksByPublisher($_POST['pid']);
include "view-books-by-publisher.php";
include "view-footer.php";
?>
