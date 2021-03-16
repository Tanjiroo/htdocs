<?php include "../index/header.php"?>
<?php include "connection.php"?>
<LINK rel="stylesheet" href="database3.css">



<div class="db-div">
<form action="add_in_database.php" methed="GET">
    <table>
        <h1>Insert a Person</h1>
        <tr>
            <th>
                First Name
            </th>
            <th> 
                <input type="text" name="addfirstname" required> 
            </th>


        </tr>
        <tr>
            <th>
                Nick Name
            </th>
            <th>
                <input type="text" name="addnickname" required> 
            </th>
        </tr>
        <tr>
            <th>
                Birthday
            </th>
            <th>
                <input type="number" name="addbirthday" required>               
            </th>
        </tr>
        <tr>
            <th>

            </th>
            <th>
                <input type="submit" name="add" value="Add a person">
                
            </th>
        </tr>

    </table>
    <?php
        if(isset($_GET['add'])){
            $addfirstname = $_GET['addfirstname'];
            $addnickname = $_GET['addnickname'];
            $addbirthday = $_GET['addbirthday'];
            
            if(!$con){
                echo "keine Verbindung";
            }
            else{
                $add_query = "insert into mypersons (firstname, nackname, birthday) VALUES ('firstname1', 'nackname2', birthday1);"; 
                if(!empty($addfirstname) and !empty($addnickname) and !empty($addbirthday)){
                    $add = str_replace("firstname1" , $addfirstname, $add_query);
                    $add1 = str_replace("nackname2" , $addnickname, $add);
                    $add2 = str_replace("birthday1" , $addbirthday, $add1);
                    //echo $add2;
                //echo "verbunden";
                }
                $sucht = mysqli_query($con, $add2);
                if(!$sucht){
                    echo "The person is not inserted, Bitte versuchen sie noch einmal.!!!";
                    
                }else{
                    echo "<table>
                            <tr>
                                <th>"
                                    .$addfirstname.
                                "</th>
                                <th>"
                                    .$addnickname.
                                "</th>
                                <th>"
                                    .$addbirthday.
                                "</th>
                      
                            </tr>
                            <h3>This person is inserted</h3>
                        </table>";
                            
                    
                    
                }

        
            }


    
            
        }
        ?>
</form>

</div>

<?php include "../index/footer.php"?>