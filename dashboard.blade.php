@extends('backend.layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">

                        <h3> 4545645 </h3>
                        <p>Total Customer</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('customers.index') }}" class="small-box-footer">
                        View More
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner text-light">
                        <h3>488555</h3>
                        <p>New Customer</p>
                    </div>
                    <div class="icon ">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <a href="{{ route('customers.index') }}" class="small-box-footer">
                        <font class="text-light"> View More <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    </font>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            ৳ 45355.44
                        </h3>
                        <p>Deposit Today</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <a href="{{ route('deposits') }}" class="small-box-footer">View More <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>৳ 54544.10</h3>
                        <p>Withdraw Today</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <a href="{{ route('withdraws') }}" class="small-box-footer">View More <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>


        </div>
        {{-- Dashboard Box End --}}


    </div>

@endsection
