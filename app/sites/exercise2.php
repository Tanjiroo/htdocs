<?php require '../arabic/header.php'?>
<div class="body">
    <form action="exercise2.php"  method="POST" class="exercise-form">
        <div class="exercise-title">
            <!--title-->
            <h1><b style="text-align: right;">بَيْتٌ مِنْ حِجَارةٍ</b></h1>
            <hr>
        </div>
        <div class="exercise-content">
            <!--content-->
                    
            <p style="text-align: right;">
                    تَسْكُنُ القَنافِذُ الثَّلاثةُ في  
                    1.<input style="width: 60px;" name="op1" style="text-align: right;">
                    القَديمِ المَحْفورِ في جَوْفِ الأَرْضِ، وذاتَ لَيْلَةٍ 
                    2.<input style="width: 60px;" name="op2" style="text-align: right;">
                    القُنْفُذُ الكبيرُ لأَخَوَيْهِ: لماذا لانُغَيِّرُ 
                    3.<input style="width: 60px;" name="op3" style="text-align: right;">
                    القَديمَ، لنَبْنيَ بَيْتاً جديداً فوْقَ الأرضِ؟. قالَ
                    4.<input style="width: 60px;" name="op4" style="text-align: right;">
                     الأَوْسَطُ: فِكْرَةٌ جيِّدةٌ، ولكنَّها تَحتاجُ إلى جُهدٍ 
                    5.<input style="width: 60px;" name="op5" style="text-align: right;">
                    . قالَ قُنْفوذٌ الصَّغيرُ: لا ..لا
                    أريدُ؛ إنْ نَخرُجْ 
                    6.<input style="width: 60px;" name="op6" style="text-align: right;">
                     عَلَينا وُحوشُ الغابةِ
            </p>
        </div>
        <div class="exercise-options">
            <!--options-->
            <div class="solutions">
                    <p class="solution">جُحْرِهَا</p>
                    <p class="solution">قالَ</p>
                    <p class="solution">بَيْتَنا</p>
                    <p class="solution">القُنفُذُ</p>
                    <p class="solution">كَبيرٍ</p>
                    <p class="solution">تَهْجُمْ</p>
                        
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
                if ($_POST['op1'] == 'جحرها' | $_POST['op1'] == 'جُحْرِهَا' | $_POST['op1'] == 'جحرها '){
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
                if ($_POST['op2'] == 'قال' | $_POST['op2'] == 'قالَ' | $_POST['op2'] == 'قال '){
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
                if ($_POST['op3'] == 'بيتنا' | $_POST['op3'] == 'بَيْتَنا' | $_POST['op3'] == 'بيتنا ' ){
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
                if ($_POST['op4'] == 'القنفذ' | $_POST['op3'] == 'القُنفُذُ' | $_POST['op4'] == 'القنفذ '){
                    echo 'الحل '.'('.$_POST['op4'].')'.' '.'صح';

                } else if(empty($_POST['op4'])){
                    echo '';
                } else{echo 'الحل '.'('.$_POST['op4'].')'.' '.'غلط';}
            }
            echo '&nbsp; ';
            echo '<p>(4</p>';
            echo '<br>';
            
            
            if(isset($_POST['op5'])){
                if ($_POST['op5'] == 'كبير' | $_POST['op5'] == 'كَبيرٍ' | $_POST['op5'] == 'كبير '){
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
                if ($_POST['op6'] == 'تهجم' | $_POST['op6'] == 'تَهْجُمْ' | $_POST['op6'] == 'تهجم '){
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