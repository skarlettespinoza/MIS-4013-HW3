<?php
function selectPublishers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT publisher_id, publisher_name, location FROM `publisher`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPublishers($pName, $pLoc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `publisher` (`publisher_name, `location`) VALUES (?,?)");
        $stmt->bind_param("ss", $pName, $pLoc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePublishers($pName, $pLoc, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update`publisher` set `publisher_name=?, `location`=? where publisher_id=?");
        $stmt->bind_param("ssi", $pName, $pLoc, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePublishers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from publisher where publisher_id=?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
