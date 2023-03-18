@extends('layout.main')

@section('content')
    <table class="table table-striped" id="agencies">
        <thead>
            <tr>
                <th>نام</th>
                <th>کداتحادیه</th>
                <th>استان</th>
                <th>شهرستان</th>
                <th>آدرس</th>
                <th>تلفن</th>
                <th>تاریخ انقضا پروانه کسب</th>
            </tr>
        </thead>
    </table>
@endsection

@section('script')
    <script>
        create_datatable(
            "agencies", 
            'https://l.altfuel.ir/api/hidro/get',
            [
                { data: 'Name' },
                { data: 'CodeEtehadie' },
                { data: 'Province' },
                { data: 'City' },
                { data: 'Address' },
                { data: 'Tel' },
                { data: 'ExpDate' },
            ]
        )
    </script>
@endsection