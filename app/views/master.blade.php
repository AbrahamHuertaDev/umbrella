<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="{{Helper::assets('umbrella.png')}}"/>
	<link rel="shortcut icon" type="image/png" href="{{Helper::assets('umbrella.png')}}"/>
	<title>Umbrella Framework</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<style>
		
		body{
			text-align: center;
			font-family: 'Ubuntu', sans-serif;
		}

		img{
			width: 200px;
			margin-top: 100px;
			margin-bottom: 50px;
		}

		h4{
			font-size: 40px;
			color: #ddd;
			margin-bottom: 10px;
		}
		a{
			text-decoration: none;font-weight: bold;
			color: #788091;
		}
		p{
			font-size: 12px;
			color: #788091;
		}
	</style>
</head>
<body>
	@yield('content')
</body>
</html>