{{-- nav-authentication --}}
<x-app-layout>

</x-app-layout>
{{-- nav-authentication --}}

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
    <div class="container-fluid page-body-wrapper">
        <div class="container" align= "center">
            <table>
                <tr style="background-color: grey">
                    <td style="padding: 20px">Title</td>
                    <td style="padding: 20px">Price</td>
                    <td style="padding: 20px">Description</td>
                    <td style="padding: 20px">Quantity</td>
                    <td style="padding: 20px">Image</td>
                    <td style="padding: 20px">Update</td>
                    <td style="padding: 20px">Delete</td>

                </tr>
                @foreach ($data as $item)
                    <tr style="background-color: black; justify-center ;border:1px solid;">
                        <td style="padding: 20px; border:1px solid">{{ $item->title }}</td>
                        <td style="padding: 20px;border:1px solid;">{{ $item->price }}</td>
                        <td style="padding: 20px ;border:1px solid;">{{Str::limit($item->description, 20, $end='.......')}}</td>
                        <td style="padding: 20px">{{ $item->quantity }}</td>
                        <td style="padding: 20px"><img  height="100px" src="/public/image/{{ $item->image }}" alt=""></td>
                    <td style="padding: 20px">
                        <a  class="btn btn-success" href="">Update</a>
                    </td>
                    <td style="padding: 20px">
                          <a class="btn btn-danger" href="">Delete</a>
                    </td>

                    </tr>


                @endforeach

            </table>
            <div class="justify-content-center">
                 {!! $data->links() !!}
            </div>

        </div>

    </div>

    <!-- partial-javascript -->
    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
