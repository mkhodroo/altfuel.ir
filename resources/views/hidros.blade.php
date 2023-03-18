@extends('layout.main')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped" id="agencies">
            <thead>
                <tr>
                    <th>نام</th>
                    <th>کد اتحادیه</th>
                    <th>استان</th>
                    <th>شهرستان</th>
                    <th>آدرس</th>
                    <th>تلفن</th>
                    <th>تاریخ انقضا پروانه کسب</th>
                </tr>
            </thead>
        </table>
    </div>
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