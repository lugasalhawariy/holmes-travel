@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Gallery {{ $item->title }}</h1>
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
                <form action="{{ route('gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="travel_packages_id">Paket Travel</label>
                        <select name="travel_packages_id" id="travel_packages_id" class="form-control">
                            <option value="{{ $item->travel_packages_id }}">Jangan diubah</option>
                            @foreach ($travel_packages as $travel_package)
                                <option value="{{ $travel_package->id }}">
                                    {{ $travel_package->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="images">Image</label>
                        <input type="file" class="form-control" name="images" placeholder="Image">
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