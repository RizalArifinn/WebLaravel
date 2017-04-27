<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
	  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	</head>

	<body style="background-color:#e7e7e7;">
    <div class="container-fluid" style="margin-top:20px;">
			<div class="container">
				<div class="panel panel-info">
	        <div class="panel-heading">
						@yield('heading')
					</div>

					<div class="panel-body">
						@yield('body')
						@yield('pagination')
					</div>

					<div class="panel-footer">
						@yield('footer')
					</div>
				</div>
			</div>
    </div>
	</body>
</html>
