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

    <?= $this->Html->script('/node_modules/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>

    <?=$this->fetch('meta')?>
    <?=$this->fetch('css')?>
    <?=$this->fetch('script')?>

    <?=$this->Html->css('/node_modules/bootstrap/dist/css/bootstrap.min.css')?>
    <?=$this->Html->css('/node_modules/font-awesome/css/font-awesome.min.css')?>
    <?=$this->Html->css('custom.min.css')?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- page content -->
        <div class="container">
            <?=$this->Flash->render()?>
            <?=$this->fetch('content')?>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
  </body>
</html>
