@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        </div>

        <div class="row justify-content-center">
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Travel</th>
                                <th>User</th>
                                <th>Visa</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->travel_package->title }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>$ {{ $item->additional_visa }}</td>
                                    <td>$ {{ $item->transactions_total }}</td>
                                    <td>{{ $item->transaction_status }}</td>
                                    <td>

                                        {{-- tombol show --}}
                                        <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        {{-- tombol edit --}}
                                        <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        {{-- tombol delete --}}
                                        <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
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
                                        Tidak ada data untuk Transaksi
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