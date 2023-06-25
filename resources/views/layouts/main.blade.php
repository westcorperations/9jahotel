<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.includes.header')

</head>


<body>
    @yield('contents')
</body>


@include('layouts.includes.scripts')
@yield('scripts')

</html>