@extends('app')

@section('title', 'Home')


@section('content')
    <div id="content">

        <main class="padding-top-60 padding-bottom-80">

            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h5>My bookings</h5>
                    <hr>
                </div>
            </div>
            <div class="container">
                <div class="mt-1">
                    <div class="block-content">
                        <table class="table text-center  table-striped ">
                            <thead class="text-center">
                                <tr>
                                    <th style="text-align:center; color:#ffa500;">Service</th>
                                    <th style="text-align:center; color:#ffa500;">Location</th>
                                    <th style="text-align:center; color:#ffa500;">Schedule for:</th>
                                    <th class="hidden-xs" style="text-align:center; color:#ffa500;">Fare</th>
                                    <th style="text-align:center; color:#ffa500;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-size:15px">Bus Mechanic</td>
                                    <td style="font-size:15px">Jaipur</td>
                                    <td style="font-size:15px">2023-09-30 10:00 AM</td>
                                    <td style="font-size:15px">1000 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Bike mechanic</td>
                                    <td style="font-size:15px">Kota</td>
                                    <td style="font-size:15px">2023-09-30 11:00 AM</td>
                                    <td style="font-size:15px">1500 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Truck mechanic</td>
                                    <td style="font-size:15px">Kishangarh</td>
                                    <td style="font-size:15px">2023-09-30 12:00 PM</td>
                                    <td style="font-size:15px">2000 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Bike mechanic</td>
                                    <td style="font-size:15px">Kota</td>
                                    <td style="font-size:15px">2023-09-30 1:00 PM</td>
                                    <td style="font-size:15px">2500 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Bus mechanic</td>
                                    <td style="font-size:15px">Jaipur</td>
                                    <td style="font-size:15px">2023-09-30 2:00 PM</td>
                                    <td style="font-size:15px">3000 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>

                                <tr>
                                    <td style="font-size:15px">Truk mechanic</td>
                                    <td style="font-size:15px">Udaipur</td>
                                    <td style="font-size:15px">2023-09-30 3:00 PM</td>
                                    <td style="font-size:15px">3500 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Truck mechanic</td>
                                    <td style="font-size:15px">Jaipur</td>
                                    <td style="font-size:15px">2023-09-30 4:00 PM</td>
                                    <td style="font-size:15px">400- Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Bike mechanic</td>
                                    <td style="font-size:15px">Kishangarh</td>
                                    <td style="font-size:15px">2023-09-30 5:00 PM</td>
                                    <td style="font-size:15px">2000 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Bus mechanic</td>
                                    <td style="font-size:15px">Udaipur</td>
                                    <td style="font-size:15px">2023-09-30 3:00 PM</td>
                                    <td style="font-size:15px">3500 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Truck mechanic</td>
                                    <td style="font-size:15px">Jaipur</td>
                                    <td style="font-size:15px">2023-09-30 4:00 PM</td>
                                    <td style="font-size:15px">400- Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>
                                <tr>
                                    <td style="font-size:15px">Bus mechanic</td>
                                    <td style="font-size:15px">Udaipur</td>
                                    <td style="font-size:15px">2023-09-30 3:00 PM</td>
                                    <td style="font-size:15px">3500 Rs/-</td>
                                    <td style="font-size:15px">Pending</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>


    @endsection
</div>
