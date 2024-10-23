<?php
function selectBooks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.book_id, b.title, b.book_series, b.publication_date FROM book ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBooks($bTitle, $bSeries, $bPubDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `book` (`title`, `book_series`, `publication_date`) VALUES (?,?,?) ");
        $stmt->bind_param("sss", $bTitle, $bSeries, $bPubDate);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBooks($bTitle, $bSeries, $bPubDate, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `book` set `title`=?, `book_series`=?, `publication_date`=? where book_id=? ");
        $stmt->bind_param("sssi", $bTitle, $bSeries, $bPubDate $bid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBooks($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from book where book_id=? ");
        $stmt->bind_param("i", $bid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
