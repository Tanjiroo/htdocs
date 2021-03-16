<?php include '../index/header.php'?>
<div class="body">
    <div class="main-header">
        <div>
            <a href="../index.php">
            Startseite
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
        

        
    </div>
    <div class="main-grid">
        <div class="main-navi">
            <h2>>>>>>Pages<<<<<</h2>
            <hr>
            <ul>
                <li>
                    <a href="../app/arabic.php">1. Arabic</a>
                </li>
                <li>
                    <a href="contact_formular.php">Kontakt</a>
                </li>
            </ul>
            
            
        </div>

        <div class="main-content">
            <div>
                <form action="contact_formular.php" method="POST">
                    Name:  <input type="text" name="name" placeholder="Name" id="" value="" required>
                    E-Mail:<input type="text" name="email" placeholder="E-Mail" id="" value="" required> 
                    <br>
                    <select name="pioritaet" id="pioritaet">
                        <option value="Hoch">Hoch</option>
                        <option value="Mittel">Mittel</option>
                        <option value="Gering">Gering</option>
                    </select>
                    <br>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                    <br>
                    <button type="submit" name="submit">Absenden</button>
                </form>


                <?php
                    if(isset($_POST['submit'])){
                        mail("givara.ebo@outlook.com", "Kontakt Formular", 'Name: '.$_POST['name'].' E-Mail: '.$_POST['emai'].' Prioritaet'.$_POST['priorität'].' Nachricht: '.$_POST['message']);
                
                    ?>
                    <h1>Deine Nachricht wurde abgesendet</h1>
                    <?php

                
                }
                ?>
            </div>
        </div>

    </div>

</div>
<?php include '../index/footer.php'?>


































