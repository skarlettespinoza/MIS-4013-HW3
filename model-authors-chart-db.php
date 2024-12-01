<?php
function selectAuthors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_name, count(b.book_id) as num_books FROM `author` a join book b on b.author_id=a.author_id group by author_name");
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
