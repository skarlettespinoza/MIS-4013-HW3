<?php
function selectAuthors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_id, author_name, author_birthdate FROM `author`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAuthors($aName, $aBirthdate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `author` (`author_name`,`author_birthdate`) VALUES (?, ?)");
        $stmt->bind_param("ss", $aName, $aBirthdate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAuthors($aName, $aBirthdate, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `author` set `author_name`=?,`author_birthdate`=? where author_id=?");
        $stmt->bind_param("ssi", $aName, $aBirthdate, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAuthors($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from author where author_id=?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
