<?php
    include("src/header.php");
    include("classes/blog.php");
    include("classes/user.php");

    $classes_blog = new blog();

    $blog = $classes_blog->show_blog();

    // if(isset($_SESSION['username']))
    // {
    //     echo $_SESSION['username'];
    //     echo $_SESSION['user_id'];
    // }
    // else
    // {
    //     echo "ok";
    // }

   
?>

<?php
   
    if(isset($_SESSION['roles']))
    {
        if($_SESSION['roles'] == "admin" )
        {
            if(isset($_GET['delete']))
            {
                $classes_blog->delete_blog($_GET['delete']);
                header("location: index.php");
            }
            if(isset($_GET['edit']))
            {
                $classes_blog->show_blog_by_id($_GET['edit']);
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="edit_postTitle" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="edit_postDesc" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="edit_postCont" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit_edit" class="form-control">
                    </div>
                </form>
                <?php 
                if(isset($_POST['submit_edit']))
                {
                    $edit_postTitle = $_POST['edit_postTitle'];
                    $edit_postDesc =  $_POST['edit_postDesc'];
                    $edit_postCont = $_POST['edit_postCont'];

                    if(!empty($edit_postTitle) && !empty($edit_postDesc) && !empty($edit_postCont))
                    {
                        $classes_blog->edit_blog($_GET['edit'], $edit_postTitle, $edit_postDesc, $edit_postCont);
                        header("location: index.php");
                    }
                    else
                    {
                       ?>
                        <div class="alert alert-info" role="alert">
                            <strong>Tusti Laukai.</strong> Prasom ivesti.
                        </div>
                       <?php
                    }

                } 
            }
            else
            {
                ?>   <div class="row"> <?php
                foreach($blog as $blogs)
                {
                    ?> 
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="images/<?php echo $blogs['postImage'];?>" data-holder-rendered="true" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;"> 
                                <div class="card-body">
                                <p class="card-text"><?php echo $blogs['postTitle'];?></a</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="viewpost.php?id=<?=$blogs['postID']; ?>"><?php echo $blogs['postTitle'];?></a></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="index.php?edit=<?=$blogs['postID']; ?>">Edit</a></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="index.php?delete=<?=$blogs['postID']; ?>" onclick="return confirm('Ar tikrai?')">Delete</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
           
                    <!-- <img src='images/<?php echo $blogs['postImage'];?>' width="250px" height="250px">
                    <li> <a href="viewpost.php?id=<?=$blogs['postID']; ?>"><?php echo $blogs['postTitle'];?></a>  </li>
                    <li> <a href="index.php?edit=<?=$blogs['postID']; ?>">Edit</a>   <?php echo $blogs['postID'];?></li> -->
                    <?php 
                //end foreach    
                }             
            }
        }
        ?></div><!--end .row--><?php        
    }
    else
    {
        ?><div class="row"> <?php
        foreach($blog as $blogs)
        {
            ?> 
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="images/<?php echo $blogs['postImage'];?>" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                        <p class="card-text"><?php echo $blogs['postTitle'];?></a</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="viewpost.php?id=<?=$blogs['postID']; ?>"><?php echo $blogs['postTitle'];?></a></button>
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- <img src='images/<?php echo $blogs['postImage'];?>' width="250px" height="250px">
            <li> <a href="viewpost.php?id=<?=$blogs['postID']; ?>"><?php echo $blogs['postTitle'];?></a>  </li> -->
            <?php
        //end foreach    
        }
        ?></div><!--end .row--><?php        
    }
   
    include("src/footer.php");