@extends('template')

@section('header')
    <link rel="stylesheet" href="https://colorlib.com/etc/tb/Table_Responsive_v1/css/main.css">
@endsection

@section('content')
    <div class="container-table100" style="z-index: 1;">
        <div class="wrap-table100">
            <p style="color: aliceblue;margin-left: 10px">ប្រាក់​សរុប (រៀល) : <strong style="color: rgb(255, 172, 172)">{{ number_format($amountRiel, 0, '.', ',') }} រៀល</strong></p>
            <p style="color: aliceblue;margin-left: 10px">ប្រាក់​សរុប (ដុល្លារ) : <strong style="color: rgb(255, 172, 172)">{{ number_format($amountUsd, 0, '.', ',') }} ដុល្លារ</strong></p>
            <p style="color: aliceblue;margin-left: 10px">ចំនួនភ្ញៀវ : <strong style="color: rgb(255, 172, 172)">{{ $count }} នាក់</strong></p>
            <div class="table100">
                <table>
                    <thead>
                        <tr class="table100-head">
                            <th class="column1">ឈ្មោះខ្មែរ</th>
                            <th class="column2">ឈ្មោះអង់គ្លេស</th>
                            <th class="column3">អាស័យដ្ឋាន</th>
                            <th class="column4">ប្រាក់​រៀល</th>
                            <th class="column5">ប្រាក់​ដុល្លារ</th>
                            <th class="column6">ផ្សេងៗ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td class="column1">{{ $customer->khName }}</td>
                                <td class="column2">{{ $customer->enName }}</td>
                                <td class="column3">{{ $customer->address->name }}</td>
                                <td class="column4">{{ $customer->rielCurrency }} រៀល</td>
                                <td class="column5">{{ $customer->usdCurrency }} ដុល្លារ</td>
                                <td class="column6">{{ $customer->other }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
