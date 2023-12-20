
{{--nav-authentication--}}
<x-app-layout>

</x-app-layout>
{{--nav-authentication--}}

{{-- Container-dashboard========================== --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <!-- container-scroller -->
    @include('admin.containerscoller')
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial-navbar -->
    @include('admin.navbar')
    <!-- partial-body-dashboard -->
    @include('admin.bodydash')
    <!-- partial-javascript -->
    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
