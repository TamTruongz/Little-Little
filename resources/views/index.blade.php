<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little & Little</title>

    <link rel="shortcut icon" href="/images/Little & Little Logo.png" type="image/x-icon">

    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- CSS -->
    @foreach (glob(public_path('css/*.css')) as $file)
    <link rel="stylesheet" href="{{ asset('css/' . basename($file)) }}">
    @endforeach
</head>

<body>
    <!-- ==== Header ===== -->
    @include('common.header')
    <!-- ==== End Header ==== -->

    <!-- Content -->
    @yield('content')
    <!-- ==== End Content ==== -->

    <!-- Calendar -->
    @include('common.calendar')
    <!-- End Calendar -->
</body>

<!-- === JS === -->
@foreach (glob(public_path('js/*.js')) as $file)
<script src="{{ asset('js/' . basename($file)) }}"></script>
@endforeach
</html>