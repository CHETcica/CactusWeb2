<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
         
    <style>
        body {
    background-color: rgba(247, 214, 224, 0.5);
}
.bgplantcare{
    background-image: url('./pictures/120335617_3337808269671540_1658307846968634347_n.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: repeat;
    padding-top: 0px;
    padding-bottom: 0px;
    height: 354px;
    width: 100%;
}
#bgblack{
    background-color: black;
    background-size: cover;
    background-position: center;
    background-repeat: repeat;
    padding-top: 130px;
    padding-bottom: 130px;
    opacity: 0.3;
}
.rowstep{
    background-color: #f2f1e9;
    padding-top: 30px;
}
#eidtimgpc{
    width: 25%;
}
.textsizepc{
    font-size: 22px;
}
.bgwhite{
    background-color: rgba(247, 214, 224, 0.5);
    width: 100%;
}
.fs{
    font-size: 18px;
}
.pdtxt{
    padding: 0 130px 0 130px;
}
    </style>
    <link rel="stylesheet" href="style.css"> 
</head>

<body>
    <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
    ?>
    <div class="container-fluid">
        <div class="bgplantcare mt-5">
            <div id="bgblack">
                <div class="container ">
                    <h1 class="display-3 text-center text-white">Cactus Care</h1>
                </div>
            </div>
        </div>
        <!--Eng jum-->
    </div>
    <!--Eng con f-->
    <div class="rowstep container-fluid mt-3">
        <div class="container">
            <div class="row text-center">
                <div class="col-4">
                    <img src="./pictures/120154902_617151909172567_7714739028768381527_n.png" id="eidtimgpc">
                </div>
                <div class="col-4">
                    <img src="./pictures/120277032_2961941657375277_9159876106466792032_n.png" id="eidtimgpc">
                </div>
                <div class="col-4">
                    <img src="./pictures/119983124_356521155767143_6037115991160965677_n.png" id="eidtimgpc">
                </div>
            </div>
            <div class="textsizepc row text-center mt-4">
                <div class="col-4">
                    <p>WATER</p>
                </div>
                <div class="col-4">
                    <p>LIGHT</p>
                </div>
                <div class="col-4">
                    <p>PLACE</p>
                </div>
            </div>
            <div class="row text-center pb-5">
                <div class="col-4">
                    <span>รดน้ำสัปดาห์ละ 1-2 ครั้ง</span><br />
                    <span>Water once or twice a week</span>
                </div>
                <div class="col-4">
                    <span>แสงแดดครึ่งวัน/เต็มวัน</span><br />
                    <span>Receive sunlight for half a day or full day</span>
                </div>
                <div class="col-4">
                    <span>ควรไว้ในที่อากาศถ่ายเทสะดวก</span><br />
                    <span>Place it where fresh air fully circulates</span>
                </div>
            </div>
        </div>
        <!--Eng con-->
    </div>
    <!--Eng con f-->
    <div class="bgwhite container-fluid">
        <div class="pdtxt container">
            <h2 class="text-center pt-5 pb-5">What’s Special about Tiny Tree’s Cactus?</h2>
            <span class="fs">
                ต้นกระบองเพชรของเราเลี้ยงโดยวิธีธรรมชาติ ไม่ใช้ปุ๋ยเหมือนกับที่ขายตามตลาดต้นไม้ทั่วไป
                ทำให้ต้นไม้มีภูมิคุ้มกันที่ดี แข็งแรง หนามเรียงตัวสวยงาม
            </span><br>
            <span class="fs">
                บางคนชอบบอกว่าเลี้ยงกระบองเพชรยังตาย จริงๆอาจเพราะต้นไม้มาไม่แข็งแรง หรือร้านค้าเลี้ยงเขาด้วยปุ๋ยตลอด
                พอมาอยู่กับเรา เราไม่ได้ให้ปุ๋ย ต้นไม้ก็จะฟีบตาย
            </span>
            <h2 class="text-center pt-5 pb-5">FAQS</h2>
            <div class="row pb-4">
                <div class="col-6">
                    <span style="color: rgb(98, 130, 60);">การดูแล</span><br>
                    <span style="color: rgb(98, 130, 60);">Q : สถานที่วาง</span><br>
                    <span>
                        A : กระบองเพชรปกติ > ควรวางไว้ในที่โดนแสงแดด อาจจะแดดครึ่งวันก็ได้ ถ้าเลี้ยงในออฟฟิศ
                        ควรมารับแสงแดดบ้างด้วย ไม่งั้นจะยืดตัว และลำต้นจะเสียฟอร์ม
                    </span><br>
                    <span>
                        กุหลาบหิน > วางไว้ในห้องแอร์ ติดหน้าต่างที่แสงแดดส่องเข้ามาถึง เพราะถ้าไว้ข้างนอกกลางแดดเลย
                        ผิวจะเสีย
                    </span>
                </div>
                <div class="col-6">
                    <span style="color: rgb(98, 130, 60);">การรดน้ำ</span><br>
                    <span style="color: rgb(98, 130, 60);">Q : ความถี่ในการรด</span><br>
                    <span>
                        A : – วาง outdoor รดน้ำสัปดาห์ละ 2 ครั้ง เช่น อังคาร ศุกร์ <br>– วาง indoor รดน้ำสัปดาห์ละ 1
                        ครั้ง
                    </span><br>
                    <span style="color: rgb(98, 130, 60);">Q : วิธีรดน้ำ</span><br>
                    <span>
                        A : – รดบริเวณโคน ให้น้ำทะลุลงมาข้างล่าง <br>– ไม่ควรใช้ฟ็อกกี้ฉีด เพราะจะชุ่มแค่หน้าดิน
                        แต่น้ำจะไม่ลงมาชั้นข้างล่าง ที่มีรากอยู่
                    </span>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-6">
                    <img src="./pictures/120086869_2787358448206432_898061461312715465_n.jpg" width="100%" height="100%">
                </div>
                <div class="col-6">
                    <img src="./pictures/120106609_838582913578825_8092433636111150142_n.jpg" width="100%" height="100%">
                </div>
            </div>
        </div>
        <!-- =====================================================   footer  ===================================================== -->
    <?php
        include "./component/footer.php";
    ?>
    </div>

</body>

</html>