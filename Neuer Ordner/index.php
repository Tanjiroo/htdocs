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
                    echo '<h1>Welcome to Givo</h1>';
                }
                else{
                    echo "<h1>Sorry we coulden't connect you with Givo</h1>";
                }
            
            
            ?>
            <form action="index.php" method="GET">
            <table>
                <tr>

                    <th>
                        <input type="text" name="user_name" placeholder="User name" required>
                    </th>
                </tr>
                <!--
                <tr>
                    <th>
                        <input type="password" name="password" placeholder=" Password" required>
                    </th>
                </tr>
                -->
                <tr></tr>
                <tr>

                    <th style="text-align: center;">
                        <input type="submit" name="login" value="Login"  style="width:100%;"> 
                    </th>
                </tr>
                <tr>
                    <th style="font-size: 10px;">
                        <a href="register.php" style="text-decoration: none; color: black;">sign up</a>
                    </th>
                </tr>
            
            </table>
            
            
            

            </form>

        </div>
    </body>




</html>










<?php




if(isset($_GET['login'])){
    
    if(!$connected){
        echo "keine Verbindung";
    }else
    {
        $select_query = "select * from tokens where name = 'Givara';";
        $search1 = mysqli_query($connected, $select_query);



        
        while($row = mysqli_fetch_assoc($search1)){
            echo "<tr>
                    <th>"
                        .$row['name'].
                    "</th>
                    <th>"
                        .$row['password'].
                    "</th>
                </tr>";
        }
    }

}

?>

