<section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                {{$produk->nama}}
              </h2>
              <h3>
                Rp. {{number_format($produk->harga)}}  
              </h3>
            </div>
            <p>
                {!! nl2br($produk->deskripsi)!!}
            </p>
            <h4>Stok: {{$produk->stok}}</h4>           
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="{{url('public')}}/images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>