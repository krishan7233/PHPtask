<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

@include('layout.header')
<body>

@include('layout.navigation')

@yield('content')

<!-- Nav Bar Ends here -->

@include('layout.footer')