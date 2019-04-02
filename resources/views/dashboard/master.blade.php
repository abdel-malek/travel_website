<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-free/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 07:41:39 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('css/dashboard/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('css/dashboard/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{url('css/dashboard/vendor.bundle.addons.css')}}">
    <link href="{{url('css/dashboard/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('css/dashboard/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('img/favicon.png')}}" />

  <style>
.dashboard_active{
    display:none;
}
.dashboard{
    display:block;
}

.about_active{
    display:none;
}
.about{
    display:block;
}

.admin_active{
    display:none;
}
.admin{
    display:block;
}

.package_active{
    display:none;
}
.package{
    display:block;
}

.day_active{
    display:none;
}
.day{
    display:block;
}

.message_active{
    display:none;
}
.message{
    display:block;
}

.gallery_active{
    display:none;
}
.gallery{
    display:block;
}

.social_media_active{
    display:none;
}
.social_media{
    display:block;
}

.table td, .table th {
    white-space: pre-line;
}

.nav .nav-item.dropdown .dropdown-toggle:after, .navbar-nav .nav-item.dropdown .dropdown-toggle:after{
    display:none;
}
  </style>
</head>

<body>
<div class="container-scroller">
@include('dashboard.partials.navbar')
      <div class="main-panel">
        @yield('content')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('dashboard.partials.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @if(Session::get('edit_image') == FALSE)
  <!-- plugins:js -->
  <script src="{{url('js/dashboard/vendor.bundle.base.js')}}"></script>
  <script src="{{url('js/dashboard/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{url('js/dashboard/off-canvas.js')}}"></script>
  @endif
  <script src="{{url('js/dashboard/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('js/dashboard/dashboard.js')}}"></script>
  @if(Session::get('edit_image') == FALSE)
    <script src="{{url('js/dashboard/fileinput.js')}}" type="text/javascript"></script>
    @endif
  <script src="{{url('js/safar/package.js')}}"></script>
  <script>
            function delete_row(obj,id,url){
            if (confirm("Are you sure?")) {
            	$.ajax({
                     headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
					type: "post",
					url: url,
					dataType: "json",
					data: {
						id: id
					}
				}).done(function (data) {
                    $(obj).parent().parent().remove();
					console.log(data);
				});
            }
        }
        </script>
        @if(Session::get('edit_image') == FALSE)
        <script>
        
        $("#image_add_one_day").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});


     
        $("#image_edit_one_day").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});


$(".image_add_day").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});

$(".image_edit_day").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});

     
        $("#image_add_gallery").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});

     
        $("#image_edit_gallery").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});

  </script>
  @endif
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-free/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 07:42:18 GMT -->
</html>