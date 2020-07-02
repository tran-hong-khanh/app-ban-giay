<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mart</title>
    <link rel="stylesheet" media="screen" href="./home/assets/styles/main.css">
    <link rel="stylesheet" media="screen" href="home/assets/styles/owl.carousel.min.css">
<link rel="stylesheet" media="screen" href="home/assets/styles/owl.theme.default.min.css">
<link rel="stylesheet" href="home/libs/font-awesome/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="homepage sidebar-primary">
    @include('homepage.layouts._partials.header')
    @yield('content')
    @include('homepage.layouts._partials.footer')
    @yield('page-script')
</body>
</html>