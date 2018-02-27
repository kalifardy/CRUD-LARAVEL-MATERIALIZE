<!DOCTYPE html>
<html>
    <head>
    	<!-- judul pada bar -->
        <title>CrudMaterialize</title>
        <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, use-scalable=no" name="viewport" >
	@section('css')

	@show
</head>
<body>
	@section('header')
	@include('layouts.header')
	@show

	<div class="container">
		@yield('content')
	</div>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}">
<script type="text/javascript">
	(function($){$(function(){
		$('.button-collapse').sideNav();
	});
})(jquery);
</script>
</body>
