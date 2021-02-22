<!DOCTYPE html>
<html>
<head>
	<title>File Manager</title>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
	<style type="text/css">
		.fm .fm-breadcrumb .breadcrumb.active-manager{
    background-color: #f79a24;
}
.fm .fm-disk-list{
	display: none;
}
.fm .fm-breadcrumb .breadcrumb.active-manager .badge-secondary{
    background-color: #f79a24;
    color: #fff;
}
.fm .fm-breadcrumb .breadcrumb.active-manager .breadcrumb-item.active{
	color: #fff;
	font-weight: bold;
}
.fm .fm-breadcrumb .breadcrumb.active-manager .breadcrumb-item,.breadcrumb-item+.breadcrumb-item::before{
	color: #fff !important;
	
}
.fm-body{
	background: #fff;
}
.justify-content-between{
	background: #fff;
}
.fm *{
	border-color: #f79a24 !important;
}
.fm .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show>.btn-secondary.dropdown-toggle{
	background-color: #f79a24 !important;
	color: #fff;
}
.fm .btn.btn-default i, .btn.btn-secondary.active i{
	color: #fff !important;
}
.fm .btn.btn-default i, .btn.btn-secondary i {
    color: #9f0d0b !important;
}
.fm-modal {
    position: fixed !important;
    padding: 20px !important;
}
.btn-secondary{
	background-color: #fff;
}
.btn-secondary.disabled, .btn-secondary:disabled{
	background-color: #f1f1f1;
	</style>
}
</head>
<body>
<div id="fm"></div>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
</body>
</html>