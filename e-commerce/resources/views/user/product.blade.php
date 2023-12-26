<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>

                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                </div>
                <div>
                    <form action="{{ url('search') }}" method="get" class="form-inline "
                        style="margin:10px; float:right;padding;5px;">
                        <input type="search" name="search" placeholder="search">

                        <input type="submit" value="search" class="btn btn-success">
                    </form>
                </div>
            </div>


            @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>T{{ $item->title }}</h4>
                            </a>
                            <h6>{{ $item->price }} $</h6>
                            <p>{{ $item->description }}</p>
                            <h4>Quantity : {{ $item->quantity }}</h4>

                            <form action="{{ url('addcart',$data->id) }}" method="POST">
                                @csrf
                                <input type="number" value="1" min="1" class="form-control w-25 m-1 " name="quantity">
                                <input type="submit"  class="btn btn-primary" value="Add Cart">

                            </form>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>

    </div>
    @if (method_exists($data, 'links'))
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
    @endif
</div>
