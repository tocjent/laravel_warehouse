@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block row">
            <div class="col-sm-12 col-md-6">
                <h4>Company list</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="btn-group pull-right">
                    <a href="{{route('company_create')}}" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                        Create
                    </a>
                </div>
            </div>
        </div>
        <table class="card-block table table-hover">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Name</th>
                    <th>NIP</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('company_show', ['id' => $company->id])}}" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('company_edit', ['id' => $company->id])}}" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->NIP }}</td>
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
