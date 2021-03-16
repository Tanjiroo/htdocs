<?php require '../arabic/header.php'?>
<div class="body">
<h5 style="text-align: right; margin: 5px 10px 0px 0px"> تأليف: نورينا إيبو
</h5>
    <form action="exercise3.php"  method="POST" class="exercise-form">
        <div class="exercise-title">
            <!--title-->
            <h1><b style="text-align: right;">في الغابة</b></h1>
            <hr>
        </div>
        <div class="exercise-content">
            <!--content-->
                    
            <p style="text-align: right;">
            .
            في أحد الأيام وفي يومٍ جميلٍ ،خرج سامرٌ في نزهةٍ
            مع أسرته في 
            <input style="width: 60px;" name="op1" style="text-align: right; "placeholder="1">
            
            ،
            فجأةً،ظهر أمامه أرنبٌ صغيرٌ مجروحٌ
            يكادُ يصرخُ من الألمِ،لقد تألم لحالِ 
            <input style="width: 60px;" name="op2" style="text-align: right;" placeholder="2">
            
            
            فاقتربَ منهُ وحملهُ بين يديه الصغيرتين إلى أمهِ لتضمدَ 
            <input style="width: 60px;" name="op3" style="text-align: right;" placeholder="3">
            
            
            سألتهُ الأمُ: لِمَ أنتَ حزينٌ يا سامرُ؟ 
            فأجابَ سامرٌ: لقد تألمتُ عندما رأيتُ ألمَ هذا الأرنبُ الصغيرُ
            وأريدُ أنْ تشفى جراحهُ 
            <input style="width: 60px;" name="op4" style="text-align: right;" placeholder="4">
            
            قالتْ الأمُ: حسناً يابنيِّ .لقد ضمدتْ الأمُ جراحَ الأرنبِ وذهبَ يركضُ سريعاً من 
            <input style="width: 60px;" name="op5" style="text-align: right;"placeholder="5">
            وفي نهايةِ النزهةِ عادَ سامرٌ مع أسرتهِ والفرحة تغمرُ 
            <input style="width: 60px;" name="op6" style="text-align: right;" placeholder="6">
            ،لأنهُ أعاد الفرحَ لقلبِ ذلكَ الأرنبِ الصغيرِ.







<br>
<br>
<br>

            </p>
        </div>
        <div class="exercise-options">
            <!--options-->
            <div class="solutions">
                    <p class="solution">العطلة</p>
                    <p class="solution">الأرنب</p>
                    <p class="solution">جراحهُ</p>
                    <p class="solution">سريعاً</p>
                    <p class="solution">فرحتهِ</p>
                    <p class="solution">قلبهُ</p>
                        
                </div>
            <hr>

        </div>
        <div class="exercise-check">
            <!--check-->
            <button type="submit" name="submit" style="border-radius: 25px;">تحقق</button>

        </div>

        <div class="exercise-solutions">
        <!--solutions-->
        <?php

        if(isset($_POST['submit'])){
            
    
            if(isset($_POST['op1'])){
                if ($_POST['op1'] == 'العطلة' | $_POST['op1'] == 'العطلة '){
                    echo 'الحل '.'('.$_POST['op1'].')'." ".'صح';
                } else if(empty($_POST['op1'])){
                        echo '';
                } else{
                    echo 'الحل '.'('.$_POST['op1'].')'." ".'غلط';
                }
                echo '&nbsp; ';
                echo '<p>(1</p>'; 
                echo '<br>';
                
            }


            if(isset($_POST['op2'])){
                if ($_POST['op2'] == 'الأرنب' | $_POST['op2'] == 'الأرنب '){
                    echo 'الحل '.'('.$_POST['op2'].')'." ".'صح';

                } else if(empty($_POST['op2'])){
                    echo '';
                } else{echo 'الحل '.'('.$_POST['op2'].')'.' '.'غلط';
                }
                echo '&nbsp; ';
                echo '<p>(2</p>';
                echo '<br>';
                
            }

            if(isset($_POST['op3'])){
                if ($_POST['op3'] == 'جراحه' | $_POST['op3'] == 'جراحهُ' | $_POST['op3'] == 'جراحه ' ){
                    echo 'الحل '.'('.$_POST['op3'].')'.' '.'صح';

                } else if(empty($_POST['op3'])){
                        echo '';
                } else{echo 'الحل '.'('.$_POST['op3'].')'.' '.'غلط';
                }
                echo '&nbsp; ';
                echo '<p>(3</p>';
                echo '<br>';
                
            }

   
            if(isset($_POST['op4'])){
                if ($_POST['op4'] == 'سريعا' | $_POST['op4'] == 'سريعاً' | $_POST['op4'] == 'سريعا '){
                    echo 'الحل '.'('.$_POST['op4'].')'.' '.'صح';

                } else if(empty($_POST['op4'])){
                    echo '';
                } else{echo 'الحل '.'('.$_POST['op4'].')'.' '.'غلط';}
            }
            echo '&nbsp; ';
            echo '<p>(4</p>';
            echo '<br>';
            
            
            if(isset($_POST['op5'])){
                if ($_POST['op5'] == 'فرحته' | $_POST['op5'] == 'فرحتهِ' | $_POST['op5'] == 'فرحته '){
                    echo 'الحل '.'('.$_POST['op5'].')'." ".'صح';

                } else if(empty($_POST['op5'])){
                    echo '';
                } else{echo 'الحل '.'('.$_POST['op5'].')'.' '.'غلط';
                }
                echo '&nbsp; ';
                echo '<p>(5</p>';
                echo '<br>';
                
            }

            if(isset($_POST['op6'])){
                if ($_POST['op6'] == 'قلبه' | $_POST['op6'] == 'قلبهُ' | $_POST['op6'] == 'قلبه '){
                    echo 'الحل '.'('.$_POST['op6'].')'.' '.'صح';

                } else if(empty($_POST['op6'])){
                        echo '';
                } else{echo 'الحل '.'('.$_POST['op6'].')'.' '.'غلط';
                }
                echo '&nbsp; ';
                echo '<p>(6</p>';
                echo '<br>';
                
            }

        }

        ?>
    </div>


    </form>

</div>



<?php require '../arabic/footer.php'?>