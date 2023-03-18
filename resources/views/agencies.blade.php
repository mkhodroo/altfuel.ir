@extends('layout.main')

@section('content')
    
@endsection

@section('script')
    <script>
        send_ajax_get_request(
            'https://l.altfuel.ir/agencies/get',
            function(data){
                console.log(data);
            }
        )
    </script>
@endsection