@extends('layouts.app')

@push('tambah-akhir-style')
  <link rel="stylesheet" href="libraries/xzoom/xzoom.css">
@endpush

@section('content')
        <!-- main content -->
    <!-- background linear -->
    <div class="bg-linear"></div>
    <!-- content -->
    <div class="container pt-3 pb-3">
      <div class="section section-travel-detail">
        <div class="row">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="card card-detail mx-auto p-4">
                  <h1>BROMO</h1>
                  <p class="text-muted" style="font-size: large;">Republic Of Indonesia</p>

                  <div class="gallery">
                    <div class="xzoom-container">
                      <img src="images/bromo.jpg" class="xzoom mt-3 mb-2" id="xzoom-default" width="100%" height="400px">
                    </div>
                    <!-- thumbnails of gallery -->
                    <div class="xzoom-thumbs mb-5">
                      <a href="images/bromo.jpg">
                        <img src="images/bromo.jpg" width="127.2" height="80" class="xzoom-gallery" xpreview="images/bromo.jpg">
                      </a>
                      <a href="images/header.jpg">
                        <img src="images/header.jpg" width="127.2" height="80" class="xzoom-gallery" xpreview="images/header.jpg">
                      </a>
                      <a href="images/bromo-2.jpg">
                        <img src="images/bromo-2.jpg" width="127.2" height="80" class="xzoom-gallery" xpreview="images/bromo-2.jpg">
                      </a>
                      <a href="images/bromo-3.jpg">
                        <img src="images/bromo-3.jpg" width="127.2" height="80" class="xzoom-gallery" xpreview="images/bromo-3.jpg">
                      </a>
                      <a href="images/bromo-4.jpg">
                        <img src="images/bromo-4.jpg" width="127.2" height="80" class="xzoom-gallery" xpreview="images/bromo-4.jpg">
                      </a>
                    </div>
                  </div>

                  <h3>Tentang Wisata</h3>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ad excepturi tempore adipisci possimus minus at id laborum corrupti provident. Voluptatibus, eum quidem. Eius, aspernatur provident neque ratione asperiores dolorum?
                  </p>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui perferendis numquam doloribus animi enim similique quod maiores, accusantium commodi ullam molestiae corrupti, nostrum officiis rem nulla quo nam. Ut, numquam.
                  </p>

                  <div class="row features pt-4">
                    <div class="col-md-4 border-right">
                      <img src="images/ic_event.png" alt="" class="img-featured">
                      <div class="description">
                        <h3>Featured Event</h3>
                        <p>
                          Camp and BBQ
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4 border-right">
                      <img src="images/ic_foods.png" alt="" class="img-featured">
                      <div class="description">
                        <h3>Foods</h3>
                        <p>
                          Ikan bakar
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <img src="images/ic_language.png" alt="" class="img-featured">
                      <div class="description">
                        <h3>Language</h3>
                        <p>
                          Bahasa Indonesia
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card card-visit px-3 py-3">
              <h4>Members</h4>
              <div class="members d-flex mt-2 pb-4">
                <img src="images/user_testimonial_1.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_2.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_3.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_4.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_1.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_2.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_3.png" class="rounded-circle mx-1" width="45px">
                <img src="images/user_testimonial_4.png" class="rounded-circle mx-1" width="45px">
              </div>

              <h4 class="pt-3 pb-2">Trip Information</h4>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">19 Aug, 2020</td>
              </tr>
              <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">
                      4D 3N
                  </td>
              </tr>
              <tr>
                  <th width="50%">Type of Trip</th>
                  <td width="50%" class="text-right">
                      Open Trip
                  </td>
              </tr>
              <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">
                      $80,00 / person
                  </td>
              </tr> 
              </table>


            </div>

            <div class="join-container">
              <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                  Join Now
              </a>
            </div>


          </div>
        </div>
      </div>  
    </div>
@endsection

@push('tambah-akhir-script')
  <script src="libraries/xzoom/xzoom.min.js"></script>
  <script>
    $(document).ready(function(){

      $(".xzoom, .xzoom-gallery").xzoom({
          
      });


    });
  </script>
@endpush