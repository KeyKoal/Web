<?php
$title = "Сайт";
include('header.php');
?>
<?php
if (isset($_POST["name1"])) {

    $text = '';
    //формируем строку для записи
    if (isset($_POST['name'])) {
        $text .= $_POST['name'] . " ";
    }
    if (isset($_POST['name1'])) {
        $text .= $_POST['name1'] . " ";
    }
    if (isset($_POST['name2'])) {
        $text .= $_POST['name2'] . " ";
    }
    if (isset($_POST['q'])) {
        $text .= $_POST['q'] . "\n";
    }


   if (!empty($_POST["name"] and $_POST["name1"] and $_POST["name2"] and $_POST["q"])) {
    $result = file_get_contents('https://api.telegram.org/bot5778754303:AAGjFHQ7hO6OiT5X2Xw3d8eGCEi2S12IRzs/sendMessage?chat_id=319467164&text=' . urlencode($text));

        /*$file = "contacts.txt";
        //открываем файл для записи

        $fp = fopen($file, "a+");
        if (!empty($_POST["name"] and $_POST["name1"] and $_POST["name2"] and $_POST["q"])) {

            //записываем в файл   
            fwrite($fp, date('d.m.Y H:i:s') . "  " . $text);

            //закрываем файл
            fclose($fp);
            header("location: contacts.php");
        }
        */
    }
}
 
?>
<?
if (isset($_POST["name1"])){

if (empty($_POST['name'])) {
    $error=("Заполните поле Фамилия! <br>");
}
if (empty($_POST['name1'])) {
    $error=$error.("Заполните поле Имя! <br> ");
}
if (empty($_POST['name2'])) {
    $error=$error.("Заполните поле Отчество! <br>");
}
if (empty($_POST['q'])) {
    $error=$error.("Задайте свой вопрос! <br>");

}
}
?>
<?
if (!empty($error)){
    
?>

<div class="alert alert-warning d-flex align-items-center col-md-2 m-4"  role="alert">
    <?php
    print_r($error);
    ?>
</div>

<?
}
?>
<div id="formm">
    <h2> Если возникли вопросы-заполните форму!</h2>
    <h4>Наш консультант свяжется с Вами в течении 3-х рабочих дней!</h4>
</div>

<div>
<table id="reg1" cellpadding="100">
    <tr>
        <td class="two2">
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-20">
                        <label for="inputEmail4">Фамилия</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-30 ">
                        <label for="inputPassword4">Имя</label>
                        <input type="text" class="form-control" name="name1">
                    </div>
                </div>
                <div class="form-group col-md-30">
                    <label for="inputAddress">Отчество</label>
                    <input type="text" class="form-control" name="name2">
                </div>
                <div class="form-group col-12">
                    <label for="inputAddress2">Вопрос</label>
                    <input type="text" class="form-control" name="q">
                </div>
                <button type="submit" class="btn btn-primary m-3">Отправить вопрос</button>
            </form>
        </td>
    </tr>
</table>
</div>


<?php
include('footer.php');
?>