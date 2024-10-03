<?php
require_once("util-db.php");
require_once("model-publishers.php");

$pageTitle="Publishers";
include "view-header.php";
$publishers = selectPublishers();
include "view-publishers.php";
include "view-footer.php";
?>
