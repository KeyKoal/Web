<?php
$title = "Сайт";
include('header.php');
?>

<div class="album py-5 ">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <h6> Услуги ЛОРа</h6>
        <div class="card shadow-sm">
          <img src="lor.png" height="400px"></img>
          <div class="card-body">
            <p class="card-text">Сычев Петр Владимирович. Доктор наук. Специалист в сфере оториноларингологии. </p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <h6> Услуги педиатра</h6>
        <div class="card shadow-sm">
          <img src="ped.jpg" height="400px"></img>
          <div class="card-body">
            <p class="card-text">Гриценко Сергей Ефимович.Кандидат медицинских наук. Врач-педиатр</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <h6> Услуги терапевта</h6>
        <div class="card shadow-sm">
          <img src="ter.jpg" height="423px"></img>
          <div class="card-body" id="wom">
            <p class="card-text">Бобкова Гульнара Габдуляновна. Врач-терапевт.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>