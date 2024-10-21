<?php
function selectAuthors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_id, author_name, author_birthdate, author_age FROM `author`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAuthors($aName, $aBirthdate, $aAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `author` (`author_name`,`author_birthdate`,`author_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $aName, $aBirthdate, $aAge);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAuthors($aName, $aBirthdate, $aAge, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `author` set `author_name`=?,`author_birthdate`=?,`author_age`=? where author_id=?");
        $stmt->bind_param("ssii", $aName, $aBirthdate, $aAge, $aid);
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
