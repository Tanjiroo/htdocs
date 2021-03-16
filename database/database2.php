<?php
    define('host', 'localhost');
    define('username', 'root');
    define('password', '');
    define('db', 'webdatabase');


    $connection2 = mysqli_connect(host, username, password, db);







?>






<html>
    <head>
        <title>

            
        </title>
    </head>
    <body>


        <form action="database2.php" method="$_GET">
            <table>
                <tr>
                    <th>
                        Enter
                    </th>
                    <th>
                        <select name="selection" id="select.">
                            <option value=""></option>
                            <option value="firstname" >First Name</option>
                            <option value="nackname">Nack Name</option>
                            <option value="birthday">Birthday</option>
                            
                        </select>
                        <input type="submit" name="submit">
                       
                    </th>
                </tr>
                <tr>
                    <th>
                        Enter 1
                    </th>
                
                    <th> 
                        <input type="text" name="name"> 
                        
                                               
                    </th>
       
                    <th>

                    
                        <input type="submit" name="submit2">
                       
                    </th>
                </tr>





                <tr>
                    <th>
                        Eine Person einfügen
                    </th>
                </tr>
                <tr>
                    <th> 
                        <input type="text" name="addfirstname"> 
                    </th>


                </tr>
                <tr>
                    <th>
                        <input type="text" name="addnackname"> 
                    </th>
                </tr>
                <tr>
                    <th>
                        <input type="number" name="addbirthday">               
                    </th>
                
                </tr>
                <tr>
                    <th>

                    
                        <input type="submit" name="add">
                       
                    </th>
                </tr>
                
                <tr>
                    <th>
                        Eine Person Löschen
                    </th>
                </tr>
                <tr>
                    <th> 
                        <input type="text" name="removefirstname"> 
                    </th>


                </tr>
                <tr>
                    <th>
                        <input type="text" name="removenackname"> 
                    </th>
                </tr>
                <tr>
                    <th>
                        <input type="number" name="removebirthday">               
                    </th>
                
                </tr>
                <tr>
                    <th>

                    
                        <input type="submit" name="remove">
                       
                    </th>
                </tr>
            </table>
        </form>






        <table>   
        <?php
            if(!$connection2){
                echo "keine Verbindung";
            }
            else{
                $select_query = "select * from mypersons"; 
                //echo "verbunden";
                $sucht = mysqli_query($connection2, $select_query);
                if(!$sucht){
                    echo "Die Einstellungen wurde nicht laden, Bitte versuchen sie noch einmal.!!!";
        
                }
        
            }
        
            if(isset($_GET['submit'])){
                while($row = mysqli_fetch_assoc($sucht)){
                    if(!empty($_GET['selection'])){
                        echo $row[$_GET['selection']].'<br>';
                    }else{
                        echo " ";
                    }
                    
                }
            }

            //

        
        ?>
























<?php

    if(isset($_GET['submit2'])){
        $name = $_GET['name'];
        
        if(!$connection2){
            echo "keine Verbindung";
        }
        else{
            $select_query2 = "select * from mypersons where firstname = 'Najdat';"; 
            if(!empty($name)){
                $enter1 = str_replace("Najdat" , $name, $select_query2);
                
            }
            else{
                $enter1 = "select * from mypersons;";
            }
            //echo "verbunden";

            $sucht2 = mysqli_query($connection2, $enter1);
            if(!$sucht2){
                echo "Die Einstellungen wurde nicht laden, Bitte versuchen sie noch einmal.!!!";
    
            }

    
        }
        while($row = mysqli_fetch_assoc($sucht2)){
            echo "<table>
                    <tr>
                        <th>"
                            .$row['firstname'].
                        "</th>
                        <th>"
                          .$row['nackname'].
                        "</th>
                        <th>"
                            .$row['birthday'].
                        "</th>
                    
                    </tr>
            
                </table>";



        }
    }


        




            
    if(isset($_GET['add'])){
        $addfirstname = $_GET['addfirstname'];
        $addnackname = $_GET['addnackname'];
        $addbirthday = $_GET['addbirthday'];
        
        if(!$connection2){
            echo "keine Verbindung";
        }
        else{
            $add_query = "insert into mypersons (firstname, nackname, birthday) VALUES ('firstname1', 'nackname2', 1998);"; 
            if(!empty($addfirstname) and !empty($addnackname) and !empty($addbirthday)){
                $add = str_replace("firstname1" , $addfirstname, $add_query);
                $add1 = str_replace("nackname2" , $addnackname, $add);
                $add2 = str_replace("1998" , $addbirthday, $add1);
                //echo $add2;
                
            }else{
                $add2 =  $add_query;
            }

            //echo "verbunden";

            $sucht2 = mysqli_query($connection2, $add2);
            if(!$sucht2){
                echo "Die Einstellungen wurde nicht laden, Bitte versuchen sie noch einmal.!!!";
                
            }else{
                echo 'Du hast erfolgreich eine Person eingefügt';
            }

    
        }


 
        
    }

                
    if(isset($_GET['remove'])){
        $removefirstname = $_GET['removefirstname'];
        $removenackname = $_GET['removenackname'];
        $removebirthday = $_GET['removebirthday'];
        
        if(!$connection2){
            echo "keine Verbindung";
        }
        else{
            $remove_query = "DELETE FROM mypersons
            WHERE firstname='firstname1'
              AND nackname='nackname2' AND birthday = birthday3;"; 
            if(!empty($removefirstname) and !empty($removenackname) and !empty($removebirthday)){
                $remove_query = str_replace("firstname1" , $removefirstname, $remove_query);
                $remove_query = str_replace("nackname2" , $removenackname, $remove_query);
                $remove_query = str_replace("birthday3" , $removebirthday, $remove_query);
                //echo $add2;
                echo 'Du hast erfolgreich eine Person gelöcht';
                
            }
            //echo "verbunden";

            $sucht2 = mysqli_query($connection2, $remove_query);
            if(!$sucht2){
                echo "Die Einstellungen wurde nicht laden, Bitte versuchen sie noch einmal.!!!";
                
            }else{
                echo " ";
            }

    
        }


 
        
    }



            //

        
?>
            <tr>
                <th>
                </th>
            </tr>
        </table>



    </body>
</html>