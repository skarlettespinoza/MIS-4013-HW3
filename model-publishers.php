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
?>
