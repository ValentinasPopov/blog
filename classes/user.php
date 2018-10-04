
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mano_project";

$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    class user
    {
        function register_user($username, $password, $email)
        {
            global $db;
            $stmt = $db->prepare("INSERT INTO blog_members(username,password, email) VALUES (:username, :password, :email) ");
            $stmt->execute(array(':username' => $username, ':password' => $password, ':email' => $email));
            
        }

        function exist_register_user($username, $email)
        {
            global $db;
            $stmt = $db->prepare("SELECT username, email FROM blog_members WHERE username = :username AND email = :email");
            $stmt->execute(array(':username' => $username, ':email' => $email));
            if($stmt->rowCount() > 0)
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        function login_user($username, $password, $email)
        {
        
            global $db;
            $stmt = $db->prepare("SELECT memberID, roles, username,password, email FROM blog_members WHERE username =:username AND password =:password AND email = :email");
            $stmt->execute(array(':username' => $username, ':password' => $password, ':email' => $email));
            $results = $stmt->fetch();
           // $password_hash = substr($results['password'], 0, 60);
            
            // if(password_verify($password, $password_hash))
            // {
            //     echo "s";
            // }
            // else
            // {
            //     echo "suka";
            //     echo $password_hash;
            // }
            if($stmt->rowCount() > 0)
            { 
                $_SESSION['user_id'] = $results['memberID'];
                $_SESSION['roles'] = $results['roles'];
                $_SESSION['username'] = $results['username'];
                $_SESSION['email'] = $results['email'];
                return true;
            }
            else
            {
                return false;
            }
        }
    }