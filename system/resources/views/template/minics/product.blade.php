<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row" style="display : flex">
        @foreach($list_produk as $produk)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{url('public')}}/images/p1.png" alt="">
              <a href="{{url('detail', $produk->id)}}" class="add_cart_btn">
                <span>
                  See detail
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
              {{$produk->nama}}
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> {{$produk->harga}}
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      <div class="btn_box" style="align-content: center">
        <a href="product" class="view_more-link">
          View More
        </a>
      </div>
    </div>
  </section>