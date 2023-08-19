@extends('layout.main')

@php
    $title = "پیمانکاران تبدیل";
    $description = "لیست پیمانکاران تبدیل اتحادیه کشوری سوخت های جایگزین و خدمات وابسته";
@endphp

@section('content')
    <div class="table-responsive">
        <table class="table table-striped" id="agencies">
            <thead>
                <tr>
                    <th>نام</th>
                    <th>اطلاعت تماس</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>فن آوران پارسیان</td>
                    <td>02144984412</td>
                </tr>
                <tr>
                    <td>پارس ام سی اس</td>
                    <td>02188502313</td>
                </tr>
                <tr>
                    <td>الکتروفن</td>
                    <td>09038909945</td>
                </tr>
                <tr>
                    <td>سراج</td>
                    <td>04436523759 – 09059427155</td>
                </tr>
                <tr>
                    <td>انرژی صنعت خاورمیانه</td>
                    <td>08634131365</td>
                </tr>
                <tr>
                    <td>توسعه اندیشان اطلس (توانا)</td>
                    <td>02177009030 – 02177009031</td>
                </tr>
                <tr>
                    <td>بهینه صنعت اصفهان</td>
                    <td>03142499813</td>
                </tr>
            </tbody>
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