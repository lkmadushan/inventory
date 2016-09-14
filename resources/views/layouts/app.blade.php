<!DOCTYPE html>
<html>
<head>
    <title>ERP</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<script>
    window.Laravel = {
        csrfToken: '{{ csrf_token() }}'
    }
</script>
<body>
@yield('content')

@yield('scripts')
</body>
</html>
