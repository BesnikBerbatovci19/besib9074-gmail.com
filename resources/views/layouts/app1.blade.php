<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <script src="https://kit.fontawesome.com/7135c7649e.js" crossorigin="anonymous"></script>
    <title>@yield('name') </title>
    <link rel="stylesheet" href="/assets/css/paper-dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- Material Kit CSS -->
    <link rel="stylesheet" href="css/app1.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>


</head>
<body>


<div class="row " id ="body">
    <div class="col-12">

        @yield('content')
    </div>
</div>


</body>
</html>
