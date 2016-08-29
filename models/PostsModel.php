<?php
class PostsModel extends HomeModel
{

    public function getAllPosts()
    {
        $statement = self::$db->query(
            "SELECT posts.post_id,title,content,date,full_name,user_id " .
            "FROM posts LEFT JOIN users ON posts.user_id = users.id " .
            "order BY date DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    public function create ($title, $content, $user_id)
    {
        $statement = self::$db->prepare(
            "INSERT into posts(title, content, user_id) VALUES (?, ?, ?)");
        $statement->bind_param("ssi", $title, $content, $user_id);
        $statement->execute();
        return $statement->affected_rows==1;

    }
}