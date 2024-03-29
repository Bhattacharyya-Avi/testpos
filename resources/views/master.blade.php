
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POS
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/font-awesome.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('/css/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('/css/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('/css/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url(' /css/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('/css/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/dataTables.bootstrap.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/fileinput.min.css')}}">

  <!-- icheck -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('/css/_all.css')}}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- jQuery 3 -->
  <script src="{{url('/js/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{url('/js/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('/js/bootstrap.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="{{url('/js/raphael.min.js')}}"></script>
  <script src="{{url('/js/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{url('/js/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{url('/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{url('/js/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{url('/js/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{url('/js/moment.min.js')}}"></script>
  <script src="{{url('/js/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{url('/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{url('/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{url('/js/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('/js/fastclick.js')}}"></script>
  <!-- Select2 -->
  <script src="{{url('/js/select2.full.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{url('/js/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('/js/demo.js')}}"></script>
  <script src="{{url('/js/fileinput.min.js')}}"></script>

  <!-- ChartJS -->
  <script src="{{url('/js/Chart.js')}}"></script>

  <!-- icheck -->
  <script src="{{url('/js/icheck.min.js')}}"></script>

  <!-- DataTables -->
<script src="{{url('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('/js/dataTables.jquery-ui.js')}}"></script>




</head>
<body class="hold-transition skin-blue sidebar-mini">


 @include('backend.partial.header')


  <!-- Left side column. contains the logo and sidebar -->

 @include('backend.partial.sideber') 
 
<div class="control-sidebar-bg"></div>
</div>

  <!-- Content Wrapper. Contains page content -->
  
@yield('content') 



  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    });
  </script>

  @include('backend.partial.footer')

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

</body>
</html>
