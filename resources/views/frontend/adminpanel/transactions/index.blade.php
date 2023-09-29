@extends('frontend.component.admin.main')

@section('tab-content')
    <div class="dashboard-data tab-pane in active" id="dashboard">
        <div class="tab-pane" id="transaction">
            <div class="content bg-light ">
                <div class="items-push">
                    <div class="category-head p-4 w-100" style="margin-top: 5rem;">
                        <h1 class="text-dark">Transactions</h1>
                    </div>
                </div>
            </div>
            <div class="content bg-light p-4 rounded">
                <div class="">
                    <div class="search-element">
                        <div class="row  justify-content-start align-items-start my-4">
                            <div class="col-sm-3">
                                <div class="data-length w-100">
                                    <label for="cars" class="d-block"></label>
                                    <select name="cars" id="cars" class="w-100 p-2 rounded border">
                                        <option value="volvo">Filter by Gateway</option>
                                        <option value="saab">Paypal</option>
                                        <option value="mercedes">Razorpay</option>
                                        <option value="audi">Paystack</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="search-field">
                                    <input type="text" class="p-2 w-100 rounded border" placeholder="Search" />
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="search-field">
                                    <button class="btn btn-primary">search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-bordered table-striped cat-dataTable-full">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Transaction ID</th>
                                    <th class="hidden-xs">Plans</th>
                                    <th>Payment Gateway</th>
                                    <th>Amount</th>
                                    <th>Payment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-w600 cat_icon">admin@admin.com</td>
                                    <td class="font-w600">-</td>
                                    <td class="font-w600">Free plan</td>
                                    <td class="font-w600">NA</td>
                                    <td class="font-w600">0.00</td>
                                    <td class="font-w600">Aug, 25th, 2023</td>
                                </tr>
                                <tr>
                                    <td class="font-w600 cat_icon">admin@admin.com</td>
                                    <td class="font-w600">-</td>
                                    <td class="font-w600">Free plan</td>
                                    <td class="font-w600">NA</td>
                                    <td class="font-w600">0.00</td>
                                    <td class="font-w600">Aug, 25th, 2023</td>
                                </tr>
                                <tr>
                                    <td class="font-w600 cat_icon">admin@admin.com</td>
                                    <td class="font-w600">-</td>
                                    <td class="font-w600">Free plan</td>
                                    <td class="font-w600">NA</td>
                                    <td class="font-w600">0.00</td>
                                    <td class="font-w600">Aug, 25th, 2023</td>
                                </tr>
                                <tr>
                                    <td class="font-w600 cat_icon">admin@admin.com</td>
                                    <td class="font-w600">-</td>
                                    <td class="font-w600">Free plan</td>
                                    <td class="font-w600">NA</td>
                                    <td class="font-w600">0.00</td>
                                    <td class="font-w600">Aug, 25th, 2023</td>
                                </tr>
                                <tr>
                                    <td class="font-w600 cat_icon">admin@admin.com</td>
                                    <td class="font-w600">-</td>
                                    <td class="font-w600">Free plan</td>
                                    <td class="font-w600">NA</td>
                                    <td class="font-w600">0.00</td>
                                    <td class="font-w600">Aug, 25th, 2023</td>
                                </tr>
                                <tr>
                                    <td class="font-w600 cat_icon">admin@admin.com</td>
                                    <td class="font-w600">-</td>
                                    <td class="font-w600">Free plan</td>
                                    <td class="font-w600">NA</td>
                                    <td class="font-w600">0.00</td>
                                    <td class="font-w600">Aug, 25th, 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table Full -->
            </div>
            <!-- END Page Content -->
        </div>
    </div>
@endsection
