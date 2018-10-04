<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mano_project";

$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    class comment
    {
        function add_comment($id_comment, $id_member, $comment_username,$comment_date, $comment)
        {
            global $db;
            $stmt = $db->prepare("INSERT INTO blog_comment (id_comment, id_member, comment_username, comment_date, comment) VALUES (:id_comment, :id_member, :comment_username, :comment_date, :comment)");
            $stmt->execute(array(':id_comment' => $id_comment, ':id_member' => $id_member, ':comment_username'  => $comment_username, ':comment_date'  => $comment_date, ':comment'  => $comment));
        }
        
        function show_comment($id_comment)
        {
            global $db;
            $stmt = $db->prepare("SELECT * FROM blog_comment WHERE id_comment=:id_comment");
            $stmt->execute(array(':id_comment' => (int)$id_comment));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        function show_comment_id($id)
        {
            global $db;
            $stmt = $db->prepare("SELECT * FROM blog_comment WHERE id=:id");
            $stmt->execute(array(':id' => (int)$id));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function edit_comment($id, $comment)
        {
            global $db;
            //   UPDATE blog_posts SET postTitle = :postTitle, postDesc = :postDesc, postCont = :postCont WHERE postID = :id
            $stmt = $db->prepare("UPDATE blog_comment SET  comment = :comment WHERE id = :id" );
            $stmt->execute(array(':comment' => $comment, ':id' => $id));
            
        }

        function delete_comment($id)
        {
            global $db;
            $stmt = $db->prepare("DELETE FROM blog_comment WHERE id = :id");
            $stmt->execute(array(':id' => $id));
        }   

    }