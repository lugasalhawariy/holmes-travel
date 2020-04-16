@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">{{ $items->count() }} Photo</h1>
          <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Gallery Photos
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
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->travel_package->id }}</td>
                                    <td>{{ $item->travel_package->title }}</td>
                                    <td>
                                        <img src="{{ Storage::url($item->images ) }}" width="150px" alt="" class="img-thumbnail">
                                    </td>
                                    <td>
                                        {{-- tombol edit --}}
                                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt" ></i>
                                        </a>

                                        {{-- tombol delete --}}
                                        <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
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