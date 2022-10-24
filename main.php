<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт-визитка </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header" > 
                <img src="/img/NvL.gif" style= background-image width="100%" height="100%" frameBorder="0" allowFullScreen></img> 
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div id="over" class="about_me" >
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/wolf.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Я из города', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> На курсе нас научили создавать переменные </p>
                    <p> И проводить простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                    <div><p> Вывод данных a, b, c из блока knowledge </p> <br><br>          
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?>
                    </div>
                    <div><p> Вывод данных a + b = c </p> <br><br>          
                    <?php
                        $a = 100;
                        $b = 500;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>
                    </div>
                    <div><p> Проверка вхождения числа в диапазон от 5 до 50 </p> <br><br>
                     <?php
                        echo $d;
                    ?> 
                    </div>
            </div>

            <div class="article">
                <p class="text">
                    Это поле используется для вывода текста.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
