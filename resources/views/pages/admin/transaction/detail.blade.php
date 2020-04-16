@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->user->name }}</h1>
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
                <table class="table-bordered">
                    <tr>
                        <th class="p-2">ID</th>
                        <td class="p-2">{{ $item->id }}</td>
                    </tr>
                    <tr>
                        <th class="p-2">Paket Travel</th>
                        <td class="p-2">{{ $item->travel_package->title }}</td>
                    </tr>
                    <tr>
                        <th class="p-2">Pembeli</th>
                        <td class="p-2">{{ $item->user->name }}</td>
                    </tr>
                    <tr>
                        <th class="p-2">Additional Visa</th>
                        <td class="p-2">$ {{ $item->additional_visa }}</td>
                    </tr>
                    <tr>
                        <th class="p-2">Total Transaksi</th>
                        <td class="p-2">$ {{ $item->transactions_total }}</td>
                    </tr>
                    <tr>
                        <th class="p-2">Status Transaksi</th>
                        <td class="p-2">{{ $item->transaction_status }}</td>
                    </tr>
                    <tr>
                        <th class="p-2">Detail Pembelian</th>
                        <td class="p-4">
                            <table class="table table-bordered align-self-center">
                                <tr>
                                    <th class="p-4">ID</th>
                                    <th class="p-4">Nama</th>
                                    <th class="p-4">Nationality</th>
                                    <th class="p-4">Visa</th>
                                    <th class="p-4">DOE Passport</th>
                                </tr>
                                @foreach ($item->details as $detail)
                                    <tr>
                                        <td class="p-4">{{ $detail->id }}</td>
                                        <td class="p-4">{{ $detail->username }}</td>
                                        <td class="p-4">{{ $detail->nationality }}</td>
                                        <td class="p-4">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                        <td class="p-4">{{ $detail->doe_passport }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                </table>
           </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection