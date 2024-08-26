<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Klook Taipei 101 Observatory Ticket')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqk1w2/knoG80kdk37i27WSgShJp7tpIVWpqxc9Lfcf+R/L61wsB+dDqL+LhOECvJ8q0o+6c=" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container">
    @include('admin.body.header')
    
    @yield('content')
    @include('admin.body.admin_content')
    
    @include('admin.body.footer')
</div>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
