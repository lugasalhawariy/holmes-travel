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
                                    <p class="text-muted">Trip to Bromo, in Yogyakarta</p>
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
                                            <tr>
                                                <td class="align-middle"><img src="images/user_testimonial_1.png" style="width: 40px;"></td>
                                                <td class="align-middle">Mickel Jeans</td>
                                                <td class="align-middle">USA</td>
                                                <td class="align-middle">30 Days</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="#" class="close">
                                                        <img src="images/ic_close@2x.png" style="width: 25px;">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle"><img src="images/user_testimonial_4.png" style="width: 40px;"></td>
                                                <td class="align-middle">Lugas Alhawariy</td>
                                                <td class="align-middle">ID</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">Active</td>
                                                <td class="align-middle">
                                                    <a href="#" class="close">
                                                        <img src="images/ic_close@2x.png" style="width: 25px;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="add-members">

                                        <form action="#" class="form-inline pt-3 text-center">
                                            <label for="username" class="sr-only"></label>
                                            <input type="text" class="form-control mr-1 my-2" style="width: 160px;" placeholder="Username">

                                            <label for="is_visa" class="sr-only"></label>
                                            <select name="is_visa" id="is_visa" class="form-control mx-1 my-2" style="width: 150px;">
                                                <option value="">Choose Visa</option>
                                                <option value="1">30 Days</option>
                                                <option value="0">N/A</option>
                                            </select>

                                            <label for="doe_passport" class="sr-only"></label>
                                            <div class="input-group">
                                                <input type="text" class="datepicker mx-1 my-2" style="width: 150px;">
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
                                    <td class="text-right" width="50%">2</td>
                                </tr>
                                <tr>
                                    <td>Additional Visa</td>
                                    <td class="text-right" width="50%">$ 190</td>
                                </tr>
                                <tr>
                                    <td>Type Price</td>
                                    <td class="text-right" width="50%">$ 80 / Person</td>
                                </tr>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-right" width="50%">$ 280</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-right" width="50%"><span class="text-ungu">$ 280</span>,<span class="text-merah">98</span></td>
                                </tr>
                            </table>

                            <hr class="my-4">

                            <h3>Payment Intruction</h3>
                            <p class="text-muted">
                                Please complete payment before you continue the wonderful trip
                            </p>

                            <div class="media bank-bri pt-3">
                                <img src="images/ic_bank.png" width="45px">
                                <div class="media-body pl-2">
                                    <h4 class="mt-0 mb-0">PT. Holmes Ext</h4>
                                    <p class="text-muted">
                                        Bank BRI <br> 1987-998103-9999
                                    </p>
                                </div>
                            </div>

                            <div class="media bank-bri pt-3">
                                <img src="images/ic_bank.png" width="45px">
                                <div class="media-body pl-2">
                                    <h4 class="mt-0 mb-0">PT. Holmes Ext</h4>
                                    <p class="text-muted">
                                        Bank BCA <br> 0990-09E0-9928
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="join-container">
                            <a href="{{ route('success') }}" class="btn btn-next-payment rounded-0 p-2" style="width: 100%;">
                                Next Payment
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
                format: 'dd mmmm yyyy'
            });


        });
    </script>
@endpush