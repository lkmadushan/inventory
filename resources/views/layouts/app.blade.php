<!DOCTYPE html>
<html>
<head>
    <title>ERP</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<script>
    window.Laravel = {
        csrfToken: '{{ csrf_token() }}'
    }
</script>
<body>
    @yield('content')
<script src="{{ url('js/app.js') }}"></script>
</body>
</html>
