<?php
require_once("util-db.php");
require_once("model-authors-by-publisher.php");

$pageTitle="Authors by Publisher";
include "view-header.php";
$authors = selectAuthorsByPublisher($_POST['pid']);
include "view-authors-by-publisher.php";
include "view-footer.php";
?>
