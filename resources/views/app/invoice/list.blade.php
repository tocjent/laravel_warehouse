@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block row">
            <div class="col-sm-12 col-md-6">
                <h4>Invoices list</h4>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="btn-group pull-right">
                    {{-- <a href="{{route('invoice_create')}}" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                        Create
                    </a> --}}
                </div>
            </div>
        </div>
        <table class="card-block table table-hover">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Number</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                <tr>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('invoice_show', ['id' => $invoice->id])}}" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('invoice_edit', ['id' => $invoice->id])}}" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </td>
                    <td>{{ $invoice->number }}</td>
                    <td>{{ $invoice->sellerName }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
