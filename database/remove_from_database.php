<?php include "../index/header.php"?>
<?php include "connection.php"?>
<LINK rel="stylesheet" href="database3.css">



<div class="db-div">
<form action="remove_from_database.php" methed="GET">
    <table>
        <h1>Remove a Person</h1>
        <tr>
            <th>
                First Name
            </th>
            <th> 
                <input type="text" name="removefirstname" required> 
            </th>


        </tr>
        <tr>
            <th>
                Nick Name
            </th>
            <th>
                <input type="text" name="removenickname" required> 
            </th>
        </tr>
        <tr>
            <th>
                Birthday
            </th>
            <th>
                <input type="number" name="removebirthday" required>               
            </th>
        </tr>
        <tr>
            <th>

            </th>
            <th>
                <input type="submit" name="remove" value="remove a person">
                
            </th>
        </tr>

    </table>


    <?php

        if(isset($_GET['remove'])){
            $removefirstname = $_GET['removefirstname'];
            $removenickname = $_GET['removenickname'];
            $removebirthday = $_GET['removebirthday'];
            
            if(!$con){
                echo "keine Verbindung";
            }
            else{
                $remove_query = "DELETE FROM mypersons
                WHERE firstname='firstname1'
                AND nackname='nackname2' AND birthday = birthday3;"; 
                if(!empty($removefirstname) and !empty($removenickname) and !empty($removebirthday)){
                    $remove_query = str_replace("firstname1" , $removefirstname, $remove_query);
                    $remove_query = str_replace("nackname2" , $removenickname, $remove_query);
                    $remove_query = str_replace("birthday3" , $removebirthday, $remove_query);
                    //echo $add2;
                    echo 'Du hast erfolgreich eine Person gelöcht';
                    
                }
                //echo "verbunden";

                $sucht = mysqli_query($con, $remove_query);
                if(!$sucht){
                    echo "The person is not removed, Bitte versuchen sie noch einmal.!!!";
                    
                }else{
                    echo "<table>
                            <tr>
                                <th>"
                                    .$removefirstname.
                                "</th>
                                <th>"
                                    .$removenickname.
                                "</th>
                                <th>"
                                    .$removebirthday.
                                "</th>
                    
                            </tr>
                            <h3>This person is removed</h3>
                        </table>";
                            
                    
                    
                }
        
            }


    
            
        }



    ?>

</form>

</div>

<?php include "../index/footer.php"?>













































