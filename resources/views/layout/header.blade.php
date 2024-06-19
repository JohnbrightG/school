<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>School - {{$page_title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="icon" type="image/png"  href="{{ asset('assets/img/logo.png') }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">
	<link href="{{ asset('assets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/assets/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/assets/css/lobibox.min.css') }}" rel="stylesheet" />
	<!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    
</head>

<body>
<div class="container-xxl position-relative d-flex p-0">

<style>
.view i,.edit i,.delete i{padding: 5px;font-size: 14px;}
.view i{color:#3d78e3;}
.delete i{color:#fd4797;}
</style>
