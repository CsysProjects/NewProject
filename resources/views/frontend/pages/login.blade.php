@extends('app')

@section('title', 'Login')

@section('content')
    <div id="content">
        <div class="contact-page padding-top-0">

            <!-- CONTACT FORM -->
            <div class="container">
                <div class="row margin-top-100 margin-bottom-100">
                    <div class="col-md-8 col-sm-6 col-xs-12">

                        <!-- Heading -->
                        <div class="heading text-left">
                            <p> We'll get back to you soon </p>
                        </div>
                        <div class="contact-form">
                            <!-- Form  -->
                            <div class="margin-top-30">
                                <div class="contact-form">

                                    <!-- Success Msg -->
                                    <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank
                                        You. Your Message has been Submitted</div>

                                    <!-- FORM -->
                                    <form id="contact_form" class="contact-form" method="post" onSubmit="return false">
                                        <ul class="row">
                                            <li class="col-md-6 col-sm-12 col-xs-12">
                                                <label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Your Name">
                                                </label>
                                            </li>
                                            <li class="col-md-6 col-sm-12 col-xs-12">
                                                <label>
                                                    <input type="text" class="form-control" name="email" id="email"
                                                        placeholder="E-Mail">
                                                </label>
                                            </li>
                                            <li class="col-md-6 col-sm-12 col-xs-12">
                                                <label>
                                                    <input type="text" class="form-control" name="company" id="company"
                                                        placeholder="Phone">
                                                </label>
                                            </li>
                                            <li class="col-md-6 col-sm-12 col-xs-12">
                                                <label>
                                                    <input type="text" class="form-control" name="website" id="website"
                                                        placeholder="Subject">
                                                </label>
                                            </li>
                                            <li class="col-md-12 col-sm-12 col-xs-12">
                                                <label>
                                                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Message"></textarea>
                                                </label>
                                            </li>
                                            <li class="col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit" value="submit" class="btn" id="btn_submit"
                                                    onClick="proceed();">send Message <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
