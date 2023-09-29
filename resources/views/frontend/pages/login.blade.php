@extends('app')

@section('title', 'Login')

@section('content')
    <!--<div class="sub-bnr-contact">-->
    <!--    <div class="position-center-center " style="left: 50%">-->
    <!--        <div class="container"> <img src="asset/images/sub-bnr-hr-up-contact.png" alt="">-->
    <!--            <h4>Login to your account</h4>-->
    <!--            <ol class="breadcrumb">-->
    <!--                <li><a href="/">Home</a></li>-->
    <!--                <li class="active">Log in</li>-->
    <!--            </ol>-->
    <!--            <img src="asset/images/sub-bnr-hr.png" alt="">-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div id="content">-->
       <div class="login-page ">
    <div class="container">
        <div class="row justify-content-center"> <!-- Added row and justify-content-center -->
            <div class="container login-data">

                <div class="card bg-light">
                    <div class="card-body">
                        <div class="card-title">
                            <p>Login to your account</p>
                        </div>
                        <hr class="border-top" />
                        <div class="container-fluid">
                            <form id="contact_form" class="rental-form" method="post">
                                <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter your Email" value="" required>
                                    </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="Email" name="Email"
                                        placeholder="Enter your Email" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">password</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                        placeholder="Enter your password" value="" required>
                                </div>
                                <!-- Buttons within the form -->
                                <div class="row ">
                                    <button type="submit" class="btn-request">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--</div>-->



@endsection

</div>
