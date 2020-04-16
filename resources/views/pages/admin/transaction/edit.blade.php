@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Status Transaksi {{ $item->user }}</h1>
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
                <form action="{{ route('transaction.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="transaction_status">Status</label>
                    <select name="transaction_status">
                        <option value="{{ $item->transaction_status }}">Tetap {{ $item->transaction_status }}</option>

                        <option value="IN_CART">In cart</option>
                        <option value="PENDING">Pending</option>
                        <option value="SUCCESS">Success</option>
                        <option value="CANCEL">Cancel</option>
                        <option value="FAILED">Failed</option>
                    </select>

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