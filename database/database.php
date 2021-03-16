<html>
<body>





<?php
    if(isset($_POST['submit'])){
        
    } 
    $servername = '127.0.0.1';
    $username = 'root';
    $password ='';
    $db = 'webdatabase';
    $connection = new mysqli($servername, $username, $password, $db);
    if ($connection ->connect_error){
        die('error database is not connected'.$connection ->connect_error);
    }
    
    echo 'connected';
    

    

    $sql = "insert into mypersons (firstname, nackname, birthday) values('Najdat', 'Dschmou', 1995)";
    $sqlselect = "select * from mypersons";
    $result = $connection->query($sqlselect);    
/**  if($connection->query($sql) === TRUE){
        echo " Erfolgreich regestriert";

    }else{
        echo "Du bist ein Lappen".$connection->error;
    }    
*/
    
 
    $connection->close();





?> 





    <table>
        <tr>
            <th>
            <input type="text" name="firstname" placeholder="Vorname">

            </th>
        </tr>
        <tr>
            <th>
            <input type="text" name="nackname"  placeholder="Nachname">

            </th>
        </tr>
        <tr>
            <th>
            <input type="number" name="birthday"  placeholder="1800">

            </th>
        </tr>
        <tr>
            <th>
            <input type="submit" name="submit" value="Check">

            </th>
        </tr>
        <tr>
            <th>
                Vorname
            </th>
            <th>
                Nachname
            </th>
            <th>
                Geburtstag
            </th>
        </tr>
        <tr>
        <?php
            if($result-> num_rows > 0){
                while($i = $result->fetch_assoc()){
                    echo '<tr>'.'<th>'.$i['firstname'].'</th>'.'<th>'.$i['nackname'].'</th>'.'<th>'.$i['birthday'].'</th>'.'</tr>';
                }
                
        
            }else{
                echo "Du bist ein Lappen".$connection->error;
            }   
        ?>
        </tr>
    </table> 
</body>
</html>

