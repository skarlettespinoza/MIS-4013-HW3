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
function selectGenresByAuthor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT G.genre_id, genre, title, book_series, publication_date, review B.book_id, B.author_id, B.publisher_id FROM genre G JOIN book B ON B.genre_id=G.genre_id WHERE B.author_id=?");
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

function selectAuthorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT author_id, author_name FROM `author` order by author_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectGenresForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre FROM `genre` order by genre");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPublishersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT publisher_id, publisher_name FROM `publisher` order by publisher_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBooks($iid, $gid, $pid, $title, $book_series, $publication_date, $review){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `book` (`author_id`, `genre_id`, `publisher_id`, `title`, `book_series`, `publication_date`, `review`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("iiissss", $iid, $gid, $pid, $title, $book_series, $publication_date, $review);  // Now binding review
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBooks($iid, $gid, $pid, $title, $book_series, $publication_date, $review, $bid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `book` set `author_id`=?, `genre_id`=?, `publisher_id`=?, `title`=?, `book_series`=?, `publication_date`=?, `review`=? where book_id=?");
        $stmt->bind_param("iiissssi", $iid, $gid, $pid, $title, $book_series, $publication_date, $review, $bid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
} 

function deleteBooks($bid){
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from book where book_id=?");
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
