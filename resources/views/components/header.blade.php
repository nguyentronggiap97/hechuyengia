<meta charset="utf-8">
<meta content="noindex,nofollow" name="robots">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Honda">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--favicon icon-->
<link rel="icon" type="image/png" href="assets/img/favicon.png">

{{-- <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/bootstrap-grid.min.css')}}" rel="stylesheet"> --}}


<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-grid.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-reboot.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery-ui.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-select.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">



{{-- <title>@php echo isset($title) ? $title : 'Hệ thống quản lý nội dung' @endphp</title> --}}
<title>
    @yield('title','Hệ thống quản lý nội dung')
</title>

{{-- <link href="{{asset('')}}" rel="stylesheet"> --}}


@yield('more.css')