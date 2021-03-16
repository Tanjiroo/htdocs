<?php include 'index/header.php'?>
<div class="body">
    <div class="main-header">
        <div>
            <a href="index.php">
            Startseite
            </a>
        </div>

        <div>
            <a href="database/database.php" target="_blank">
            My SQL Connection
            </a>
        </div>
        <div>
            <a href="database/database2.php" target="_blank">
            My SQL Connection 2
            </a>
        </div>
        <div>
            <a href="database/database3.php" target="_blank">
            My SQL Connection 3
            </a>
        </div>
        
        <div>
            <a href="https://www.w3schools.com/Css/default.asp" target="_blank">
            CSS Tutorial
            </a>
        </div>
        <div>
            <a href="https://www.w3schools.com/html/default.asp" target="_blank">
            HTML Tutorial
            </a>
        </div>
        <div>
            <a href="https://www.wolfgang-frank.eu/hc.php" target="_blank">
            Symboles List
            </a>
        </div>
        <div>
            <a href="test.php" target="_blank">
            TEST
            </a>
        </div>

        

        
    </div>
    <div class="main-grid">
        <div class="main-navi">
            <h2>Pages</h2>
            <hr>
            <ul>
                <li>
                    <a href="app/arabic.php">Arabic</a>
                </li>
                <hr>
                <li>
                    <a href="phps/contact_formular.php">Kontakt</a>
                </li>
                <hr>
                <li>
                    <a href="MeineWebseite/index.php">2020-2021</a>
                </li>
                <hr>
                <li>
                    <a href="2021/index.php">2021</a>
                </li>
                <hr>
                <li>
                    <a href="anime/index.php">Anime</a>
                </li>
                <hr>
                <li>
                    <a href="pc/index.php">PC Infos</a>
                </li>
                <hr>

            </ul>
            
            
        </div>

        <div class="main-content">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>E-Main: </td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="datenschutz" value="ok" require_onced> Mit der Anmeldung.....</td>
                </tr>
                <br>
                <tr>
                    <input type="submit" name="eintragen" value="Eintragen">
                </tr>
            </table>
        </div>

    </div>

</div>
<?php include 'index/footer.php'?>