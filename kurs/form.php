<?php
$title = "Сайт";
include('header.php');
?>
<?php
if (isset($_POST["name1"])){

  $text = '';
  //формируем строку для записи главная проверка существования переменной, если существует, то форма отправлена
 
if (isset($_POST['name'])) {
  $text .= $_POST['name'] . " ";
}
if (isset($_POST['name1'])) {
  $text .= $_POST['name1'] . "  ";
}
if (isset($_POST['name2'])) {
  $text .= $_POST['name2'] . "  ";
}
if (isset($_POST['form'])) {
  $text .= $_POST['form'] . "\n";
}

if (!empty($_POST["name"] and $_POST["name1"] and $_POST["name2"] and $_POST["form"])){
  $file = "1.xlsx";
  //открываем файл для записи
  
  $fp = fopen($file, "a+");
if (!empty($_POST["name"] and $_POST["name1"] and $_POST["name2"] and $_POST["form"])){

  //записываем в файл   
 
  fwrite($fp, date('d.m.Y H:i:s') . "  ".$text );
  //закрываем файл
  fclose($fp);
  header("location: form.php ?sucsess=1");
}
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
    $error=$error.("Заполните поле Номер телефона! <br>");
}
if (empty($_POST['form'])) {
    $error=$error.("Выберите услугу! <br>");

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
elseif ($_GET["sucsess"]){
?>
<div class="alert alert-success d-flex align-items-center col-md-4 m-4" role="alert">
    <?
    print("Спасибо, форма отправлена!");
    ?>
</div>
<?
}
?>

<form class="row gy-20 gx-30 align-items-center col-auto" action="" method="post">>
  <div class="col-auto ">
    <label class="visually-hidden" for="autoSizingInput">Фамилия</label>
    <input type="text" class="form-control" placeholder="Фамилия" name="name">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Имя</label>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Имя" name="name1">
    </div>
  </div>
  <label class="visually-hidden" for="autoSizingInputGroup">Номер телефона</label>
  <div class="col-auto">
    <div class="input-group"></div>
    <input type="tel" class="form-control" placeholder="89382746744" name="name2">
  </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Выбрать услугу</label>
    <select class="form-select" id="autoSizingSelect" name="form">
      <option selected value="">Услуга</option>
      <option value="Лор">Лор</option>
      <option value="Терапевт">Терапевт</option>
      <option value="Педиатр">Педиатр</option>
    </select>
  </div>

  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Записаться на прием</button>
  </div>
</form>




<?php
include('footer.php');
?>