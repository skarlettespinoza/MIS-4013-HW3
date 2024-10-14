<?php
function selectGenres() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre FROM `genre`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGenres($gGen) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `genre` (`genre`) VALUES (?);");
        $stmt->bind_param("s", $gGen);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGenres($gGen, $gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `genre` set genre = ? where genre_id = ?");
        $stmt->bind_param("si", $gGen, $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGenres($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from genre where genre_id=?");
        $stmt->bind_param("i", $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
