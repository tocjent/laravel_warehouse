@extends('app.layout')

@section('content')
    <div class="card">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>NIP</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>
                        {{ $company->id }}
                    </td>
                    <td>
                        {{ $company->name }}
                    </td>
                    <td>
                        {{ $company->NIP }}
                    </td>
                    <td>
                        {{ $company->address->street }}
                        {{ $company->address->postalCode }}
                        {{ $company->address->city }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
