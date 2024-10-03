<?php
function selectBooksByPublisher($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.publisher_id, publisher_name, location, title, book_series, publication_date FROM `publisher` P JOIN book B ON B.publisher_id=P.publisher_id WHERE B.publisher_id=?;");
        $stmt->bind_param("i", $pid);
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
