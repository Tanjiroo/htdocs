



 <input type="submit" name="submit">



<?php
include 'dbConnection.php';




if(isset($_POST['submit'])){
    $check = "select * from users where name = 'Givara'";
    
    }
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
?>