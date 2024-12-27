<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance Management System</title>
    @include('layouts.link')
</head>
<body>
    <div id="wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @include('layouts.settings')
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.footer')
        @include('layouts.footer-script') 
    </div>
    @include('includes.flash')
</body>
</html>
