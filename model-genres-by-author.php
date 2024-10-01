<?php
function selectGenresByAuthor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT G.genre_id, genre, title, book_series, publication_date FROM `genre` G JOIN book B ON B.genre_id=G.genre_id WHERE B.author_id=?");
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
