<?php require '../arabic/header.php'?>
<div class="body">
    <form action="exercise1.php"  method="POST" class="exercise-form">
        <div class="exercise-title">
            <!--title-->
            <h1><b style="text-align: right;">أحلى بيئة</b></h1>
            <hr>
        </div>
        <div class="exercise-content">
            <!--content-->
            <p style="text-align: right;">
                    أَعْلَنَ أميرُ الغابةِ عنْ  
                    <input style="width: 60px;" name="op1">
                    أَنْظَفِ بيتٍ، و حدَّدَ لها  
                    <input  style="width: 60px;" name="op2">
                    ،هما: الشَرْطُ الأَوَّلُ:
                    لا يضعُ المتسابِقُ  
                    <input style="width: 60px;" name="op3">
                    أمامَ بيتِ جارِهِ،
                    الشَّرْطُ الثَاني:
                    مُدَّةُ المُسابقةِ  
                    <input style="width: 60px;" name="op4">
                    
                    واحدٌ
                    
            </p>
        </div>
        <div class="exercise-options">
            <!--options-->
            <div class="solutions">
                <p class="solution">شرطَيْنِ</p>
                <p class="solution">مُسابقةِ</p>
                <p class="solution">أوساخاً</p>
                <p class="solution">أسبوعٌ</p>
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
                if ($_POST['op1'] == 'مسابقة'){
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
                if ($_POST['op2'] == 'شرطين'){
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
                if ($_POST['op3'] == 'أوساخا'){
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
                if ($_POST['op4'] == 'أسبوع'){
                    echo 'الحل '.'('.$_POST['op4'].')'.' '.'صح';

                } else if(empty($_POST['op4'])){
                    echo '';
                } else{echo 'الحل '.'('.$_POST['op4'].')'.' '.'غلط';}
            }
            echo '&nbsp; ';
            echo '<p>(4</p>';
            echo '<br>';
            
        }

        ?>
    </div>


    </form>

</div>



<?php require '../arabic/footer.php'?>