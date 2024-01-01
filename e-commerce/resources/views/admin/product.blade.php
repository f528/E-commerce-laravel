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
<style>
    .title {
        color: white;
        padding-top: 25px;
        font-size: 25px;
    }

    .inputProduct div {
        padding: 5px;
        margin: 4px;




    }

    label {
        display: inline-block;
        width: 200px;
    }

    input {
        color: black;
    }
</style>

<body>
    <!-- container-scroller -->
    @include('admin.containerscoller')
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial-navbar -->
    @include('admin.navbar')
    <!-- partial-body-dashboard -->
    <div class="container-fluid page-body-wrapper ">
        <div class="container" align= "center">
            <h1 class="title">Add Product</h1>
            <div class="inputProduct">
                <form wire:submit.prevent="update" action="{{ url('create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>

                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>

                    </div>
                    <div>
                        <label>Product Title</label>
                        <input class="text-dark border-success" type="text" name="title"
                            placeholder="Give a product title" required = "">
                    </div>
                    <div>
                        <label>Price</label>
                        <input class="text-dark border-success" type="number" name="price" placeholder="Give a price"
                            required = "">
                    </div>
                    <div>
                        <label>Description</label>
                        <input class="text-dark border-success" type="text" name="description"
                            placeholder="Give a description" required = "">
                    </div>
                    <div>
                        <label>Quantity</label>
                        <input class="text-dark border-success" type="number" name="quantity"
                            placeholder="Product uantity" required = "">
                    </div>
                    <div>
                        <label>Product Image</label>
                        <input type="file" name="image">
                    </div>

                    <button class="btn btn-success p-3 m-3 w-25 shadow-lg translate-x-6" type="submit">Send</button>

                </form>
            </div>


        </div>




    </div>
    <!-- partial-javascript -->
    </div>
    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
