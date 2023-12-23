<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
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

                            <span>Reviews (16)</span>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>

    </div>
    <div class="d-flex justify-content-center">
        {!! $data->links() !!}
    </div>
</div>
