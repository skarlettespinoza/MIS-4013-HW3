<?php
function selectBooks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, author_id, genre_id, title, book_series, publication_date FROM `book`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPublishersByBook($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.publisher_id, publisher_name, book_id, author_id, genre_id, title, book_series, publication_date FROM `publisher` P JOIN book B ON B.publisher_id=P.publisher_id WHERE B.author_id=?");
        $stmt->bind_param("i", $iid);
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
