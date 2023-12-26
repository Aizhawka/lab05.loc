<?php 
    error_reporting(-1);
    $bd= @mysqli_connect("localhost","root","","d_d") or die('Ошибка соединения с БД');
    echo "<pre>";
    #var_dump($db);
    if(!$bd) die(mysqli_connect_error());
    echo "</pre>";
    mysqli_set_charset($bd, 'utf8') or die('Не установлена кодировка');
    
   /* $insert = "INSERT INTO `gbd` (name,text) values ('Нурбек','Привет')";
    $rester = mysqli_query($bd, $insert);
    if($rester) echo "Успешно добавлены в БД";
    else echo "error";
    echo mysqli_error($bd);*/

    $update = "UPDATE gb SET text='G',name='f'";
    $update = mysqli_query($bd, $update);
    if($update) echo "Successful changes from the database";
    else echo "error";
    echo mysqli_error($bd);






?>