@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">{{$company->name}}</h4>
        </div>
        <table class="card-block table">
            <tr>
                <th>
                    NIP
                </th>
                <td class="row">
                    <div class="col-xs-12">
                        {{$company->NIP}}
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    Address
                </th>
                <td class="row">
                    <div class="col-xs-12">
                        {{ $company->address->street }}
                    </div>
                    <div class="col-xs-12">
                        {{ $company->address->postalCode }}
                        {{ $company->address->city }}
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection
