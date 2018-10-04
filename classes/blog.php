
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mano_project";

    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    class Blog
    {
        
        function create_blog($postTitle, $postDesc, $postCont, $postImage, $postDate)
        {
            global $db;
            $stmt = $db->prepare("INSERT INTO blog_posts (postTitle,postDesc,postCont, postImage, postDate) VALUES (:postTitle,:postDesc,:postCont, :postImage, :postDate)");
            $stmt->execute(array('postTitle' => $postTitle, 'postDesc' => $postDesc, 'postCont' => $postCont, 'postImage' => $postImage, ':postDate'=> $postDate));
        }

        function show_blog()
        {
            global $db;
            $stmt = $db->query("SELECT * FROM blog_posts");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function show_blog_by_id($id)
        {
            global $db;
            $stmt = $db->prepare("SELECT * FROM blog_posts WHERE postID = :id");
            $stmt->execute(array(':id' => (int)$id));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        function edit_blog($id, $postTitle, $postDesc, $postCont)
        {
            global $db;
            $stmt = $db->prepare("UPDATE blog_posts SET postTitle = :postTitle, postDesc = :postDesc, postCont = :postCont WHERE postID = :id");
            $stmt->execute(array(':id' => (int)$id, ':postTitle' => $postTitle, ':postDesc' => $postDesc, ':postCont' => $postCont));
        }

        function delete_blog($id)
        {
            global $db;
            $stmt = $db->prepare("DELETE FROM blog_posts WHERE postID = :id");
            $stmt->execute(array(':id' => (int)$id));
        }

        function search_blog($postTitle)
        {
            global $db;
            $stmt = $db->prepare("SELECT * FROM blog_posts WHERE postTitle LIKE :postTitle");
            $stmt->execute(array(':postTitle' => $postTitle));
            if(!$stmt->rowCount() > 0)
            {
                echo "grybas";
                return false;
            }
            $result =  $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }

    }
    