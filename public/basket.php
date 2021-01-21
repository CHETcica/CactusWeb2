<!DOCTYPE html>
<html lang="en">
<?php
include "./component/head.php";
?>

<body>
  <!---flude========================================container-fluid================================================== -->
  <?php
  session_start();
  include "./component/navbar.php";
  require('connect.php');
  $uid = $_SESSION['user_login'];
  $sql = "SELECT `BasketID`, `Amout`,`Cac_img`,`Cac_name`,`Cac_Price`, `Sumprice`, `StatusBK`, `uid`, product.Cac_img 
        FROM `basket` INNER JOIN product WHERE product.Cac_id=basket.Cac_id and `uid`=$uid";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $totalprice = 0;
  ?>

  <section class="container mb-3">
    
    <div class="row">
      <div class="col-lg-9">
        <div class="row">

        </div>
        <div class="row bg-w">
          <div class="col-lg-1 ">
            <div class="form-group form-check form-check-product-select">
              <input type="checkbox" class="form-check-input " id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Product</label>
            </div>
          </div>
          <div class="col-lg-4 ">

          </div>
          <div class="col">
            <p>
              price/unit
            </p>
          </div>
          <div class="col">
            <p>
              amount
            </p>
          </div>
          <div class="col">
            <p>
              sumprice
            </p>
          </div>
        </div>


        <!-- ==================================================================================================== -->
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>



          <div class="">
            <div class="row bg-w my-3">
              <div class="col-lg-1  ">
                <div class="form-group form-check form-check-product-select">
                  <!-- <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1"></label> -->

                  <form action="./php/multipleDelete.php" method="POST">
                    <input class="form-check-input " type="checkbox" name="checkDelete[]" value="<?php echo $row['BasketID']; ?>">
                </div>
              </div>
              <div class="col-lg-4 col-1 ">
                <img class="py-1" src="<?php echo $row['Cac_img'] ?>" height="50px" alt="">
                <p class="inline-box sumprice"><?php echo $row['Cac_name'] ?></p>
              </div>
              <div class="col-lg-2 col-1 sumprice">
                <div>
                  <p id="price">
                    <?php echo $row['Cac_Price'] ?>
                  </p>

                </div>

              </div>
              <div class="col-lg-3 col-1 ">
                <p>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="button" class="minusplus btn btn-outline-secondary btn-minus">-</button>
                  </div>
                  <input class="form-control text-center" value="<?php echo $row['Amout'] ?>" min="1" max="1000" type="number">
                  <div class="input-group-append">
                    <button type="button" class="minusplus btn btn-outline-secondary btn-plus">+</button>
                  </div>
                </div>
                </p>
              </div>
              <div class="col-lg-2 col-1 sumprice">
                <p id="total">
                  <?php
                    echo $row['Sumprice'];
                  ?>
                </p>
              </div>
            </div>
          </div>



        <?php
          $totalprice += $row['Sumprice'];
        }
        ?>
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
        <button button id="selectAll" type="button" class="btn btn-primary">select all</button>
        <button button id="selectAllcancel" type="button" class="btn btn-secondary">cancel</button>




      </div>
      <div class="col-lg-3">
        <div class="row  "></div>
        <div class="card bg-w" style="width: 110%;">
          <div class="card-body">

            <h5 class="card-title"></h5>
            <p class="card-text">Total (price)<span class="Totalamount" id="Totalamount"><?php echo $totalprice; ?>฿</span></p>
            <p class="card-text"><span class="Totalamount" id=""></span></p>

            <form class="form-inline my-2 my-lg-0">
              <!-- <input class="form-control mr-sm-2" type="search" placeholder="Discount code" aria-label="Search"> -->

            </form>
            <a href="./php/insertorder.php" class="btn btn-primary btn-bottom">Payment</a>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- =====================================================   footer  ===================================================== -->
  <?php
  include "./component/footer.php";
  ?>
  <script src="./bootstrap-4.5.0-dist/js/jQuery.js"></script>
  <script src="./bootstrap-4.5.0-dist/js/poper.js"></script>
  <script src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
  <script>
    // $('.btn-plus, .btn-minus').on('click', function(e) {
    //   const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
    //   const input = $(e.target).closest('.input-group').find('input');
    //   const amountElem = document.getElementById('amount');
    //    const totalElem = document.getElementById('total');



    //   if (input.is('input')) {
    //     input[0][isNegative ? 'stepDown' : 'stepUp']()
    //     totalElem.innerText = amountElem.value * document.getElementById('price').innerText;

    //   }

    // })

    const checkboxElemArr = Array.from(document.querySelectorAll('input[name="checkDelete[]"]'));
    console.log(checkboxElemArr);
    const selectAll = document.querySelector('#selectAll');
    console.log(selectAll);

    selectAll.addEventListener('click', () => {
      checkboxElemArr.forEach(elem => {
        elem.checked = true;
      });
    })

    const selectAllcancel = document.querySelector('#selectAllcancel');
    console.log(selectAll);

    selectAllcancel.addEventListener('click', () => {
      checkboxElemArr.forEach(elem => {
        elem.checked = false;
      });
    })
  </script>
</body>

</html>