@extends('tables')

@section('headTitle', 'Your Properties')
@section('pageTitle', 'Your Properties')

@section('content')
<div class="row">
  <div class='col-12'>

    <div class="d-flex justify-content-end">
      <a class="btn btn-secondary" data-toggle="modal" data-target="#Addproperty">
        <i class="fas fa-plus"></i> Add new property
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

                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Title</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">County</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">SubCounty</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Town</th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Type of Property</th>
              </tr>
            </thead>
            <tbody>

              @forelse($properties as $property)
              <tr>
                <td>
                  <p class="text-xs px-3 font-weight-bold mb-0">{{$property->Property_Ad}}</p>
                </td>
                <td>
                  <p class="text-xs px-3 font-weight-bold mb-0">{{$property->County->name}}</p>
                </td>
                <td>
                  <p class="text-xs px-3 font-weight-bold mb-0">{{$property->SubCounty->name}}</p>
                </td>
                <td>
                  <p class="text-xs px-3 font-weight-bold mb-0">{{$property->Town->name}}</p>
                </td>
                <td>
                  <p class="text-xs px-3 font-weight-bold mb-0">{{$property->type}}</p>
                </td>

                <td class="align-middle text-center">
                  <a>
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>

                  <a href="{{URL::to('viewhouseunits/'.$property->Plot_No)}}">
                    <i class="fa-solid fa-house"></i>
                  </a>

                  <a>
                    <i class="fa fa-usd" aria-hidden="true"></i>
                  </a>

                  <a onclick=" return confirm('Are you sure?');">
                    <i class="fa-solid fa-trash"></i>
                  </a>

                </td>
              </tr>
              @empty
              <tr>
                <td colspan="3">No records found</td>
              </tr>
              @endforelse

            </tbody>
            <!-- Modal Example Start-->
            <div class="modal fade" id="Addproperty" tabindex="-1" role="dialog" aria- labelledby="demoModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel">New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <livewire:subcounty />
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
    position: 'topRight'
  });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection