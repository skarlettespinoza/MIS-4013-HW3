<?php
function selectSectionsByCourse($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT C.course_id, course_number, course_description, semester, room, day_time FROM `course` C JOIN section S ON S.course_id=C.course_id WHERE S.course_id=?;");
        $stmt->bind_param("i", $cid);
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
