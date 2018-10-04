<?php
    include("src/header.php");

    include("classes/blog.php");
    include("classes/user.php");
    include("classes/comment.php");

    $classes_blog = new blog();
    $classes_comment = new comment();

    $id = $_GET['id'];

    // Jei id nera, perkelia i index.php
    if(isset($_GET['id']) == "")
    {
        header("location: index.php");
    }
    else
    {
        // Blog'as rodomas pagal $_GET['id']
        $blog = $classes_blog->show_blog_by_id($id);
        foreach($blog as $blogs)
        {
            $id_blog = $blogs['postID'];
          
            ?>

            <img src='images/<?php echo $blogs['postImage'];?>' width="1000px" height="250px">
            <h1 class="text-center"><?php echo $blogs['postTitle'];?></h1>
            <hr>
            <div class="row">
            <div class="col-md-12">
            <h2 class="text-center"><?php echo $blogs['postDesc'];?></h2>

            </div>
            </div>
            

           <?php

        // end foreach
        }

        if(isset($_GET['delete']))
        {
            $classes_comment->delete_comment($_GET['delete']);
            header("location: viewpost.php?id=$id");
        }
              
        //if update comments
        if(isset($_GET['edit']))
        {
            $classes_comment->show_comment_id($_GET['edit']);
            ?>
            <form action="" method="post">
                <input type="text" name="comment">
                <input type="submit" name="submit_comment_edit">
            </form>
            <?php 
            if(isset($_POST['submit_comment_edit']))
            {
                $classes_comment->edit_comment($_GET['edit'], $_POST['comment']);
                header("location: viewpost.php?id=$id");
            
            // end if
            } 
        // end if
        }
        // else update comments
        else
        {
            //komentarai rodomi pagal postID ir ismeta tik to postID komentarus.
            $comment = $classes_comment->show_comment($id_blog);
            foreach($comment as $comments)
            {
                $comment_id = $comments['id_comment'];
                $comment_id_member = $comments['id_member'];
                if(isset($_SESSION['user_id']) == $comment_id_member || isset($_SESSION['roles']) == "admin")
                {
                ?>
                    <li><a href="viewpost.php?id=<?php echo $id;?>&edit=<?php echo $comments['id'];?>">Edit</a> <a name="submit_delete" href="viewpost.php?id=<?php echo $id;?>&delete=<?php echo $comments['id'];?>" onclick="return confirm('Ar tikrai?')">Delete</a> </li>
                <?php
                   
                }
                ?>
                <p><?php echo $comments['comment_username'];?> <?php echo $comments['comment'];?> </p>
                <p></p>
                <?php   
        

            // end foreach             
            }

         
        if(isset($_POST['submit_comment']))
        {
            $id_comment = $id_blog;
            $id_member = $_SESSION['user_id'];
            $comment_date = "";
            $comment_username = $_SESSION['username'] ?? '';
            $comment = $_POST['comment'] ?? '';    

            if(empty($_POST['comment']))
            {
                echo "Tuscias komentarai.";
            // end if
            }
            else
            {
                $classes_comment->add_comment($id_comment, $id_member, $comment_username, $comment_date, $comment);
                header("location: viewpost.php?id=$id");
                
            // end else    
            }
        // end if
        }

        if(isset($_SESSION['username']) == '')
        {
            ?>
            

            <div class="alert alert-info" role="alert">
                <strong>Tau reikia prisijungti, kad pakomentuoti.</strong> <a href="login.php">login</a>
            </div>
            <?php

        // end if
        }
        else
        {
        ?>            
       
        <form action="" method="post">
            <p>Comment</p>
            <input type="text" name="comment">
            <input type="submit" name="submit_comment">
        </form>
        <?php
        //end else
        }
        // end else (isset($_GET['edit'])    
        }
    //end else
    }


    include("src/footer.php");
?>
