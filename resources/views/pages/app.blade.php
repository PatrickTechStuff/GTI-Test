<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    
    <!-- Tab Name Icon -->
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> --}}

   

    <!-- Jquery cropper image libraries-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

    <!--Stream libraries-->
    <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">
    
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Bootstrap 5 Libraries -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous --}}
    

</head>
<body>
    <div id="app">
        <main class="py-4 text-center">
           <h3>PATRICK BUGACIA</h3>
        </main>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <script src="/assets_sidebar/js/jquery.min.js"></script>
        <script src="/assets_sidebar/js/popper.js"></script>
        <script src="/assets_sidebar/js/bootstrap.min.js"></script>
        <script src="/assets_sidebar/js/main.js"></script>
</body>

</html>


