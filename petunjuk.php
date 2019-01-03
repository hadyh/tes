<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> E DATA </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
  include "link_css.php";
  ?>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php
  include "header.php";
 ?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <?php include "sidebar.php"; ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content container-fluid">
                <div class="box container">
                    <div class="box-header">
                        <h1> <b>Petunjuk Penggunaan</b></h1>
                        <hr>
                    </div>
                    <div class="box-header">
                        <h3><b>Informasi Login</b></h3>
                    </div>
                    <div>
                        <ol>
                            <li>
                                User ID, gunakan Nomor Induk Pegawai (NIP)
                            </li>
                            <li>
                                Password, gunakan 6 digit angka terakhir dari Nomor Induk Pegawai (NIP)
                            </li>
                        </ol>
                    </div>

                    <div class="box-header">
                        <h3>
                            <b>Informasi Penggunaan</b>
                        </h3>
                    </div>

                    <div>
                        <ol>
                            <li>
                                Silahkan mengsisi Kompetensi Inti dari mata pelajaran anda pada menu kompetensi inti
                            </li>
                            <li>
                                Silahkan mengisi Kompetensi Dasar dari mata pelajaran anda pada menu kompetensi dasar
                            </li>
                            <li>
                                Silahkan mengisi data kelas dan mengelola data siswa pada kelas tersebut pada menu home, data kelas dan submenu sikap, pengetahuan, keterampilan.
                            </li>
                            <li>
                                Print out data siswa pada menu nilai
                            </li>
                        </ol>
                    </div>
                    <hr>
                  
                </div>
                
            </section>


        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php
  include "footer.php";
  ?>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>