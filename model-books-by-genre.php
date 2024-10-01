<?php
function selectBooksByGenre($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT G.genre_id, genre, title, publication_date FROM `genre` G JOIN book B ON B.genre_id=G.genre_id WHERE B.genre_id=?;");
        $stmt->bind_param("i", $gid);
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
