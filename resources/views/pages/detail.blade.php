@extends('layouts.app')

@push('tambah-akhir-style')
  <link rel="stylesheet" href="{{ url('libraries/xzoom/xzoom.css') }}">
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
                  <h1>{{ $item->title }}</h1>
                  <p class="text-muted" style="font-size: large;">{{ $item->location }}</p>

                  @if ($item->galleries->count())
                    <div class="gallery">
                      <div class="xzoom-container">
                        <img src="{{ Storage::url($item->galleries->first()->images )}}" class="xzoom mt-3 mb-2" id="xzoom-default" width="100%" height="400px" xoriginal="{{ Storage::url($item->galleries->first()->images )}}">
                      </div>
                      <!-- thumbnails of gallery -->
                      <div class="xzoom-thumbs mb-5 text-center">
                      
                        @foreach ($item->galleries as $gallery)
                          <a href="{{ Storage::url($gallery->images) }}">
                            <img src="{{ Storage::url($gallery->images) }}" width="127.2" height="80" class="xzoom-gallery" xpreview="{{ Storage::url($gallery->images) }}">
                          </a>
                        @endforeach

                      </div>
                    </div>
                  @endif

                  <h3>Tentang Wisata</h3>
                  <p class="text-muted">
                    {!! $item->about !!}
                  </p>

                  <div class="row features pt-4">
                    <div class="col-md-4 border-right">
                      <img src="{{ url('images/ic_event.png') }}" alt="" class="img-featured">
                      <div class="description">
                        <h3>Featured Event</h3>
                        <p>
                          {{ $item->featured_event }}
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4 border-right">
                      <img src="{{ url('images/ic_foods.png') }}" alt="" class="img-featured">
                      <div class="description">
                        <h3>Foods</h3>
                        <p>
                          {{ $item->foods }}
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <img src="{{ url('images/ic_language.png') }}" alt="" class="img-featured">
                      <div class="description">
                        <h3>Language</h3>
                        <p>
                          {{ $item->language }}
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
                <img src="{{ asset('images/user_testimonial_1.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_2.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_3.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_4.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_5.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_6.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_7.png')}}" class="rounded-circle mx-1" width="45px">
                <img src="{{ asset('images/user_testimonial_8.png')}}" class="rounded-circle mx-1" width="45px">
              </div>

              <h4 class="pt-3 pb-2">Trip Information</h4>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">{{ \Carbon\Carbon::create($item->date_departure)->format('F n, Y') }}</td>
              </tr>
              <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">
                      {{ $item->day }}D {{ $item->night}}N
                  </td>
              </tr>
              <tr>
                  <th width="50%">Type of Trip</th>
                  <td width="50%" class="text-right">
                      {{ $item->type }}
                  </td>
              </tr>
              <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">
                      ${{ $item->price }},00 / person
                  </td>
              </tr> 
              </table>


            </div>

            <div class="join-container">
              @auth
                <form action="{{ route('checkout_process', $item->id )}}" method="post">
                  @csrf
                  <button submit="type" class="btn btn-block btn-join-now mt-3 py-2">
                    Join Now
                  </button>
                </form>
              @endauth
              @guest
                <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                  Login or Register to Join
                </a>
              @endguest
            </div>


          </div>
        </div>
      </div>  
    </div>
@endsection

@push('tambah-akhir-script')
  <script src="{{ url('libraries/xzoom/xzoom.min.js') }}"></script>
  <script>
    $(document).ready(function(){

      $(".xzoom, .xzoom-gallery").xzoom({
          
      });


    });
  </script>
@endpush