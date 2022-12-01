<!doctype html>
<html lang="en">
  <head>
    <title> Home Page </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">

    <!--Alertify CSS -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
   
   <!-- data table  Css -->
   <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"  />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css"/>

  </head>


  <body>

   <div class="app">

    <?= $this->include('layout/include/navbar.php') ?>
    <?= $this->renderSection('content') ?>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.3.1.slim.min.js')?>" ></script>
    <script src="<?= base_url('assets/js/popper.min.js')?>"     ></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"  ></script>
    <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>

    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- SWEEt alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    
    
    <!-- datatable js -->
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      });
    </script>


    <script>
      $(document).ready(function () {
        swal({
          title: "hello Student",
          text: "your Page is ready",
          icon:"info",
          button: "ok",
        });
      });
    </script>
   
   <script>
      $(document).ready(function () {
        <?php if(session()->getFlashdata('status')) { ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?= session()->getFlashdata('status') ?>');
          <?php }?>
      });
    </script>

    <?= $this->renderSection('scripts') ?>
  </body>
</html>