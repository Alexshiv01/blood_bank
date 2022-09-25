@extends('layouts.app')
@section('content')
@section('allcss')
    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }


        h1 {
            color: white;
        }


        .donors_data {
            background-color: white;
            border-radius: 5px;
            margin: 20px 5px 0px 5px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 10px -2px rgba(89, 89, 89, 0.95);
            padding: 20px;


        }

        .red-background {
            background-color: #e74c3c;
            min-height: 150px;
            height: auto;
            padding: 0px
        }



        selection {
            background-color: #fa7249;
            color: #fff;
        }

        .single-service:hover {
            box-shadow: -14.142px 14.142px 20px 0px rgb(157 157 157 / 50%);
            cursor: pointer;
        }

        .single-service:hover {
            background-image: -moz-linear-gradient(0deg, #ffacac 0%, #ff5f5f 100%);
            background-image: -webkit-linear-gradient(0deg, #ffacac 0%, #ff5f5f 100%);
            background-image: -ms-linear-gradient(0deg, #ffacac 0%, #ff5f5f 100%);
        }
    </style>
@endsection
<div class="container-fluid red-background size">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Donors</h1>
            <hr class="white-bar">
        </div>
        <p class="text-center sho"><a href="/">Home </a> <span class="lnr lnr-arrow-right"></span>
            <a href="{{ route('donors.index') }}"> Donors</a>
        </p>

    </div>
    <a href="{{ route('donors.create') }}" class="btn btn-primary2" role="button" aria-pressed="true">Donate
        Blood</a>

    <br>
</div>









{{-- ////////////blood_request////////// --}}



<div class="container" style="padding: 60px 5;">
    <div class="row data">
        @foreach ($donors as $donor)
            <div class="col-md-3 col-sm-12 col-lg-3 donors_data ">

                <div class="single-service">
                    <h2> <span class="text-primary">{{ $donor->name }}</span></h2>
                    <span>{{ $donor->city }} </span><br>
                    <span>{{ $donor->blood_group }} </span><br>
                    <span>{{ $donor->gender }} </span><br>
                    <div class="col-auto">
                        <p class="my-1 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900"
                                href="{{ $donor->email }}">{{ $donor->email }}</a></p>
                    </div>
                    <div class="col-auto">
                        <p><i class="fa fa-phone me-3"></i><a class="text-900"
                                href=" {{ $donor->contact_no }}">{{ $donor->contact_no }}</a></p>
                    </div>
                    <a href="#!" class="btn btn-primary2" role="button" aria-pressed="true">Request
                    </a>
                </div>
            </div>
            {{-- // --}}
        @endforeach


    </div>
</div>

{{-- //////////////////////////////////////////////////////////////////////////// --}}


@endsection
