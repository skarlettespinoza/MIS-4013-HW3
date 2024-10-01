<?php
require_once("util-db.php");
require_once("model-authors.php");

$pageTitle="Authors";
include "view-header.php";
$instructors = selectAuthors();
include "view-authors.php";
include "view-footer.php";
?>
