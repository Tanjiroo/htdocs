<?php include 'dbConnection.php' ?>

<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style.css">



    </head>
    <body>
        <div id="body-content">
        
        
        
            <?php
                if($connected){
                    echo '<h1>Register</h1>';
                }
                else{
                    echo "<h1>Sorry we coulden't connect you with Givo</h1>";
                }
            
            
            ?>
            <form action="register.php" method="POST">
            <table>
                <tr>

                    <th>
                        <input type="text" name="user_name" placeholder="User name" required>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input type="password" name="password" placeholder=" Password" required>
                    </th>
                </tr>
                <tr></tr>
                <tr>

                    <th style="text-align: center;">
                        <input type="submit" name="signup" value="sign up"  style="width:100%;"> 
                    </th>
                </tr>

            
            </table>
            
            
            

            </form>

        </div>
    </body>




</html>










<?php

$username=$_POST['user_name'];
$pasword = $_POST['password'];

if(isset($_POST['signup'])){

    
        
        $check_if_name_exist = "select * from users where name = 'Givara'";
        $select_query = mysqli_query($connected, $check_if_name_exist);
        if(mysqli_num_rows($select_query)>0){
            $name_error = "Sorry the name is already exist!";

        }else{
            $query = "insert into users(name, password) values('$username','$pasword')";
            $results = mysqli_query($connected, $query);
            echo "saved";
            exit();
        }
    

}

?>

