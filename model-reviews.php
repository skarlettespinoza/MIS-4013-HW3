<?php
// Function to fetch all reviews from the database
function selectReviews() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT review_id, book_id, review, rating, review_date FROM review");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to fetch reviews by book ID
function selectReviewsByBook($book_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT review_id, review, rating, review_date FROM review WHERE book_id = ?");
        $stmt->bind_param("i", $book_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to fetch reviews for input purposes (like for a dropdown menu or a select box)
function selectReviewsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT review_id, review FROM review ORDER BY review_date DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to insert a new review into the database
function insertReviews($book_id, $review, $rating, $review_date) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO review (book_id, review, rating, review_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isds", $book_id, $review, $rating, $review_date);  // "d" is used for double type
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to update an existing review
function updateReviews($review_id, $book_id, $review, $rating, $review_date) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE review SET book_id = ?, review = ?, rating = ?, review_date = ? WHERE review_id = ?");
        $stmt->bind_param("isdsi", $book_id, $review, $rating, $review_date, $review_id);  // "d" for double and "i" for int
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to delete a review from the database
function deleteReviews($review_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM review WHERE review_id = ?");
        $stmt->bind_param("i", $review_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
