<?php
require_once("util-db.php");
require_once("model-reviews-by-book.php");

$pageTitle="Reviews by Book";
include "view-header.php";
$reviews = selectReviewsByBook($_GET['rid']);
include "view-reviews-by-book.php";
include "view-footer.php";
?>
