<?php
$title = "Сайт";
include('header.php');
?>


<script>
function myFunction() {
  // Объявить переменные
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Перебирайте все строки таблицы и скрывайте тех, кто не соответствует поисковому запросу
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



<body >
    <div id="sr">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Поиск по услуге" class="ppp">
          <?php
          $file_name = "form.txt";
  
          # Считываем информацию по строкам
          $data = file( $file_name );          
          # В цикле обходим массив данных
          echo '<table class="table_sort style="border-collapse: colapse"" id="myTable">';
          echo '<thead>';
          echo '<tr >';
          echo '<th class="t4">Услуга</th>';      
          echo '<th class="t1">Номер телефона</th>';
          echo '<th class="t1">Дата</th>';
          echo '<th class="t2 nosort">Фамилия Имя</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          foreach( $data as $value ):
          
          # Разбиваем строку по |
          $value = explode("  ", $value);
          {
          echo '<tr>';
          echo '<td>' . $value[3] . '</td>';
          echo '<td>' . $value[2] . '</td>';
          echo '<td>' . $value[0] . '</td>';
          echo '<td>' . $value[1] . '</td>';
          echo '</tr>';
          }
          endforeach;        
          echo '</tbody>';
          echo '</table>';
          
          ?>
      </table>
    </div>
</body>


<?php
include('footer.php');
?>