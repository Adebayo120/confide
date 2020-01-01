<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="main.css">
</head>
<body class="">
        <div class="container-fluid ">
         <div class="row justify-content-between shadow @yield('m')">
           <nav class="navbar navbar-expand-lg d-flex align-center navbar-success">
                <img src="{{asset('img/confide.svg')}}" class="navbar-brand ml-3 ml-md-5 img-fluid" alt="">
            </nav>
           <nav class="navbar navbar-expand-lg navbar-light">
                <button type="button" class="btn btn-success mr-2 mr-md-5">Become a Volunteer</button>
            </nav> 
         </div> 
      @yield('content')





    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <script>
        $(function () {
      $('[data-toggle="popover"]').popover()
    })
        </script>
</body>
</html>