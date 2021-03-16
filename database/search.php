<?php include "../index/header.php"?>
<?php include "connection.php"?>
<LINK rel="stylesheet" href="database3.css">



<div class="db-div">
<form action="search_result.php" methed="GET">
    <table>
        <h3>Enter a name which you want to search it</h3>

        <tr>
            <th> 
                <input type="text" name="to_input" required>                           
            </th>
        
        </tr>
        <tr>
            <th>           
                <input type="submit" name="search" value="Search">                 
            </th>
        </tr>

    </table>
</form>

</div>

<?php include "../index/footer.php"?>