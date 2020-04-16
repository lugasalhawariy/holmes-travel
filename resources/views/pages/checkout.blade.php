@extends('layouts.checkout')

@section('title', 'Check Booking Travel')

@push('tambah-akhir-style')
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <!-- main content -->
        <!-- background linear -->
        <div class="bg-linear"></div>

        <div class="section section-checkout-detail">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Detail</li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-checkout pt-5 pb-0 pl-5 pr-5">
                                    <h1>Who is Going?</h1>
                                    <p class="text-muted">Pilih paket {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>
                                    <table class="table table-responsive-sm text-center mt-3">
                                        <thead>
                                            <tr>
                                                <td class="align-middle">Picture</td>
                                                <td class="align-middle">Name</td>
                                                <td class="align-middle">Nationality</td>
                                                <td class="align-middle">VISA</td>
                                                <td class="align-middle">Passport</td>
                                                <td class="align-middle"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
    
                                            @forelse ($item->details as $detail)
                                                <tr>
                                                    <td class="align-middle"><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" style="width: 40px;" class="rounded-circle"></td>
                                                    <td class="align-middle">{{ $detail->username }}</td>
                                                    <td class="align-middle">{{ $detail->nationality }}</td>
                                                    <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                                    <td class="align-middle">{{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Non-Active' }}</td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('checkout-remove', $detail->id) }}" class="close">
                                                            <img src="{{ url('images/ic_close@2x.png') }}" style="width: 25px;">
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        No visitor
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>

                                    <div class="add-members">

                                        <form action="{{ route('checkout-create', $item->id) }}" class="form-inline pt-3 text-center" method="POST">
                                            @csrf
                                            <label for="username" class="sr-only"></label>
                                            <input type="text" class="form-control mr-1 my-2" style="width: 130px;" placeholder="Username" required name="username">

                                            <label for="nationality" class="sr-only"></label>
                                            <input type="text" class="form-control mr-1 my-2" style="width: 50px;" placeholder="Nationality" name="nationality" required name="nationality">

                                            <label for="is_visa" class="sr-only"></label>
                                            <select name="is_visa" id="is_visa" class="form-control mx-1 my-2" style="width: 150px;" required>
                                                <option value="">Choose Visa</option>
                                                <option value="1">30 Days</option>
                                                <option value="0">N/A</option>
                                            </select>

                                            <label for="doe_passport" class="sr-only"></label>
                                            <div class="input-group">
                                                <input type="text" class="datepicker mx-1 my-2" style="width: 130px;" required name="doe_passport">
                                            </div>

                                            <button class="btn btn-add-now mx-2" type="submit">
                                                Add Now
                                            </button>

                                        </form>

                                        <h5 class="mt-5">Note</h5>
                                        <p class="text-muted pb-3">
                                            Keamanan akun anda tanggung jawab kami
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-information-checkout p-4 border-bottom-0">
                            <h2 class="pb-2">Information</h2>
                            <table class="table-information-checkout">
                                <tr>
                                    <td>Members</td>
                                    <td class="text-right" width="50%">{{ $item->details->count() }}</td>
                                </tr>
                                <tr>
                                    <td>Additional Visa</td>
                                    <td class="text-right" width="50%">$ {{ $item->additional_visa }}</td>
                                </tr>
                                <tr>
                                    <td>Type Price</td>
                                    <td class="text-right" width="50%">$ {{ $item->travel_package->price }} / Person</td>
                                </tr>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-right" width="50%">$ {{ $item->transactions_total }},00</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-right" width="50%"><span class="text-ungu">$ {{ $item->transactions_total }}</span>,<span class="text-merah">{{ mt_rand(0,99) }}</span></td>
                                </tr>
                            </table>

                            <hr class="my-4">

                            <h3>Payment Intruction</h3>
                            <p class="text-muted">
                                Please complete payment before you continue the wonderful trip
                            </p>

                            <div class="media bank-bri pt-3">
                                <img src="{{ url('images/ic_bank.png') }}" width="45px">
                                <div class="media-body pl-2">
                                    <h4 class="mt-0 mb-0">PT. Holmes Ext</h4>
                                    <p class="text-muted">
                                        Bank BRI <br> 1987-998103-9999
                                    </p>
                                </div>
                            </div>

                            <div class="media bank-bri pt-3">
                                <img src="{{ url('images/ic_bank.png') }}" width="45px">
                                <div class="media-body pl-2">
                                    <h4 class="mt-0 mb-0">PT. Holmes Ext</h4>
                                    <p class="text-muted">
                                        Bank BCA <br> 0990-09E0-9928
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="join-container">
                            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-next-payment rounded-0 p-2" style="width: 100%;">
                                Next Payment
                            </a>
                        </div>
                        <div class="text-center mt-3 text-muted">
                            <a href="{{ route('detail', $item->travel_package->slug) }}">
                                Cancel Booking
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

@push('tambah-akhir-script')
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });


        });
    </script>
@endpush