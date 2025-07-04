
<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Student Reporting System</title>
		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		@include('admin.includes.head')

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			@include('admin.includes.header')
			<!-- end: header -->
			<div class="inner-wrapper">

				@include('admin.includes.sidebar')

				@yield('content')
			</div>
		</section>

		@include('admin.includes.script')
	</body>
</html>