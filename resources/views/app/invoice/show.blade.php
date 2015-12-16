@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">Invoice #{{$invoice->id}}</h4>
        </div>
        <table class="card-block table">
            <tr>
                <th>
                    Number
                </th>
                <td class="row">
                    <div class="col-xs-12">
                        {{$invoice->number}}
                    </div>
                </td>
            </tr>
            <tr>
                <th>Seller name</th>
                <td class="row">
                    <div class="col-xs-12">
                        {{ $invoice->sellerName }}
                    </div>
                </td>
            </tr>
            <tr>
                <th>Seller NIP</th>
                <td class="row">
                    <div class="col-xs-12">
                        {{ $invoice->sellerNIP }}
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection
