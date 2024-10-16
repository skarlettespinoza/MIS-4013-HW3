<?php
function selectBooks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, title, book_series, publication_date FROM `book`");
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
