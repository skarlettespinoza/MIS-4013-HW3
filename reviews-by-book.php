<?php
require_once("util-db.php");
require_once("model-reviews.php");

$pageTitle = "Reviews by Book";
include "view-header.php";

// Handle form actions
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertReview($_POST['book_id'], $_POST['review'], $_POST['rating'], $_POST['review_date'])) {
                echo '<div class="alert alert-success" role="alert">Review added</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error adding review</div>';
            }
            break;
        case "Edit":
            if (updateReview($_POST['review_id'], $_POST['book_id'], $_POST['review'], $_POST['rating'], $_POST['review_date'])) {
                echo '<div class="alert alert-success" role="alert">Review updated</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error updating review</div>';
            }
            break;
        case "Delete":
            if (deleteReview($_POST['review_id'])) {
                echo '<div class="alert alert-success" role="alert">Review deleted</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error deleting review</div>';
            }
            break;
    }
}

// Fetch data to display
$reviews = selectReviewsByBook(); // Function to fetch reviews grouped by books
include "view-reviews-by-book.php";
include "view-footer.php";
?>
