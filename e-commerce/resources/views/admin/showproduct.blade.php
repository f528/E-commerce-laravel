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
    <div class="container-fluid page-body-wrapper wire:submit.prevent="update"">


        <div class="container" align= "center">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss= "alert">X</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
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
                        <td style="padding: 20px ;border:1px solid;">
                            {{ Str::limit($item->description, 20, $end = '.......') }}</td>
                        <td style="padding: 20px">{{ $item->quantity }}</td>
                        <td style="padding: 20px"><img height="100px" src="/public/image/{{ $item->image }}"
                                alt=""></td>
                        <td style="padding: 20px">
                            <a class="btn btn-success" href="{{ url('updateproduct', $item->id) }}">Update</a>
                        </td>
                        <td style="padding: 20px">
                            <a class="btn btn-danger" href="{{ url('deleteproduct', $item->id) }}">Delete</a>
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
