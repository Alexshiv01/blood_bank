@extends('layouts.app')
@section('content')
@section('allcss')
    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }

        .form-container {
            background-color: white;
            border: .5px solid #eee;
            border-radius: 5px;
            padding: 20px 10px 20px 30px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
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

        .red-background {
            background-color: #e74c3c
        }
    </style>
@endsection
<div class="container-fluid red-background size">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Blood Request</h1>
            <hr class="white-bar">
        </div>
        <p class="text-center sho"><a href="/">Home </a> <span class="lnr lnr-arrow-right"></span>
            <a href="{{ route('requests.index') }}"> Requestors</a>
        </p>
    </div>
</div>
<div class="container size">
    <div class="row">
        <div class="col-md-6 offset-md-3 form-container">
            <h3>SignUp</h3>
            <hr class="red-bar">

            <!-- Error Messages -->
            @if (session()->has('Message'))
                <div class="alert alert-success">
                    {{ session()->get('Message') }}
                </div>
            @endif
            <form class="form-group" action="{{ route('requests.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="name" id="fullname" placeholder="Full Name" required
                        pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
                </div>
                <!--full name-->
                <div class="form-group">
                    <label for="name">Blood Group</label><br>
                    <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                        <option value="">---Select Your Blood Group---</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="gender">Gender</label><br>
                    Male<input type="radio" name="gender" id="gender" value="Male"
                        style="margin-left:10px; margin-right:10px;" checked>
                    Fe-male<input type="radio" name="gender" id="gender" value="Fe-male"
                        style="margin-left:10px;">
                </div>
                <!--gender-->
                <div class="form-inline">
                    <label for="name">Date of Birth</label><br>
                    <input class="form-control demo-default" id="date" name="dob" type="date"
                        style="margin-bottom:10px;">
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="fullname">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <input type="text" name="contact_no" value="" placeholder="98......." class="form-control"
                        required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10">
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="city">City</label>
                    <select name="city" id="city" class="form-control demo-default" required>
                        <option value="">-- Select --</option>
                        <optgroup title="Rupandehi(province Lumbini)" label="&raquo; Rupandehi (Province Lumbini)">
                        </optgroup>
                        <option value="Bhairahawa">Bhairahawa</option>
                        <option value="Butwal">Butwal</option>
                        <option value="Lumbini">Lumbini</option>
                        <option value="Parasi">Parasi</option>


                    </select>
                </div>
                <!--city end-->
                <div class="form-group">
                    <label for="name">Dec</label><br>
                    <input class="form-control demo-default" id="dec" name="dec" class="form-control"
                        type="textarea" style="margin-bottom:10px;">
                </div>


                <!--End form-group-->
                <div class="form-inline">
                    <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
                    <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and
                            E-Mail in Blood donors List</b></span>
                </div>
                <!--End form-group-->

                <div class="form-group">
                    <button id="submit" name="submit" type="submit"
                        class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
