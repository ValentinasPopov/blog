<?php
  include("src/header.php");
  include("classes/blog.php");

  $classes_blog = new Blog();

  $postTitle = $_GET['postTitle'];

    $results = $classes_blog->search_blog($postTitle);
    //echo $postTitle;

    if($results)
    {
        ?>
        <div class="row">
        <?php
        foreach($results as $result)
        {

        ?>
          <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="images/<?php echo $result->postImage;?>" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                        <p class="card-text"><?php echo $result->postTitle;?></a</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="viewpost.php?id=<?php echo $result->postID;?>"><?php echo $result->postTitle;?></a></button>
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        //end foreach    
        }
        ?></div><!--end .row--><?php        
    }


    include("src/footer.php");
?>
