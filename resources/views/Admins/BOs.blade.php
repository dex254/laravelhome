@extends('tables')

@section('headTitle', 'View Booking Offers')
@section('pageTitle', 'View Booking Offers')

@section('content')
<div class= "row">
    <div class= 'col-12'>

        
        <div class="card mb-4">
          <div class="card-header pb-0">

          </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client surname</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Other Names</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DOB</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preferred rent price</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preferred water price per unit</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Survey Date</th>
                    </tr>
                  </thead>
                  <tbody>

                  @forelse($booking_offers as $booking_offer)
                    <tr>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->ClientId}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->surname}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->othernames}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->DOB}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->email}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->phonenumber}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->Preferredrentprice}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->Preferredwaterpriceperunit}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$booking_offer->Dateofsurvey}}</p></td>

                    </tr>
                  @empty
                    <tr>
                        <td colspan = "3">No records found</td>
                    </tr>
                  @endforelse
                  
                  </tbody>
                </table>

              </div>
            </div>
        </div>
    </div>

</div>

@endsection