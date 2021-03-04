<?php
    require "./connect.php";
    // $sql = "SELECT * FROM product ";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();

    if($_POST){
        $name = $_POST['namecactus'];
        $img = $_POST['img'];
        $price = $_POST['Price'];
        $Typename = $_POST['Type'];
        switch ($Typename) {
            case 'Astrophytum':
                $Typename = 1;
              break;
              case 'Gymnocalycium':
                $Typename = 2;
              break;
              case 'Mammilaria':
                $Typename = 3;
              break;
              case 'Opuntia':
                $Typename = 4;
              break;
              case 'Echeveria':
                $Typename = 5;
              break;
            // default:
            //   code to be executed if n is different from all labels;
          }
        $Size = $_POST['Size'];
        $Farm = $_POST['Farm'];
        $Existing = $_POST['Existing'];

        $sql = "INSERT INTO `product`(`Cac_name`, `Cac_img`, `Cac_Price`, `Cac_Type`, `Cac_Size`, `Cac_Farm`, `Cac_Existing`) 
        VALUES ('$name','$img',$price,'$Typename',$Size,'$Farm',$Existing)";
        $stmt = $conn->prepare($sql);
        

        if($stmt->execute()){
            header("location:formproduct.php");
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Product</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php
                require "./nav.php";
            ?>

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Form Add Product</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    ฟรอมกรอก สำหรับเพิ่ม เเตกตัสใหม่
                                </div>
                                <div class="panel-body">
                                    <form action="formproduct.php" method="POST">
                                        <div class="form-group">
                                            <label>ชื่อแคคตัส</label>
                                            <input class="form-control" style="width:300px;" name="namecactus">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>รูปแคคตัส</label>
                                            <input class="form-control" style="width:500px;" name="img">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>ราคาแคคตัส</label>
                                            <input class="form-control" type="number" style="width:250px;" name="Price">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>ประเภทแคคตัส</label>
                                            <!-- <input class="form-control"  style="width:250px;"> -->
                                            <select class="form-control" style="width:250px;" name="Type">
                                                <option>Astrophytum</option>
                                                <option>Gymnocalycium</option>
                                                <option>Mammilaria</option>
                                                <option>Opuntia</option>
                                                <option>Echeveria</option>
                                            </select>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>ขนาดแคคตัส</label>
                                            <input class="form-control" type="number" style="width:250px;" name="Size">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>ฟรามที่ผลิตแคคตัส</label>
                                            <input class="form-control" type="text" style="width:250px;" name="Farm">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>จำนวนที่นำเข้า</label>
                                            <input class="form-control" type="number" style="width:250px;" name="Existing">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <input type="submit" class="btn btn-default" value="Submit">
                                    </form>
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
