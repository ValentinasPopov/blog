<?php
        include("src/header.php");

   
        include("classes/user.php");

        $classes_user = new User();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password']  ?? '';
        $email = $_POST['email']  ?? '';

        if(isset($_POST['submit_register']))
        {
            if(empty($username) || empty($password) || empty($password))
            {
                echo "neivedei";
            }
            else
            {
                if($classes_user->exist_register_user($username, $email))
                {
                    //$hashed_password = password_hash($password, PASSWORD_BCRYPT );
                    $classes_user->register_user($username, $password, $email);
                }
                else
                {
                    echo "Yra toks uzregistruotas username/email";
                }
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
        <label for="">email</label>
        <div class="form-group">
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit_register" class="form-control">
        </div>
    </form>

<?php
    }
 include("src/footer.php");
