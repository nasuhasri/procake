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
                <?= $this->Html->image('/img/img.jpg', ['alt' => 'Profile Image', 'class' => 'img-circle profile_img']); ?>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <?php $name = $this->request->getSession()->read('name'); ?>
                <?php if ($name): ?>
                  <h2><?= ucfirst($name) ?></h2>
                <?php endif; ?>
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
                    <?= $this->Html->link('<i class="fa fa-home"></i> Dashboard', '/', ['escape' => false]) ?>
                  </li>
                  <li>
                    <?= $this->Html->link('<i class="fa fa-book"></i>Books', ['controller' => 'Books', 'action' => 'index'], ['escape' => false]) ?>
                  </li>
                  <li>
                    <?= $this->Html->link('<i class="fa fa-book"></i> Magazines', ['controller' => 'Magazines', 'action' => 'index'], ['escape' => false]) ?>
                  </li>
                  <li>
                    <?= $this->Html->link('<i class="fa fa-newspaper-o"></i> Newspapers', ['controller' => 'Newspapers', 'action' => 'index'], ['escape' => false]) ?>
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
                  <li>
                    <?=$this->Html->link(__('<i class="fa fa-user"></i> Users'), ['controller' => 'Users','action' => 'index'], ['escape' => false])?>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <?=$this->Html->link(__('<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout'), ['controller' => 'Users','action' => 'logout'], ['escape' => false])?>
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

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
  </body>
</html>
