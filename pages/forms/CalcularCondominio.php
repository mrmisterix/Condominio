<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Gestor de condomínio</title>

    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">

                <div class="pull-left info">

                </div>
            </div>

            <hr>
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
                <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Link in level 2</a></li>
                        <li><a href="#">Link in level 2</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>

    </aside>

    <div class="content-wrapper">

        <section class="content-header">

            <ol class="breadcrumb">

            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">


            <div class="col-md-6 center-block">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Calcular condomínio</h3>
                    </div>

                    <form role="form" action="" method="POST">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Percentual de fundo de reserva (%)</label>
                                <input type="number" required class="form-control">
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" required value="fracaoIdeal">
                                    Fração ideal
                                </label>
                                <label>
                                    <input type="radio" required value="unidade">
                                    Unidade
                                </label>

                            </div>

                            <hr>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Valor do condomínio </label>
                                <input type="number" readonly class="form-control">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="reset" class="btn btn-default">Cancelar</button>

                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </div>
                    </form>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <footer class="main-footer">
    </footer>

</div>

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>