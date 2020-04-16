@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
          <form class="form-inline" action="{{ route('travel-package.index') }}">
            @csrf
            <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Paket Travel
           </a>
        </div>

        <div class="row justify-content-center">
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Type</th>
                                <th>Departure Date</th>
                                <th>Duration</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->date_departure }}</td>
                                    <td>{{ $item->day }}D {{ $item->night }}N</td>
                                    <td>{{ $item->type }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>
                                        {{-- tombol edit --}}
                                        <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        {{-- tombol delete --}}
                                        <form action="{{ route('travel-package.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')

                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center p-5">
                                        Tidak ada data untuk Paket Travel
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                   </table>
               </div>
           </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection