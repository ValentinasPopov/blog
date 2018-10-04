<?php
    include("src/header.php");
    include("classes/user.php");

    $classes_user = new User();

    if(isset($_POST['submit_login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $email = $_POST['email'];
        if(!empty($username) && !empty($password) && !empty($email))
        {
            $classes_user->login_user($username,$password,$email );
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

    if(!empty($_SESSION['username']))
    {
        header("location: index.php");
    }
    else
    {

?>
    
    <form action="" method="post">
        <label for="">Username</label>
        <div class="form-group">
            <input type="text" name="username" class="form-control">
        </div>
        <label for="">Password</label>
        <div class="form-group">
            <input type="password" name="password" class="form-control">
        </div>
        <label for="">Email</label>
        <div class="form-group">
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit_login" class="form-control">
        </div>
    </form>

<?php   
    }
 include("src/footer.php");