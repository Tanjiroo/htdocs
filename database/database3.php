<LINK rel="stylesheet" href="database3.css">
<?php include "../index/header.php"?>
<div class="db-div">

    <table>
        <h3>What do you want to do?</h3>
        <tr>
            <form action="search.php">
                <th>
                    <input type="submit" name="search_button" value="Search">
                </th>
            </form>
            <form action="add_in_database.php">
                <th>
                    <input type="submit" name="add_button" value="Add">
                </th>
            </form>
            <form action="remove_from_database.php">
                <th>
                    <input type="submit" name="remove_button" value="Remove">
                </th>
            </form>
        </tr>


    </table>


</div>







<?php include "../index/footer.php"?>

























