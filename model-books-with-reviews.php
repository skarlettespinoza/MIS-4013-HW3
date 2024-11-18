<?php
// Function to fetch all books from the database
function selectBooks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, title FROM book");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to insert a new review
function insertReview($book_id, $review, $rating, $review_date) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO review (book_id, review, rating, review_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isds", $book_id, $review, $rating, $review_date);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to update an existing review
function updateReview($review_id, $book_id, $review, $rating, $review_date) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE review SET book_id = ?, review = ?, rating = ?, review_date = ? WHERE review_id = ?");
        $stmt->bind_param("isdsi", $book_id, $review, $rating, $review_date, $review_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to delete a review
function deleteReview($review_id) {
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
?>
