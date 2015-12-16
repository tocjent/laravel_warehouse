@extends('app.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">
                @if($invoice->id)
                    Invoice #{{$invoice->id}}
                @else
                    New invoice
                @endif
            </h4>
        </div>
        <div class="card-block m-x-1">
            {!! Form::model($invoice, ['route' => ['invoice_save', $invoice->id]]) !!}
                <div class="row m-a-1">
                    <div class="form-group row col-sm-12 col-md-6">
                        <div class="col-xs-12">
                            {!! Form::label('number', 'Number') !!}
                            <p>{{$invoice->number}}</p>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12 col-md-6">
                        <div class="col-xs-12">
                            {!! Form::label('sellerName', 'Seller name') !!}
                            {!! Form::text('sellerName', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-xs-12">
                            {!! Form::label('sellerNIP', 'Seller NIP') !!}
                            {!! Form::text('sellerNIP', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row m-b-1 col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            Save
                        </button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
