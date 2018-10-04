<?php

    include("src/header.php");  
    include('classes/blog.php');

    $class_blog = new blog();

    if(isset($_POST['submit_create']))
    {
        $image = $_FILES['image']['name'];
        $title = $_POST['Title'];
        $desc = $_POST['Desc'];
        $cont = $_POST['Cont'];
        $date = date("Y-m-d H:i:s");

        if(!empty($image) && !empty($title) && !empty($desc) && !empty($cont))
        {
            // image file directory
            $target = "images/".basename($image);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
            $class_blog->create_blog($title, $desc, $cont, $image, $date);
            header("location: index.php");
        }
        else
        {
            echo "nera ivesta";
        }
     
        
    }

?>

<form method="POST" action="" enctype="multipart/form-data">

    <div class="form-group">
        <input type="text" name="Title" class="form-control">
    </div>
    <div class="form-group">
        <textarea type="text" name="Desc" class="form-control">
        </textarea>
    </div>
    <div class="form-group">
        <input type="text" name="Cont" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image" class="fform-control-file">
    </div>
    <div class="form-group">
        <input type="submit" name="submit_create" class="form-control">
    </div>
</form>

<?php

 include("src/footer.php");