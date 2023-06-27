<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.user.includes.head')

</head>


<body>
    @include('layouts.user.includes.preloader')
    @yield('contents')
    
</body>


@include('layouts.user.includes.scripts')
@yield('scripts')

</html>