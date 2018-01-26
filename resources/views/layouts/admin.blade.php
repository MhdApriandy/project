
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Panel - LKP Media Com</title>
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('com.png')}}">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="{{asset('datatables/datatables.min.css')}}"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"><i class="fa fa-user-circle-o">&nbsp;{{ Auth::user()->name }}</i></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('berita1.index')}}">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-o"></i>
            <span class="nav-link-text">Profil</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{ route('katapengantar1.index')}}">&#8226;  Kata Pengantar</a>
            </li>
            <li>
              <a href="{{ route('visimisi1.index')}}">&#8226;  Visi Misi</a>
            </li>
            <li>
              <a href="{{ route('struktur1.index')}}">&#8226;  Struktur</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('galeri1.index')}}">
            <i class="fa fa-fw fa-image"></i>
            <span class="nav-link-text">Galeri</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('foto1.index')}}">
            <i class="fa fa-fw fa-picture-o"></i>
            <span class="nav-link-text">Foto</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('info1.index')}}">
            <i class="fa fa-fw fa-info"></i>
            <span class="nav-link-text">Info</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('ebook1.index')}}">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">E-Book</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('pendaftaran1.index')}}">
            <i class="fa fa-fw fa-plus-square-o"></i>
            <span class="nav-link-text">Pendaftaran</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="{{ route('hubungi1.index')}}">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text">Hubungi Kami</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="content-wrapper">
      <div class="container-fluid">
        @include('partials.alerts')
        @yield('content')

      </div>
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Media Com 2018</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
              @else
              <h5 class="modal-title" id="exampleModalLabel">{{ Auth::user()->name }}, Yakin Ingin Keluar?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Pilih "Keluar" di bawah jika Anda siap mengakhiri sesi Anda saat ini</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <a class="btn btn-primary" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Keluar</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
              @endguest
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <!-- Page level plugin JavaScript-->
      <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
      <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
      <!-- Custom scripts for this page-->
      <script src="{{asset('admin/js/sb-admin-datatables.min.js')}}"></script>
      <script src="{{asset('admin/js/sb-admin-charts.min.js')}}"></script>
      <!-- Datatables -->
      <script type="text/javascript" src="{{asset('datatables/datatables.min.js')}}"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#datatables').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
          } );
        } );
      </script>
      <!-- Tiny MCE -->
      <script type="text/javascript" src="{{asset('tiny/tiny_mce/tiny_mce.js')}}"></script>
      <script type="text/javascript">
        tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Style formats
        style_formats : [
        {title : 'Bold text', inline : 'b'},
        {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
        {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
        {title : 'Example 1', inline : 'span', classes : 'example1'},
        {title : 'Example 2', inline : 'span', classes : 'example2'},
        {title : 'Table styles'},
        {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],

        // Replace values for the template plugin
        template_replace_values : {
          username : "Some User",
          staffid : "991234"
        }
      });
    </script>    
  </div>
</body>

</html>
