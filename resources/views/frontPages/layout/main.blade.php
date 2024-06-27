<!DOCTYPE html>
<html lang="en">
<head>
@include('frontPages.includes.head')
</head>

<body>
@include('frontPages.includes.spinner')
@include('frontPages.includes.navbar')

@yield('content')

@include('frontPages.includes.footer')
@include('frontPages.includes.backToUp')
@include('frontPages.includes.footerJS')

</body>
</html>
