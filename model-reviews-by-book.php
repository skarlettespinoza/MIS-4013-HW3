<?php
function selectReviewsByBook($book_id) {
    try {
        $conn = get_db_connection();
        // Corrected parameter usage for book_id instead of rid
        $stmt = $conn->prepare("SELECT review_id, review, rating, review_date FROM `review` R JOIN book B ON B.book_id = R.book_id WHERE B.book_id = ?");
        $stmt->bind_param("i", $book_id);  // Binding book_id to the query
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        // Ensure the connection is closed if an exception occurs
        $conn->close();
        throw $e;
    }
}
?>
