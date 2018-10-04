<?php
    include("src/header.php");

    $username = $_SESSION['username'];
    $roles = $_SESSION['roles'];
    $email = $_SESSION['email'];

    if(isset($_SESSION['user_id']) == "")
    {
        header("location: index.php");
    }
    else
    {
      
?>
    
    <h1>Username: <?php echo $username;?></h1>
    <h1>Roles: <?php echo $roles;?></h1>
    <h1>Email: <?php echo $email;?></h1>

<?php
  
    }
 include("src/footer.php");