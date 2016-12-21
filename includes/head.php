<!doctype html>

<html>

<head>
	<title>Заголовок</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://yastatic.net/jquery/2.2.0/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="script/jquery.js"><\/script>')
	</script>
	<script src="script/jquery.validate.min.js"></script>
	<script src="script/wow.min.js"></script>
	<script src="script/jquery.magnific-popup.min.js"></script>
	<script src="script/flickity.pkgd.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css" />
	<!--<link rel="stylesheet" href="css/wallop.css">-->
	<link rel="stylesheet" href="css/flickity.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<!--[if lt IE 9]>
<link rel="stylesheet" href="/reject/reject.css" media="all" />
<script type="text/javascript" src="reject/reject.min.js"></script>
<![endif]-->

	<script>
		new WOW().init();
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#popup").validate({
				rules: {
					name: {
						required: true,
						maxlength: 16,
					},
					tel: {
						required: true,
					},
				},
				messages: {
					name: {
						required: "Это поле обязательно для заполнения",
					},
					tel: {
						required: "Это поле обязательно для заполнения",
					},
				}
			});
			$("#top_form").validate({
				rules: {
					name: {
						required: true,
						maxlength: 16,
					},
					email: {
						required: true,
					},
				},
				messages: {
					name: {
						required: "Это поле обязательно для заполнения",
					},
					email: {
						required: "Это поле обязательно для заполнения",
						email: "Введите верный email адрес",
					},
				}
			});
		});
	</script>
</head>
