<?php

class LoginSystem
{
    public static function sign(string $login, string $password, string $password_confirm)
    {
        $mysqli = LoginSystem::db_connect('webtech_lab_5');

        $queries['select_all_users'] = "SELECT * FROM `users`";
        $queries['insert_new_user'] = "INSERT INTO `users` (`i`, `login`, `password`) VALUES (NULL, '$login', SHA1('$password'))";
        
        if ($select_all_users_result = $mysqli->query($queries['select_all_users']))
        {         
            $user_already_exists = false;
            
            while ($table_row = $select_all_users_result->fetch_assoc())
            {                                  
                if ($table_row['login'] == $login)
                {
                    if ($table_row['password'] == sha1($password))
                    {
                        print("You have successfully signed in!");                    
                    }
                    else
                    {
                        print("You have entered incorrect password!");
                    }

                    $user_already_exists = true;

                    break;
                }
            }        
            $select_all_users_result->free();

            if (!$user_already_exists)
            {
                print("Received a request to add a new user.<br>");

                if ((strlen($password_confirm) < 3) || (strlen($password_confirm) > 64))
                {
                    die("The length of the confirmed password must be at least 3 characters, at most 64 characters!");
                }

                if ($password != $password_confirm)
                {
                    die("Entered passwords do not match!");
                }            
                
                $mysqli->query($queries['insert_new_user']);

                print("A new user was successfully added to the DB!");            
            }
        }

        $mysqli->close();
    }
    
    private static function db_connect(string $db_name)
    {
        define('MYSQL_SERVER', 'localhost');
        define('MYSQL_USER', 'root');
        define('MYSQL_PASSWORD', 'qwertyuiop');
        define('MYSQL_DB', $db_name);

        $mysqli = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);       

        $mysqli->query("SET CHARACTER SET 'UTF8'");
        $mysqli->query("SET NAMES 'UTF8'");

        if ($mysqli->connect_errno)
        {
            die("Connection error: " . $mysqli->connect_errno);
        }

        return $mysqli;
    }
}

?>