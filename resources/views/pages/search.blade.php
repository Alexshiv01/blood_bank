@extends('layouts.app')
@section('content')
    {{-- <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }

        .loader {
            display: none;
            width: 69px;
            height: 89px;
            position: absolute;
            top: 25%;
            left: 50%;
            padding: 2px;
            z-index: 1;
        }

        .loader .fa {
            color: #e74c3c;
            font-size: 52px !important;
        }

        .form-group {
            text-align: left;
        }

        h1 {
            color: white;
        }

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .red-bar {
            width: 25%;
        }

        span {
            display: block;
        }

        .name {
            color: #e74c3c;
            font-size: 22px;
            font-weight: 700;
        }

        .donors_data {
            background-color: white;
            border-radius: 5px;
            margin: 25px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            padding: 20px 10px 20px 30px;
        }

        .red-background {
            background-color: #e74c3c;
            min-height: 150px;
            height: auto;
            padding: 0px
        }
    </style> --}}
@section('allcss')
    <style>
        .red-background {
            background-color: #e74c3c;
            min-height: 150px;
            height: auto;
            padding: 0px
        }

        h1 {
            color: white;
        }

        h2 {
            color: red;
        }

        .donors_data {
            background-color: white;
            border-radius: 10px;
            margin: 25px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 3px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 10px -2px rgba(89, 89, 89, 0.95);
            padding: 20px 10px 20px 30px;
        }

        .loader {
            display: none;
            width: 69px;
            height: 89px;
            position: absolute;
            top: 25%;
            left: 50%;
            padding: 2px;
            z-index: 1;
        }

        .form-group {
            text-align: left;
        }
    </style>
@endsection
<div class="container-fluid red-background size">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Search Donors</h1>
            <hr class="white-bar">
            <form action="{{ route('search.data') }}" method="post" class="form-inline text-center"
                style="padding: 20px px 0px 5px;" id="search">
                @csrf
                {{-- <input type="text" value="search" placeholder="Search.."> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-4 form-group text-center">
                            <select style="width: 220px; height: 45px;" name="city" id="city"
                                class="form-control demo-default" required>
                                <option value="">--Select City--</option>
                                <optgroup title="Rupandehi(Province Lumbini)"
                                    label="&raquo; Rupandehi(Province Lumbini)">
                                </optgroup>
                                <option value="Bhairahawa">Bhairahawa</option>
                                <option value="Butwal">Butwal</option>
                                <option value="Lumbini">Lumbini</option>
                                <option value="Parasi">Parasi</option>
                            </select>
                        </div>
                        <div class="col-4 form-group">
                            <select name="blood_group" id="blood_group"
                                style="padding: 0 20px; width: 220px; height: 45px;"
                                class="form-control demo-default text-center margin10px">

                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>

                            </select>
                        </div>
                        <div class="col-4 form-group">
                            <button type="submit" id="search" name="search"
                                class="btn btn-lg btn-secondary">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
    <div class="row " id="data">
        <!-- Display The Search Result -->
        @if (count($donors) > 0)
            <table class="table table-striped">
                <tr>

                    <th> </th>
                    <th> </th>
                </tr>
                @foreach ($donors as $donor)
                    <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
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

                    </div>
                @endforeach
            </table>
        @else
            <h3>Donors <span class="text-primary">are not available !!
                </span></h3>
        @endif

        {{-- <div class="col-md-8">
                <div class="card mycard m-2 p-2" style="width: 18rem;">

                </div>
            </div> --}}

    </div>
</div>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}


{{-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>
    <script>
        // $(document).ready(function() {
        //     $('#search').on('click', function() {
        //         var city = $("#city").val();
        //         var blood_group = $("#blood_group").val();

        //         $.ajax({
        //             type: "GET",
        //             url: "/search",
        //             data: {
        //                 'search': city 'search': blood_group
        //             },
        //             dataType: "dataType",
        //             success: function(data) {
        //                 alert(city);
        //             }
        //         });
        //     })
        // });









        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/search",
                    data: {
                        'search': value
                    },
                    success: function(data) {
                        // $('.mycard').html(data);
                        alert(value);
                    }
                });
            });
        });
    </script> --}}


@endsection
