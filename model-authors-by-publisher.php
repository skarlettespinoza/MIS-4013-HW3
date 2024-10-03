// <?php
// function selectAuthorsByPublisher($pid) {
//     try {
//         $conn = get_db_connection();
//         $stmt = $conn->prepare("SELECT P.publisher_id, P.publisher_name, location, author_name FROM `publisher` P JOIN book B ON B.genre_id=G.genre_id WHERE B.genre_id=?;");
//         $stmt->bind_param("i", $gid);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $conn->close();
//         return $result;
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;
//     }
// }
// ?>
