<?php

class HomeModel extends BaseModel
{
    function getLatestPosts (int $postCount) {
        $statement = self::$db->query(
            "SELECT posts.post_id,title,content,date,full_name,user_id " .
            "FROM posts LEFT JOIN users ON posts.user_id = users.id " .
            "order BY date DESC LIMIT " . $postCount);
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    function getPost (int $id) {
    $statement = self::$db->prepare(
        "SELECT posts.post_id, title, content, date, full_name,user_id " .
        "FROM posts LEFT JOIN users ON posts.user_id = users.id " .
        "WHERE posts.post_id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }
}
