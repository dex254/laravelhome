@extends('tables')

@section('headTitle', 'Pricing')
@section('pageTitle', 'Pricing')

@section('content')
<div class= "row">
    <div class= 'col-12'>

    <div class="d-flex justify-content-end">
            <a class="btn btn-secondary" href="{{URL::to('your_properties/pricing/setpricing')}}">
                <i class="fas fa-plus"></i> Set Pricing
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

                        <th class = "text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Price</th>
                        <th class = "text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Room</th>
                        <th class = "text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No. of rooms</th>
                    </tr>
                  </thead>
                  <tbody>

                  @forelse($prices as $price)
                    <tr>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$price->Price}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$price->Size}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$price->Units_available}}</p></td>
                        <td class="align-middle text-center">
                            <a >
                            <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <a>
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            </a>

                            <a onclick = " return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                  @empty
                    <tr>
                        <td colspan = "3">No records found</td>
                    </tr>
                  @endforelse
                  
                  </tbody>
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
  messageColor : 'white',
      icon: 'fa-sharp fa-solid fa-circle-check',
      iconColor: 'white',
      backgroundColor : '#17c1e8',
      message: "{{ session('status')}}",
      position: 'topRight'
});
</script>
@endsection