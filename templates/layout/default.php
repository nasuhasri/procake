<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Library.IO</title>

    <?=$this->Html->charset()?>
    <?=$this->Html->meta('icon')?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- </?=$this->Html->css(['normalize.min', 'milligram.min', 'cake', 'custom.min'])?> -->

    <?= $this->Html->script('/node_modules/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>

    <?=$this->fetch('meta')?>
    <?=$this->fetch('css')?>
    <?=$this->fetch('script')?>

    <!-- Bootstrap -->
    <?=$this->Html->css('/node_modules/bootstrap/dist/css/bootstrap.min.css')?>
    <!-- Font Awesome -->
    <?=$this->Html->css('/node_modules/font-awesome/css/font-awesome.min.css')?>
    <!-- Custom Theme Style -->
    <?=$this->Html->css('custom.min.css')?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0">
              <a href="index.php" class="site_title"
                ><i class="fa fa-paw"></i> <span>Library.IO!</span></a
              >
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img
                  src="images/img.jpg"
                  alt="..."
                  class="img-circle profile_img"
                />
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div
              id="sidebar-menu"
              class="main_menu_side hidden-print main_menu"
            >
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="index.php"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li>
                    <!-- </?=$this->Html->link(__('<i class="fa fa-book">Books</i>'), ['controller' => 'Books','action' => 'index'], ['escape' => false])?> -->
                    <a href="/books"><i class="fa fa-book"></i>Books</a>
                  </li>
                  <li>
                    <a href="/magazines"><i class="fa fa-book"></i> Magazines</a>
                  </li>
                  <li>
                    <a href="/newspapers"><i class="fa fa-newspaper-o"></i> Newspapers</a>
                  </li>
                  <li>
                    <?=$this->Html->link(__('<i class="fa fa-warning"></i> Issued'), ['controller' => 'Issued','action' => 'index'], ['escape' => false])?>
                  </li>
                  <li>
                    <?=$this->Html->link(__('<i class="fa fa-users"></i> Members'), ['controller' => 'Members','action' => 'index'], ['escape' => false])?>
                  </li>
                  <li>
                    <?=$this->Html->link(__('<i class="fa fa-thumbs-up"></i> Returned'), ['controller' => 'Issued','action' => 'return'], ['escape' => false])?>
                  </li>
                  <li>
                    <?=$this->Html->link(__('<i class="fa fa-thumbs-down"></i> Not Returned'), ['controller' => 'Issued','action' => 'notReturn'], ['escape' => false])?>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span
                  class="glyphicon glyphicon-fullscreen"
                  aria-hidden="true"
                ></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span
                  class="glyphicon glyphicon-eye-close"
                  aria-hidden="true"
                ></span>
              </a>
              <a
                data-toggle="tooltip"
                data-placement="top"
                title="Logout"
                href="index.php"
              >
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?=$this->Flash->render()?>
            <?=$this->fetch('content')?>
          </div>

          <!-- <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="container">
                  <h1>tets helooww</h1>
              </div>
            </div>

            <div class="col-md-8 col-sm-8">
              <div class="row">
              </div>
            </div>
          </div> -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by
            <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <!-- <?= $this->Html->script('/node_modules/jquery/dist/jquery.min.js') ?>
    <!-- Bootstrap -->
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <?= $this->Html->script('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?> --> -->
    <!-- FastClick -->
    <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
    <!-- Chart.js -->
    <!-- <script src="../vendors/Chart.js/dist/Chart.min.js"></script> -->
    <!-- gauge.js -->
    <!-- <script src="../vendors/gauge.js/dist/gauge.min.js"></script> -->
    <!-- bootstrap-progressbar -->
    <!-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
    <!-- iCheck -->
    <!-- <script src="../vendors/iCheck/icheck.min.js"></script> -->
    <!-- Skycons -->
    <!-- <script src="../vendors/skycons/skycons.js"></script> -->
    <!-- Flot -->
    <!-- <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script> -->
    <!-- Flot plugins -->
    <!-- <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script> -->
    <!-- DateJS -->
    <!-- <script src="../vendors/DateJS/build/date.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
  </body>
</html>
