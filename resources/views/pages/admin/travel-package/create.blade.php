@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
        </div>

        @if ($errors->any())
            
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <div class="row justify-content-center">
           <div class="card-body">
                <form action="{{ route('travel-package.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" value="{{ old('location') }}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" value="{{ old('about') }}" id="about" rows="10" class="d-block w-100 form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" value="{{ old('featured_event') }}">
                    </div>
                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control" name="foods" value="{{ old('foods') }}">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" value="{{ old('language') }}">
                    </div>
                    <div class="form-group">
                        <label for="date_departure">Departure Date</label>
                        <input type="date" class="form-control" name="date_departure" value="{{ old('date_departure') }}">
                    </div>
                    <div class="form-group">
                        <label for="day">Quantity Day</label>
                        <input type="number" class="form-control" name="day" value="{{ old('day') }}">
                    </div>
                    <div class="form-group">
                        <label for="night">Quantity Night</label>
                        <input type="number" class="form-control" name="night" value="{{ old('night') }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                    </div>

                    {{-- BUTTON OF FORM CREATE PAGES --}}
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>

                </form>
           </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection