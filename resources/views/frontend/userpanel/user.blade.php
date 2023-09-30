@extends('app')

@section('title', 'Home')


@section('content')
    <div id="content">

        <main class="padding-top-30 padding-bottom-80">
            <section class="contact-area bg-gray section_item_padding">
                <div class="container-fluid" style="margin: 0px 0px 0px 50px">
                    <div class="row">
                        <div class="col-lg-4 " style="width:30%">
                            <div class="card bg-light row userpanel-data">
                                <div class="card-body">
                                    <div class="card-title">
                                        <p class="icon-text">
                                            <i class="ion-ios-bolt icon"></i>
                                            <span>Get a mechanic, anytime! anywhere! </span>
                                        </p>
                                    </div>
                                    <hr class="border-top" />
                                    <div class="container-fluid container-request">
                                        <h3>Request a Service Now!</h3>
                                    </div>
                                    <div class="container-fluid">
                                        <form id="contact_form" class="rental-form">
                                            <div class="mb-3">
                                                <label for="service" class="form-label">Service</label>
                                                <input type="text" class="form-control" id="service" name="service"
                                                    placeholder="Enter your service" value="" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text" class="form-control" id="location" name="location"
                                                    placeholder="Enter your location" value="" required>
                                            </div>
                                            <!-- Buttons within the form -->
                                            <div class="row rent-button">
                                                <div class="col">
                                                    <a href="#" class="btn-request">Request now</a>
                                                </div>
                                                <div class="col">
                                                    <a href="/schedule" class="btn-schedule">Schedule for later</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <p class="icon-text">
                                                <i class="ion-android-arrow-dropright icon"></i>
                                                <span > <a href="/bookings" style="color:#ffa500"> View your bookings! </a></span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="card bg-light row userpanel-data">
                                <div class="card-body">
                                    <div class="card-title">
                                        <p class="icon-text">
                                            <i class="ion-android-arrow-dropdown icon"></i>
                                            <span> View your bookings! </span>
                                        </p>
                                    </div>
                                    <hr class="border-top" />
                                    <div class="row rent-button">
                                        <div class="col">
                                            <a href="/userpannel" class="btn-request">Request now</a>
                                        </div>

                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-8 contact-page" style="padding: 0%">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


    @endsection
</div>
