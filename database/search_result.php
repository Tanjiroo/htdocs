<?php include "../index/header.php"?>
<?php include "connection.php"?>
<LINK rel="stylesheet" href="database3.css">




<div class="db-div">
<form action="search_result.php" methed="GET">
    <table>
        <h1>Search's Result</h1>
        <tr>
            <th>
                Firstname
            </th>
            <th>
                Nickname
            </th>
            <th>
                Birthday
            </th>                        
        </tr>
        <?php
                if(isset($_GET['search'])){
                    $to_input = $_GET['to_input'];
                    
                    if(!$con){
                        echo "keine Verbindung";
                    }
                    else{
                        $select_query = "select * from mypersons where firstname = 'firstname1' or nackname = 'nackname1';"; 
                        if(!empty($to_input)){
                            $input_with_query = str_replace("firstname1" , $to_input, $select_query);
                            
                        }
                     
                        //echo "verbunden";
            
                        $search1 = mysqli_query($con, $input_with_query);
                        if(!$search1){
                            echo "Die Einstellungen wurde nicht laden, Bitte versuchen sie noch einmal.!!!";
                
                        }
            
                
                    }
                    while($row = mysqli_fetch_assoc($search1)){
                        echo "<tr>
                                    <th>"
                                        .$row['firstname'].
                                    "</th>
                                    <th>"
                                      .$row['nackname'].
                                    "</th>
                                    <th>"
                                        .$row['birthday'].
                                    "</th>
                                
                                </tr>";
                    }
                }
        ?>

    </table>
</form>

</div>

<?php include "../index/footer.php"?>