
@if( !Session::get("nama_admin") )
  <script type="text/javascript">
    window.location=("login");
  </script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  
  <title>Aplikasi Pengajar</title>

  <!-- Favicons -->
  <link href="/asset1/img/logo.png" rel="icon">
  <link href="/asset1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="/asset1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!--external css-->
  <link href="/asset1/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/asset1/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="/asset1/lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="/asset1/lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="/asset1/lib/bootstrap-timepicker/compiled/timepicker.css" />
  <!-- <link rel="stylesheet" type="text/css" href="/asset1/lib/bootstrap-datetimepicker/datertimepicker.css" /> -->
  <!-- Custom styles for this template -->

  <link href="/asset1/css/style.css" rel="stylesheet">
  <link href="/asset1/css/style-responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">




  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="{{ route('dashboard') }}" class="logo"><b>APLIKASI<span>PENGAJAR</span></b></a>
      <!--logo end-->


      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->          
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ route('pesan') }}">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-warning">{{Session::get("pesan")}}</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>              
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ route('pengajar.index2') }}">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">{{Session::get("pengajar")}}</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>              
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('admin.logout') }}" onclick="return confirm('Apakah Anda Yakin ?')">Logout</a></li>

          <li><a class="logout" href="{{ route('admin.changePassword') }}">Change Password</a></li>

        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
           <p class="centered"><a href="{{ route('dashboard') }}"><img src="/asset1/img/logoss.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{Session::get("nama_admin")}}</h5>
          
          <li class="mt">
            <a href="{{ route('dashboard') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>          

          <li class="mt">
            <a href="{{ route('pengajar.index') }}">
              <i class="fa fa-users"></i>
              <span>Data User</span>
              </a>
          </li>

          <li class="mt">
            <a href="{{ route('materi.index') }}">
              <i class="fa fa-book"></i>
              <span>Kelola Materi</span>
              </a>
          </li>
          
          <li class="mt">
            <a href="{{ route('admin.index') }}">
              <i class="fa fa-user"></i>
              <span>Data Admin</span>
              </a>
          </li>
                  
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    @yield('content')

    @include('layouts.app.footer')
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->


  <script src="/asset1/lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="/asset1/lib/advanced-datatable/js/jquery.js"></script>
  <script src="/asset1/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/asset1/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="/asset1/lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="/asset1/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/asset1/lib/jquery.scrollTo.min.js"></script>
  <script src="/asset1/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="/asset1/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="/asset1/lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="/asset1/lib/common-scripts.js"></script>
  <!--script for this page-->

  <!--script for this page-->  
  <script type="text/javascript" src="/asset1/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="/asset1/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="/asset1/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="/asset1/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="/asset1/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="/asset1/lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="/asset1/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="/asset1/lib/advanced-form-components.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="/asset1/lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "/asset1/lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "/asset1/lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>

</body>

</html>
