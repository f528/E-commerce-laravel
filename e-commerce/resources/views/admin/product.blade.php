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

    .inputProduct div  {
        padding: 5px;
        margin: 4px;




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
    <div class="container-fluid page-body-wrapper">
        <div class="container" align= "center">
            <h1 class="title">Add Product</h1>
            <div class="inputProduct">
                <div>
                    <label>Product Title</label>
                    <input type="text" name="title" placeholder="Give a product title" required = "">
                </div>
                  <div>
                    <label>Product Title</label>
                    <input type="text" name="title" placeholder="Give a product title" required = "">
                </div>
                  <div>
                    <label>Product Title</label>
                    <input type="text" name="title" placeholder="Give a product title" required = "">
                </div>
                  <div>
                    <label>Product Title</label>
                    <input type="text" name="title" placeholder="Give a product title" required = "">
                </div>



            </div>


        </div>
        <!-- partial-javascript -->
    </div>
    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
