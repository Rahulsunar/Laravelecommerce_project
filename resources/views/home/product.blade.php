<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Latest Products
            </h2>

        </div>
        <style>
            .product-list {
                list-style-type: none;
                /* Removes default bullet points */
                padding: 0;
                /* Removes default padding */
            }

            .product-list li {
                margin-bottom: 20px;
                /* Space between rows */
            }
        </style>
        <ul class="product-list row">
          @foreach($data['products'] as $product)
            <li class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <img src="{{asset('assets/images/products/'.$product->thumb_image)}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $product->title }}</h6>
                            <h5>Rs {{ $product->price }}</h5>
                            <span>Discount {{ $product->discount }}</span>
                        </div>
                        <div class="new">
                            <span>New</span>
                        </div>
                    </a>
                </div>
            </li>
            @endforeach
            
        </ul>


    </div>
    <div class="btn-box">
        <a href="">
            View All Products
        </a>
    </div>
    </div>
</section>

<!-- end shop section -->
