@extends('tables')

@section('headTitle', 'Your Properties / View House Units')
@section('pageTitle', 'Your Properties / View House Units')

@section('content')
<div class="row">
  <div class='col-12'>

    <div class="d-flex justify-content-end">
      <a class="btn btn-secondary" data-toggle="modal" data-idUpdate="'.$ho_un->Plot_No'" data-target="#Addunit">
        <i class="fas fa-plus"></i> Add New Unit
      </a>
    </div>

    <div class="card mb-4">
      <div class="card-header pb-0">

      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>

                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Floor</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">House Number</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Monthly Rent</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Size</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Vacancy</th>
              </tr>
            </thead>
            <tbody>

              @forelse($ho_uns as $ho_un)
              @if ($ho_un->House_No <= 12 && $ho_un->Floor == 'G')
                <tr>
                  <td>
                    <p class="text-xs px-3 font-weight-bold mb-0">{{$ho_un->Floor}}</p>
                  </td>
                  <td>
                    <p class="text-xs px-3 font-weight-bold mb-0" id="House_number">{{$ho_un->House_No}}</p>
                  </td>
                  <td>
                    <p class="text-xs px-3 font-weight-bold mb-0">{{$ho_un->Monthly_rent}}</p>
                  </td>
                  <td>
                    <p class="text-xs px-3 font-weight-bold mb-0">{{$ho_un->Size}}</p>
                  </td>
                  <td>
                    @switch($ho_un->Vacancy)
                    @case('Occupied')
                    <p class="text-xs px-3 font-weight-bold mb-0 text-success">{{$ho_un->Vacancy}}</p>
                    @break

                    @case('Empty')
                    <p class="text-xs px-3 font-weight-bold mb-0 text-danger">{{$ho_un->Vacancy}}</p>
                    @break

                    @default
                    <p class="text-xs px-3 font-weight-bold mb-0">{{$ho_un->Vacancy}}</p>
                    @endswitch
                  </td>

                  <td class="align-middle text-center">

                    <a>
                      <i class="fa fa-usd" aria-hidden="true"></i>
                    </a>

                    <a onclick=" return confirm('Are you sure?');">
                      <i class="fa-solid fa-trash"></i>
                    </a>

                  </td>
                </tr>
                @endif

                @empty
                <tr>
                  <td colspan="3"> <a class="btn " data-toggle="modal" data-idUpdate="'.$ho_un->Plot_No'" data-target="#NewListRecord">
                      <i class="fas fa-plus"></i> No records so far Click here to add new list
                    </a></td>
                </tr>
                @endforelse

            </tbody>

            <!-- Modal Example Start-->
            <div class="modal fade" id="NewListRecord" tabindex="-1" role="dialog" aria- labelledby="demoModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel">New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="add-floor" method="POST" action="{{URL::to('NewHUs')}}">
                      

                      @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li class="text-white">{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      <div class="form-group">

                        <select id="plot_no" class="form-select-lg mb-3 form-control" name="Plot_No" required name="Plot_No">
                          <option value="{{$property->Plot_No}}">{{$property->Plot_No}}</option>
                        </select>

                        <p>Number of floors</p><select id="Floors" class="form-select-lg mb-3 form-control" name="Floors" required name="Floors">
                          <option value="disabled">No. of floors</option>
                          @for ($i = 1; $i < 10; $i++) <option value="">{{ $i }}</option>
                            @endfor
                        </select>

                        <p>Number of units per floor</p><input type="number" name="Units" required name="Units" value="{{old('Units')}}" class="form-control @error('Units') is-invalid @enderror" placeholder="Units">
                        <div class="invalid-feedback">
                          @error('Units') {{$message}} @enderror
                        </div>

                        <?php


                        if (isset($_POST['Floors']) && isset($_POST['Units'])) {
                          $Floors  = $_POST['Floors'];
                          $Units = $_POST['Units'];
                          $Units_no = $Floors * $Units;
                          $i = 1;
                          while ($i <= $Floors) {
                            foreach ($Units as $unit) {
                              //Code for incrementing house number
                              $hu = $hu + 1;
                              if ($hu == 1 && $hu <= $Units) {
                                //Ground Floor units
                                $Floor = 'G';
                                $hu = 1;
                              }
                              else if ($hu > $Units && $hu <= $Units_no) {
                                //Ground Floor units
                                $Floor = 'F';
                                $hu = 1;
                              }
                            }
                          }
                        }
                        ?>

                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit" class="form-control btn btn-success">
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Example End-->

            <!-- Modal Example Start-->
            <div class="modal fade" id="Addunit" tabindex="-1" role="dialog" aria- labelledby="demoModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel">Reserve Room</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="add-unit" method="POST" action="{{URL::to('addunit')}}">
                      @csrf

                      @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li class="text-white">{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      <div class="form-group">

                        <select id="plot_no" class="form-select-lg mb-3 form-control" name="Plot_No" required name="Plot_No">
                          <option value="{{$property->Plot_No}}">{{$property->Plot_No}}</option>
                        </select>

                        <p>Floor</p><select id="Floor" required name="Floor" name="Floor" class="form-select-lg mb-3 form-control">
                          <option value="disabled">Floor</option>
                          <option>Ground</option>
                          <option>First</option>
                          <option>Second</option>
                          <option>Fourth</option>
                          <option>Fifth</option>
                          <option>Sixth</option>
                          <option>Seventh</option>

                          <label for="House Number">House Number</label>
                          <input type="number" required name="house_no" value="{{old('house_no')}}" class="form-control @error('House Number') is-invalid @enderror" placeholder="Please assign a house number">
                          <div class="invalid-feedback">
                            @error('house_no') {{$message}} @enderror
                          </div>

                          <p>Size</p><select id="Size" class="form-select-lg mb-3 form-control" name="Size" required name="Size">
                            <option value="disabled">Size</option>
                            <option>1 bedroom</option>
                            <option>2 bedroom</option>
                            <option>3 bedroom</option>
                            <option>4 bedroom</option>
                          </select>

                          <p>Monthly rent</p><input type="number" required name="monthly_rent" value="{{old('monthly_rent')}}" class="form-control @error('Monthly rent') is-invalid @enderror" placeholder="Confirm your monthly rent">
                          <div class="invalid-feedback">
                            @error('monthly_rent') {{$message}} @enderror
                          </div>

                          <p>Vacancy</p><select id="Vacancy" class="form-select-lg mb-3 form-control" name="Vacancy" required name="Vacancy">
                            <option value="disabled">Vacancy</option>
                            <option>Empty</option>
                            <option>Occupied</option>
                          </select>

                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit" class="form-control btn btn-success">
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Example End-->

          </table>
          <div class="pagn-links">

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('scripts')
<script type="text/javascript">
  iziToast.show({
    messageColor: 'white',
    icon: 'fa-sharp fa-solid fa-circle-check',
    iconColor: 'white',
    backgroundColor: '#17c1e8',
    message: "{{ session('status')}}",
    position: 'topLeft'
  });
</script>

<script type="text/javascript">
  function myChangeFunction(input1) {
    var p1 = document.getElementById("option1");
    p1.value = input1.value;
    p1.innerHTML = input1.value
  }

  function myChangeFunction1(input3) {
    var p2 = document.getElementById("option2");
    p2.value = input3.value;
    p2.innerHTML = input3.value
  }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection