<?php
require_once("util-db.php");
require_once("model-reviews-by-book.php");

$pageTitle="Reviews by Book";
$pageTitle = "Reviews by Book";
include "view-header.php";
$reviews = selectReviewsByBook($_GET['rid']);
// Corrected the parameter to use $_GET['id'] instead of $_GET['rid']
$reviews = selectReviewsByBook($_GET['id']);
include "view-reviews-by-book.php";
include "view-footer.php";
?>
