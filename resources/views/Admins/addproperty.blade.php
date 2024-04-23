@extends('layout')

@section('headTitle', 'Your Properties / Add Property')

@section('pageTitle', 'Your Properties / Add Property')



@section('content')

<livewire:subcounty />

@endsection

@section('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $('select').select2({
                theme: "classic"
            });
            //preselecting the select2 inputs + ajax calls
            @if(old('county') != null)
                $('#county').val('{{old('county')}}');
                $('#county').trigger('change');
                _fetchSubCounties({{old('county')}});
            @endif

            @if(old('subcounty') != null)
                $('#subcounty').val('{{old('subcounty')}}');
                $('#subcounty').trigger('change');
                _fetchTowns({{old('subcounty')}});
            @endif

            @if(old('town') != null)
                $('#town').val('{{old('town')}}'); // Select the option with a value of '1'
            @endif

            //SubCounty Populator
            $('#county').change(function(e){
                var countyId = this.value;
                _fetchSubCounties(countyId);
            });

            //Town Populator
            $('#subcounty').change(function(e){
                var scounty_id = this.value;
                _fetchTowns(scounty_id);
            });
        });

        function _fetchSubCounties(countyId){
            $.ajax({
                url: "{{url('fetch-subcounties')}}",
                type: "POST",
                data: {
                    county_id: countyId,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#subcounty').empty().select2( 'destroy' );
                    $('#subcounty').select2({data:result.data});
                    $('#subcounty').trigger('change');
                }
            });
        }

        function _fetchTowns(scounty_id){
            $.ajax({
                url: "{{url('fetch-towns')}}",
                type: "POST",
                data: {
                    sc_id: scounty_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#town').empty().select2( 'destroy' );
                    $('#town').select2({data:result.data});
                }
            });
        }
</script>

@endsection