<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>

<body>
@include('includes.spinner')
@include('includes.navbar')

@yield('content')

@include('includes.footer')
@include('includes.backToUp')
@include('includes.footerJS')

</body>
</html>
