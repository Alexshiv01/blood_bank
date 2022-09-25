@extends('layouts.app')
@section('content')
@section('allcss')
    @include('inc.header')
    <style>
        h1 {
            color: white;
        }

        .header-img {

            background: url(../img/header.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            height: auto;
            min-height: 460px;
            padding: 10px;
            color: white;
            font-weight: 700;
        }

        .header-img p {
            font-weight: 100;
            font-size: 18px;
        }

        .center-aligned {
            display: table-row;
            margin: 0 auto;
        }

        .header-img p {
            font-weight: 100;
            font-size: 18px;
        }

        /* .form-group {
                                                                                                                                                                                                                                                                                                                                             padding-right: 20px;
                                                                                                                                                                                                                                                                                                                                         } */
    </style>
@endsection
{{-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

<section class="pt-6 bg-600 container-fluid header-img" id="home">
    {{-- <section class="pt-6 bg-600" id="home"> --}}


    <div class="row" data-aos="fade-up">
        <div class="col-md-6 offset-md-3">

            <div class="header">
                <h1 class="text-center">Donate the blood, save the life</h1>
                <p class="text-center">Donate the blood to help the others.</p>
            </div>


            <h1 class="text-center">Search The Donors</h1>
            <hr class="white-bar text-center">
            <form action="{{ route('search.data') }}" method="post" class="form-inline text-center"
                style="padding: 40px 0px 0px 5px;">
                @csrf
                <div class="row">
                    <div class="col-4 form-group text-center justify-content-center">

                        <select style="width: 220px; height: 45px;" name="city" id="city"
                            class="form-control demo-default" required>
                            <option value="">-- Select --</option>
                            <optgroup title="Rupandehi (Province Lumbini)" label="&raquo;Rupandehi (Province Lumbini)">
                            </optgroup>
                            <option value="Bhairahawa">Bhairahawa</option>
                            <option value="Butwal">Butwal</option>
                            <option value="Lumbini">Lumbini</option>
                            <option value="Parasi">Parasi</option>

                        </select>
                    </div>
                    <div class="col-3 form-group center-aligned">
                        <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
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
                    <div class="col-3 form-group center-aligned">
                        <input type="submit" class="btn btn-lg btn-danger" value="Search">
                        {{-- <button type="submit" class="btn btn-lg btn-danger">Search</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- header ends -->

</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-6" style="margin-top:-5.8rem">

    <div class="container">
        <div class="row">
            <div class="card card-span bg-secondary">
                <div class="card-body">
                    <div class="row flex-center gx-0">
                        <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img
                                src="assets/img/favicons/blood.png" width="160" alt="..." /></div>
                        <div class="col-lg-8 col-xl-4">
                            <h1 class="text-light fs-lg-4 fs-xl-5">“Blood Donation Is <span class="text-primary">A
                                    Great Act Of Kindness.
                                </span>” </h1>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <h2 class="display-1 text-light text-center text-xl-end"><a href="/donate">Donate Now
                            </h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

    <div class="container">
        <div class="row">
            <h1 class="text-center mb-5" style="color: black">Blood Donation</h1>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100" src="assets/img/favicons/1354.jpg"
                        alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Donate blood. Not on roads but in blood
                            donation camps.</h5><a class="text-muted fs--1 stretched-link text-decoration-none"
                            href="https://nrcs.org/">Nepal Red Cross Society</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100" src="assets/img/favicons/bloodpost.png"
                        alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Stay fit and eat right and donate
                            blood.</h5>
                        <a class="text-muted fs--1 stretched-link text-decoration-none" href="https://nrcs.org/">Nepal
                            Red
                            Cross Society</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100" src="assets/img/favicons/1354.jpg"
                        alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">“O people”, did you know you are
                            Universal Donors.</h5><a class="text-muted fs--1 stretched-link text-decoration-none"
                            href="https://nrcs.org/">Nepal Red Cross Society</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt- -0">

    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-md-12 col-lg-6 h-100">
                <div class="card card-span text-white h-100"><img class="w-100" src="assets/img/favicons/845.jpg"
                        alt="..." />
                    <div class="card-body px-xl-5 px-md-3 pt-0">
                        <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
                            <h5 class="mt-3 mb-0" style="color: brown">Kimmie Vo</h5>
                            <p class="text-muted">Junior Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 h-100">
                <h1 class="my-4">Successful<br /><span class="text-primary">Blood Transfusion Service</span>
                </h1>
                <p>The Blood Transfusion Service of Nepal Red Cross Society (NRCS) was established in the 1966, but
                    initially the service was only available for the residents of Kathmandu. However, over the
                    years blood services have been established in 108 locations within 73 districts of the country
                    – and providing more than 4 million units of blood and blood components to needy patients.

                    The objectives of the Blood Service are ensuring adequate, safe and timely supply of blood and
                    blood products through voluntary non-remunerable blood donation to meet the transfusion
                    requirements of the people of Nepal.


                </p>
                <div class="mt-6">
                    <h5 class="font-sans-serif fw-bold mb-3">News</h5>
                    <div class="card card-span bg-600">
                        <div class="card-body">
                            <div class="row flex-center gx-0">
                                <div class="col-lg-4 col-xl-3 text-center text-xl-start"><img
                                        src="assets/img/favicons/845.jpg" width="120" alt="courses" />
                                </div>
                                <div class="col-lg-8 col-xl-9">
                                    <h5 class="font-sans-serif fw-bold">Opportunity to All Youth
                                    </h5>
                                    <p class="text-muted fs--1">Nepal Red Cross Society</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section>
    <div class="bg-holder"
        style="background-image:url(assets/img/gallery/funbg.jpg);background-position:center;background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/favicons/donors.png" height="100"
                    alt="..." />
                {{-- <span class="my-2" data-purecounter-start="0" data-purecounter-end="20"
                    data-purecounter-duration="1" class="purecounter"></span> --}}

                <h1 class="my-2">40</h1>
                <p class="text-info fw-bold">Donors</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/favicons/requester.png"
                    height="100" alt="..." />
                <h1 class="my-2">20</h1>
                <p class="text-info fw-bold">Blood Requester</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/favicons/happy.png" height="100"
                    alt="..." />
                <h1 class="my-2">10</h1>
                <p class="text-info fw-bold">HAPPY Requester</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/favicons/donors1.png" height="100"
                    alt="..." />
                <h1 class="my-2">0</h1>
                <p class="text-info fw-bold">AWARDS ACHIEVED</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4 mb-5"><img src="assets/img/favicons/subcribele.png" width="380"
                    alt="cta" /></div>
            <div class="col-md-6 col-lg-5">
                <h5 class="text-primary font-sans-serif fw-bold">Subscrible now</h5>
                <h1 class="mb-5">Get every single<br />update you will get</h1>
                <form class="row g-0 align-items-center">
                    <div class="col">
                        <div class="input-group-icon">
                            <input class="form-control form-little-squirrel-control" type="email"
                                placeholder="Enter email " aria-label="email" /><i
                                class="fas fa-envelope input-box-icon"></i>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary rounded-0" type="submit">Subscribe now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
</main>
<!-- <section> close ============================-->
<!-- ============================================-->
@endsection
