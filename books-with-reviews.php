<?php
require_once("util-db.php");
require_once("model-books-with-reviews.php");

$pageTitle = "Books with Reviews";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertReview($_POST['book_id'], $_POST['review'], $_POST['rating'], $_POST['review_date'])) {
                echo '<div class="alert alert-success" role="alert">Review added</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
        case "Edit":
            if (updateReview($_POST['review_id'], $_POST['book_id'], $_POST['review'], $_POST['rating'], $_POST['review_date'])) {
                echo '<div class="alert alert-success" role="alert">Review edited</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
        case "Delete":
            if (deleteReview($_POST['review_id'])) {
                echo '<div class="alert alert-success" role="alert">Review deleted</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error</div>';
            }
            break;
    }
}

$books = selectBooks(); // Assuming you have a function to select all books
include "view-books-with-reviews.php";
include "view-footer.php";
?>
