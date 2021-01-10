<!DOCTYPE html>
<html lang="en">
<?php
        include "./component/head.php";
?>
<body>
    <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
    ?>
    <div class="container  containerX mt-10">
      <div class="row">
          <div class="col-lg-2"><h4>id</h4></div>
          <div class="col-lg-3"><h4>code</h4></div>
          <div class="col-lg-3"><h4>date</h4></div>
          <div class="col-lg-3"><h4>detail</h4></div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-2 ">0001</div>
        <div class="col-lg-3 ">JSDIRFDE5DS-5F65E4F7ES5F4E</div>
        <div class="col-lg-3 ">21-10-2020</div>
        <div class="col-lg-3 ">Astrophytum asterias</div>

        </div>
      </div>

    </div>   
    <!-- =====================================================   footer  ===================================================== -->
    <?php
        include "./component/footer.php";
    ?>
    <script src="./bootstrap-4.5.0-dist/js/jQuery.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/poper.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./main.js"></script>
</body>
</html>